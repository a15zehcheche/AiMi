import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        nom: '',
        codi:'',
        telefon:''
    },
    mounted(){
        this.$refs.focus.focus();
    },
    methods: {
        addComercial: function () {
            var res=this
            axios.post(`${config.host}/api/comercial`, {
                _codigo__comercio: res.codi,
                _nombre__comercial: res.nom,
                _telefono__comercial: res.telefon,

            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Comercial añadido correctamente',
                    })
                    res.codi=''
                    res.nom=''
                    res.telefon=''
                })
                .catch(function (error) {
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'Algún campo esta mal, reviselo.'
                    })
                    res.codi=''
                    res.nom=''
                    res.telefon=''
                });
        }
    }
})