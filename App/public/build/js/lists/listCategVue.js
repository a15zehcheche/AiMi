import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        categorias:[],
        categoriaSelect:[]
    },
    mounted(){
        this.getCategorias()
    },
    methods: {
        getCategorias: function () {
            var res=this
            axios.get(`${config.host}/categorias`)
                .then(function (response) {
                    res.categorias=response.data;
                    console.log(res.categorias)
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
                                "lengthMenu":     "Mostrar _MENU_ categorias",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ categorias",
                                "infoEmpty": "Mostrando 0 a 0 de 0 categorias",
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
                    axios.delete(`${config.host}/api/categoria/${id}`)
                        .then(function (response) {
                            res.getCategorias()
                        })
                        .catch(function (error) {
                            // handle error
                            console.log(error);
                        })
                    Swal.fire(
                        'Eliminado!',
                        'La categoria ha sido eliminada',
                        'success'
                    )
                }
            })
        },
        seleccionar:function (id) {
            this.categoriaSelect=this.categorias.filter((categoria) => {return categoria.id==id})
            this.categoriaSelect = this.categoriaSelect[0];
            console.log(this.categoriaSelect)
        },

        guardar:function (id) {
            var res = this
            console.log(this.categoriaSelect)
            axios.put(`${config.host}/api/categoria/${id}`, {
                name: this.categoriaSelect.name
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Guardado correctamente',
                    })
                    res.getCategorias()
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