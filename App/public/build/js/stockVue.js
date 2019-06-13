import {config} from '/build/js/config.js';
var app = new Vue({
    el: '#app',
    data: {
        productes:[],
        codibarra:"",
        producteSeleccionat:null,
        stock:""
    },
    mounted(){
        const ref = this
        ref.getProductes()
        ref.$refs.focus.focus()
        document.addEventListener("keydown", function(event) {
            if(event.which==17){
                ref.$refs.focus.focus()
            }
            else if(event.which==18){
                ref.Reset()
            }
        })
    },

    methods: {
        getProductes:function () {
            var res = this
            axios.get(`${config.host}/api/productos`)
                .then(function (response) {
                    res.productes = response.data;
                    console.log(res.productes)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        BuscarProducte:function () {
            this.producteSeleccionat=this.productes.filter((producte) => {return producte._codigo__barra==this.codibarra})
            if(this.producteSeleccionat.length>0) {
                this.producteSeleccionat = this.producteSeleccionat[0];
            }
            else{
                this.producteSeleccionat = null
            }
        },
        aumentar:function () {
            var res = this
            axios.put(`${config.host}/api/addProductoStock/${res.codibarra}`, {
                _stock: res.stock
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Stock añadido correctamente',
                    })
                    res.stock=""
                    res.producteSeleccionat=null
                    res.codibarra=""
                    res.getProductes()
                    res.$refs.focus.focus()
                })
                .catch(function (error) {
                    console.log(error);
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'No has puesto la cantidad'
                    })
                });
        },
        Reset:function () {
            this.codibarra=""
            this.producteSeleccionat=null
            this.$refs.focus.focus()
        }
    }
})