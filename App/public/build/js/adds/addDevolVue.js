import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        facturas:[],
        numFactura: '',
        FacturaSelecte:null,
        productos:null,
        productosDevolucion:[],
        trobat:true
    },
    mounted(){
        this.getFacturas()
    },
    methods: {
        getFacturas:function () {
            var res=this
            axios.get(`${config.host}/api/facturas`)
                .then(function (response) {
                    res.facturas=response.data;
                    console.log(res.facturas)
                })
                .catch(function (error) {

                })
        },
        BuscarProductos:function () {
            this.FacturaSelecte=this.facturas.filter((factura) => { return factura.facturaNumero==this.numFactura})
            if(this.FacturaSelecte.length>0){
                this.FacturaSelecte=this.FacturaSelecte[0]
                this.productos=JSON.parse(this.FacturaSelecte.productos)
                console.log(this.FacturaSelecte)
                console.log(this.productos)
                this.trobat=true
            }
            else{
                this.FacturaSelecte=null
                this.productos=null
                this.trobat=false
            }
            this.productosDevolucion=[]
        },
        CrearDevolucion:function () {
            if(this.productosDevolucion.length==0){
                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Falta seleccionar productos a devolver',
                    showConfirmButton: false,
                    timer: 1000
                })
            }else{
                var res = this
                let pTotal = res.productosDevolucion.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                    return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                })
                pTotal = pTotal/1.21
                pTotal = (pTotal+(pTotal*(res.FacturaSelecte.iva/100))+(pTotal*(res.FacturaSelecte.req/100))).toFixed(2)
                let fecha = `${new Date().getDate()}-${new Date().getMonth() + 1}-${new Date().getFullYear()}`
                console.log(pTotal)
                console.log(this.productosDevolucion)
                let productos = JSON.stringify(res.productosDevolucion)

                axios.post(`${config.host}/api/devolucion`, {
                    numFactura: res.FacturaSelecte.facturaNumero,
                    fecha: fecha,
                    precioTotal: pTotal,
                    productos: productos,
                })
                    .then(function (response) {
                        window.location.href = `/llistarDevolucion`;
                    })
                    .catch(function (error) {
                        Swal.fire({
                            type: 'error',
                            title: 'Opsss',
                            text: 'Algún campo esta mal, reviselo.'
                        })
                    });
            }
        }
    }
})