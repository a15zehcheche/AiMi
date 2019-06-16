import {config} from '../config.js';

var app = new Vue({
    el: '#resumen',
    data: {
        gananciaMesual:0,
        gananciaAnual:0,
        quantitatF:0,
        quantitatD:0,
        facturas:[],
        devoluciones:[]
    },
    mounted(){
        //this.getFacturas();
    },
    methods: {
        getFacturas(){
            var res=this
            axios.get(`${config.host}/api/facturas`)
                .then(function (response) {
                    res.facturas=response.data;
                    //console.log(res.facturas);
                    res.facturas.filter((factura)=>{
                        factura.productos=JSON.parse(factura.productos);
                    })
                    res.facturas.forEach(function (factura) {
                        factura.preuTotal = factura.productos.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                            return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                        })
                    })
                    res.facturas.forEach(function (factura) {
                        var preuBase = factura.preuTotal/1.21
                        factura.preuTotal = (preuBase+(preuBase*(factura.iva/100))+(preuBase*(factura.req/100))).toFixed(2)
                    })

                    res.getDevoluciones();
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        getDevoluciones(){
            var res=this
            axios.get(`${config.host}/api/devolucions`)
                .then(function (response) {
                    res.devoluciones=response.data;
                    //console.log(res.devoluciones);
                    res.calcularDatos();
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        calcularDatos(){
            var d = new Date();
            var thisMonth = d.getMonth() +1;
            var thisYear = d.getFullYear();
            this.facturas.forEach(function (factura) {
                factura.mes = factura["fecha"].split("-")[1];
                factura.anyo = factura["fecha"].split("-")[2];
            })
            this.devoluciones.forEach(function (factura) {
                factura.mes = factura["fecha"].split("-")[1];
                factura.anyo = factura["fecha"].split("-")[2];
            })
            this.facturas = this.facturas.filter(factura => factura["anyo"] == thisYear);
            this.devoluciones = this.devoluciones.filter(devolucion => devolucion["anyo"] == thisYear);

            /*
            1. 39000  Ganancia (Mesual)  factura_this_mes_total - devolucion_this_mes_totat
            2. 120000 Ganancia (Anual)  factura_this_año_total - devolucion_this_año_totat
            3. 10 Qua.Factura   count factura_this_mes_total
            4. 1  Qua.Devolucion  count devolucion_this_mes_totat

            */
            this.gananciaAnual =
                (this.facturas.map((factura) => factura.preuTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); })
                -this.devoluciones.map((factura) => factura.precioTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); })).toFixed(2);

            this.gananciaMesual =
                (this.facturas.filter(factura => factura["mes"] == thisMonth).map((factura) => factura.preuTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); })
                -this.devoluciones.filter(devolucion => devolucion["mes"] == thisMonth).map((factura) => factura.precioTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); })).toFixed(2);

            this.quantitatF = this.facturas.filter(factura => factura["mes"] == thisMonth).length;

            this.quantitatD = this.devoluciones.filter(devolucion => devolucion["mes"] == thisMonth).length;

        }

    }
})