import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        clients:[],
        clientSelecte:[]
    },
    mounted(){
        this.getClients()
    },
    methods: {
        getClients: function () {
            var res=this
            axios.get(`${config.host}/api/clientes`)
                .then(function (response) {
                    res.clients=response.data;
                    console.log(res.clients)
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
                                "lengthMenu":     "Mostrar _MENU_ clientes",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ clientes",
                                "infoEmpty": "Mostrando 0 a 0 de 0 clientes",
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
                    axios.delete(`${config.host}/api/cliente/${id}`)
                        .then(function (response) {
                            res.getClients()
                        })
                        .catch(function (error) {
                            // handle error
                            console.log(error);
                        })
                    Swal.fire(
                        'Eliminado!',
                        'El cliente ha sido eliminado',
                        'success'
                    )
                }
            })

        },
        seleccionar:function (id) {
            this.clientSelecte=this.clients.filter((client) => {return client.id==id})
            this.clientSelecte = this.clientSelecte[0];
            console.log(this.clientSelecte)
        },

        guardar:function (id) {
            var res = this
            console.log(this.clientSelecte)
            axios.put(`${config.host}/api/cliente/${id}`, {
                _nombre__cliente: res.clientSelecte._nombre__cliente,
                _cif__dni__nie:res.clientSelecte._cif__dni__nie,
                _nombre__contacto:res.clientSelecte._nombre__contacto,
                _telefono__contacto:res.clientSelecte._telefono__contacto,
                _descuento__cliente:res.clientSelecte._descuento__cliente,
                _direccion:res.clientSelecte._direccion,
                _cp:res.clientSelecte._cp,
                _ciudad:res.clientSelecte._ciudad,
                _provincia:res.clientSelecte._provincia,
                _pais:res.clientSelecte._pais,
                _telefono1: res.clientSelecte._telefono1,
                _telefono2: res.clientSelecte._telefono2,
                _movil:res.clientSelecte._movil,
                _fax:res.clientSelecte._fax,
                _email:res.clientSelecte._email,
                _direccion__envio:res.clientSelecte._direccion__envio,
                _cp__envio:res.clientSelecte._cp__envio,
                _ciudad__envio:res.clientSelecte._ciudad__envio,
                _provincia__envio:res.clientSelecte._provincia__envio,
                _pais__envio:res.clientSelecte._pais__envio
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Guardat correctament',
                    })
                    res.getClients()
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