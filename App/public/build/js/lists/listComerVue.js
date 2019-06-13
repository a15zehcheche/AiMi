import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        comercials:[],
        comercialSelecte:[]
    },
    mounted(){
        this.getComercials()
    },
    methods: {
        getComercials: function () {
            var res=this
            axios.get(`${config.host}/api/comercials`)
                .then(function (response) {
                    res.comercials=response.data;
                    console.log(res.comercials)
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
                                "lengthMenu":     "Mostrar _MENU_ comerciales",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ comerciales",
                                "infoEmpty": "Mostrando 0 a 0 de 0 comerciales",
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
                    axios.delete(`${config.host}/api/comercial/${id}`)
                        .then(function (response) {
                            res.getComercials()
                        })
                        .catch(function (error) {
                            // handle error
                            console.log(error);
                        })
                    Swal.fire(
                        'Eliminado!',
                        'El comercial ha sido eliminada',
                        'success'
                    )
                }
            })

        },
        seleccionar:function (id) {
            this.comercialSelecte=this.comercials.filter((comercial) => {return comercial.id==id})
            this.comercialSelecte = this.comercialSelecte[0];
            console.log(this.comercialSelecte)
        },

        guardar:function (id) {
            var res = this
            console.log(this.comercialSelecte)
            axios.put(`${config.host}/api/comercial/${id}`, {
                _nombre__comercial: res.comercialSelecte._nombre__comercial,
                _telefono__comercial: res.comercialSelecte._telefono__comercial,
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Guardado correctamente',
                    })
                    res.getComercials()
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