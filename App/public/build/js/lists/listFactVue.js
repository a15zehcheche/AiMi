import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        facturas:[],

    },
    mounted(){
        this.getFacturas()
    },
    methods: {
        getFacturas: function () {
            var res=this
            axios.get(`${config.host}/api/facturas`)
                .then(function (response) {
                    res.facturas=response.data;
                    res.facturas.filter((factura)=>{
                        factura.productos=JSON.parse(factura.productos);
                    })
                    res.facturas.forEach(function (factura) {
                        factura.preuTotal = factura.productos.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                            return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                        })
                    })
                    res.facturas.forEach(function (factura) {
                        var preuBase = factura.preuTotal/1.21
                        factura.preuTotal = (preuBase+(preuBase*(factura.iva/100))+(preuBase*(factura.req/100))).toFixed(2)
                    })
                    console.log(res.facturas)
                    $(document).ready(function() {
                        $.fn.dataTable.ext.errMode = 'none';
                        $('#dataTable').DataTable({
                            "language" : {
                                "search": "Buscar:",
                                "paginate": {
                                    "first": "Principio",
                                    "last":  "Final",
                                    "next":  "Siguiente",
                                    "previous":  "Anterior"
                                },
                                "lengthMenu":     "Mostrar _MENU_ facturas",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ facturas",
                                "infoEmpty": "Mostrando 0 a 0 de 0 facturas",
                            },
                            scrollY: '50vh',
                            scrollCollapse: true,
                            "scrollX": true
                        });
                    });
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        }
    }
})