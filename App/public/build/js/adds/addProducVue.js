import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        codi_barra:'',
        codi_producto:'',
        nombre: '',
        descuento: '',
        categoria: '',
        precio_compra: '',
        pvp: '',
        cantidad: '',
        stock: '',
        aviso: '',
        categorias: [],
        categoriaSelect: [],
        categoriaSelectString: "",
    },
    mounted(){
        this.getCategorias();
        this.$refs.focus.focus();
    },
    methods: {
        addProduc: function () {
            var res=this
            res.categoriaSelectString = res.categoriaSelect.toString();

            axios.post(`${config.host}/api/producto`, {
                _codigo__barra: res.codi_barra,
                _codigo__producto: res.codi_producto,
                _nombre__producto:res.nombre,
                _descuento__producto:res.descuento,
                _categoria:res.categoriaSelectString,
                _precio__compra:res.precio_compra,
                _pvp:res.pvp,
                _cantidad__pack:res.cantidad,
                _stock:res.stock,
                _aviso__stock:res.aviso
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Producto añadido correctamente',
                    })
                    res.codi_barra=''
                    res.codi_producto=''
                    res.nombre=''
                    res.descuento=''
                    res.categoriaSelect=[]
                    res.categoriaSelectString=''
                    res.precio_compra=''
                    res.pvp=''
                    res.cantidad=''
                    res.stock=''
                    res.aviso=''
                })
                .catch(function (error) {
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'Algún campo esta mal, reviselo.'
                    })
                    res.codi_barra=''
                    res.codi_producto=''
                    res.nombre=''
                    res.descuento=''
                    res.categoria=''
                    res.precio_compra=''
                    res.pvp=''
                    res.cantidad=''
                    res.stock=''
                    res.aviso=''
                });
        },
        getCategorias: function () {
            var res=this
            axios.get(`${config.host}/api/categorias`)
                .then(function (response) {
                    res.categorias=response.data;
                    console.log(res.categorias)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        save: function () {
            console.log( this.categoriaSelectString);
        }
    }
})