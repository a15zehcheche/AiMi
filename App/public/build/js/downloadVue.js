import {config} from '/build/js/config.js';
var app = new Vue({
    el: '#app',
    data: {
        factura:[],
        client:[],
        numFactura:"",
        numCliente:"",
        bultos:1,
        url: ""
    },
    mounted(){
        this.getFacturas()

    },
    beforeMount: function() {
        this.numFactura = $('.numFactura').data('numFactura');
        console.log(this.numFactura)
    },
    methods: {
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
        },
        getClients: function () {
            var res = this
            axios.get(`${config.host}/api/cliente/${res.numCliente}`)
                .then(function (response) {
                    res.client = response.data;
                    console.log(res.client)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        imprimirDireccio:function () {
            if(isNaN(this.bultos) || this.bultos<1){
                Swal.fire({
                    type: 'error',
                    title: 'El numero de bultos no esta bien',
                })
            }else {
                window.open(`${config.host}/facturaDireccion/${this.numFactura}/${this.bultos}`, '_blank');
            }
        },
        imprimir:function () {
            this.url = `${config.host}/facturaDireccion/${this.numFactura}/${this.bultos}`;

            console.log(this.url)
        }
    }
})