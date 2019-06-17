import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        productes:[],
        productoSelecte:[],
        messenge: "hola"
    },
    mounted(){
        this.getProductes();
    },
    methods: {
        getProductes:function () {
            var res=this
            axios.get(`${config.host}/productos`)
                .then(function (response) {
                    res.productes=response.data;
                    console.log(res.productes)
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
                                "lengthMenu":     "Mostrar _MENU_ productos",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ productos",
                                "infoEmpty": "Mostrando 0 a 0 de 0 productos",
                            },
                            scrollY: false,
                            scrollCollapse: true,
                            "scrollX": true
                        });
                    });
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        eliminar:function (id) {
            var res=this
            Swal.fire({
                title: 'Estas seguro?',
                text: "¡No podrás revertir esto!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminalo!'
            }).then((result) => {
                if (result.value) {
                    axios.delete(`${config.host}/api/producto/${id}`)
                        .then(function (response) {
                            res.getProductes()
                        })
                        .catch(function (error) {
                            // handle error
                            console.log(error);
                        })
                    Swal.fire(
                        'Eliminado!',
                        'El producto ha sido eliminado',
                        'success'
                    )
                }
            })

        },
        seleccionar:function (id) {
            this.productoSelecte=this.productes.filter((producte) => {return producte.id==id})
            this.productoSelecte = this.productoSelecte[0];
            console.log(this.productoSelecte)
        },

        guardar:function (id) {
            var res = this
            console.log(this.productoSelecte)
            axios.put(`${config.host}/api/producto/${id}`, {
                _codigo__barra: res.productoSelecte._codigo__barra,
                _codigo__producto: res.productoSelecte._codigo__producto,
                _nombre__producto:res.productoSelecte._nombre__producto,
                _descuento__producto:res.productoSelecte._descuento__producto,
                _categoria:res.productoSelecte._categoria,
                _precio__compra:res.productoSelecte._precio__compra,
                _pvp:res.productoSelecte._pvp,
                _cantidad__pack:res.productoSelecte._cantidad__pack,
                _stock:res.productoSelecte._stock,
                _aviso__stock:res.productoSelecte._aviso__stock
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Guardado correctamente',
                    })
                    res.getProductes()
                })
                .catch(function (error) {
                    console.log(error);
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'Algún campo esta mal, reviselo.'
                    })
                });
        }
    }
})