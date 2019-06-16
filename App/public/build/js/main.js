import appfunctions from '/build/js/appFunctions.js';
import {config} from '/build/js/config.js';


var body = new Vue({
    el: '#content',
    data: {
        user:null,
        host:config.host
    },
    mounted(){
        this.getActualUser();
        console.log(this.user);
    },
    beforeMount: function() {

    },
    methods: {
        getActualUser () {
            var token = (new appfunctions()).getCookie("token")
            if(!token){
                window.location.replace((new appfunctions()).host + "/login");
            }
            var vueElement = this
            axios.post(`${config.host}/actualUser`,{
                "jwt": token,
            })
                .then(function (response) {
                    console.log(response.data);
                    vueElement.user = response.data.data
                })
                .catch(function (error) {
                    console.log(error);
                    return error;
                })
        },
        logout:function(){
            (new appfunctions()).setCookie("token","",0);
            window.location.replace((new appfunctions()).host + "/login");
        },
        getFacturas: function () {
            var res=this
            axios.get(`${config.host}/api/factura/${res.numFactura}`)
                .then(function (response) {
                    res.factura=response.data;
                    res.numCliente=res.factura.cliente_id;
                    console.log(res.factura)
                    res.getClients()
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        }
    }
})
