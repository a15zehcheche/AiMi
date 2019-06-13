import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        devoluciones:[],
    },
    mounted(){
        this.getDevoluciones()
    },
    methods: {
        getDevoluciones: function () {
            var res=this
            axios.get(`${config.host}/api/devolucions`)
                .then(function (response) {
                    res.devoluciones=response.data;
                    res.devoluciones.filter((devolucion)=>{
                        devolucion.productos=JSON.parse(devolucion.productos);
                    })
                    res.devoluciones.filter((devolucion)=>{
                        devolucion.preuTotal = devolucion.productos.map((devolucion) => devolucion.subtotal).reduce((previousValue, currentValue) => {
                            return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                        })
                    })
                    console.log(res.devoluciones)
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
                                "lengthMenu":     "Mostrar _MENU_ devoluciones",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ devoluciones",
                                "infoEmpty": "Mostrando 0 a 0 de 0 devoluciones",
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