import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        nom: ''
    },
    mounted(){
        this.$refs.focus.focus();
    },
    methods: {
        addCategoria: function () {
            var res=this
            axios.post(`${config.host}/api/categoria`, {
                name: res.nom,
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Categoria añadido correctamente',
                    })
                    res.nom=''
                })
                .catch(function (error) {
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'Algún campo esta mal, reviselo.'
                    })
                    res.nom=''
                });
        }
    }
})