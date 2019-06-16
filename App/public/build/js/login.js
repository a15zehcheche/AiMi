import {config} from '/build/js/config.js';
import appfunctions from '/build/js/appFunctions.js';


var app = new Vue({
    el: '#app',
    data: {
        user_name:null,
        user_password:null,
        error_login:false,
    },
    mounted(){

    },
    beforeMount: function() {

    },
    methods: {
        login:function(){
            var vueElement = this;

            axios.post(`${config.host}/login`,{
                    "user_name":this.user_name,
                    "user_password":this.user_password
                })
                .then(function (response) {
                    if (!response.data.hasOwnProperty("done"))
                    {
                        (new appfunctions()).setCookie("token",response.data.jwt,1);
                        window.location.replace((new appfunctions()).host);
                    }else{
                        vueElement.error_login = true;
                    }
                    //console.log(response.data);
                    //console.log((new appfunctions()).getCookie("token"))
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
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
