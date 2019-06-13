import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        nom: '',
        comercials: [],
        clients:[],
        productes:[],
        impuestos:[],
        facturas:[],
        comercialSeleccionat:null,
        clientSeleccionat:null,
        searchCliente:"",
        searchComercial:"",
        codibarra:"",
        producteSeleccionat:null,
        preu:"",
        quantitat:1,
        productesAfegides:[],
        preutotal:"0",
        iva:null,
        req:null,
    },
    mounted(){
        const ref = this
        this.getComercials()
        this.getClients()
        this.getProductes()
        this.getImpuestos()
        this.getFacturas()
        document.addEventListener("keydown", function(event) {
            if(event.which==107){
                ref.aumentarQuantitat()
            }
            else if(event.which==109){
                ref.disminuirQuantitat()
            }
            else if(event.which==17){
                ref.$refs.focus.focus()
            }
            else if(event.which==18){
                ref.$refs.focuspreu.focus()
            }
            else if(event.which==13){
                ref.afegirProducte()
            }
        })

    },
    methods: {
        getComercials: function () {
            var res=this
            axios.get(`${config.host}/api/comercials`)
                .then(function (response) {
                    res.comercials=response.data;
                    console.log(res.comercials)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        getClients: function () {
            var res = this
            axios.get(`${config.host}/api/clientes`)
                .then(function (response) {
                    res.clients = response.data;
                    console.log(res.clients)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        getProductes:function () {
            var res=this
            axios.get(`${config.host}/api/productos`)
                .then(function (response) {
                    res.productes=response.data;
                    console.log(res.productes)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        getImpuestos:function () {
            var res=this
            axios.get(`${config.host}/api/impuestos`)
                .then(function (response) {
                    res.impuestos=response.data;
                    res.impuestos.filter((impuesto)=>{
                        if(impuesto.nom=="iva"){
                            res.iva=impuesto.valor
                        }
                        else if(impuesto.nom=="req"){
                            res.req=impuesto.valor
                        }
                    })
                    console.log(res.impuestos)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        getFacturas: function () {
            var res = this
            axios.get(`${config.host}/api/facturas`)
                .then(function (response) {
                    res.facturas = response.data;
                    console.log(res.facturas)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },
        SelectComercial:function (id) {
            this.comercialSeleccionat=this.comercials.filter((comercial) => {return comercial.id==id})
            this.comercialSeleccionat = this.comercialSeleccionat[0];
        },
        SelectCliente:function (id) {
            this.clientSeleccionat=this.clients.filter((client) => { return client.id == id})
            this.clientSeleccionat = this.clientSeleccionat[0];
            if(this.productesAfegides.length!=0){
                this.productesAfegides.filter((producte) => {
                        producte.subtotal=(producte.Unds*producte.preu*producte.quantitatpack-producte.Unds*producte.preu*producte.quantitatpack*(this.clientSeleccionat._descuento__cliente/100)).toFixed(2)
                })
                this.preutotal = this.productesAfegides.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                    return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                })
            }
        },
        CodiIntroduit:function () {
            this.producteSeleccionat=this.productes.filter((producte) => { return producte._codigo__barra == this.codibarra})
            this.producteSeleccionat = this.producteSeleccionat[0]
            if(this.producteSeleccionat){
                this.preu=this.producteSeleccionat._pvp
            }else{
                this.preu=""
            }
        },
        aumentarQuantitat:function () {
            this.quantitat++;
        },
        disminuirQuantitat:function () {
            if(this.quantitat>1)
            this.quantitat--;
        },
        afegirProducte:function () {
            if(!this.clientSeleccionat){
                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Falta seleccionar client',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(!this.codibarra){
                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Falta codi de barra',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(this.productesAfegides.some(item => item.codi == this.codibarra)){
                this.productesAfegides.filter((producte) => {
                    if(producte.codi==this.codibarra){
                        producte.Unds+=this.quantitat
                        producte.preu=this.preu
                        producte.subtotal=(producte.Unds*this.preu*producte.quantitatpack-producte.Unds*this.preu*producte.quantitatpack*(this.clientSeleccionat._descuento__cliente/100)).toFixed(2)
                    }
                })
                this.quantitat=1;
                this.codibarra="";
                this.preu="";
                this.producteSeleccionat=null;
                this.preutotal = this.productesAfegides.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                    return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                })
            }
            else{
                let producte = {
                    codi:this.producteSeleccionat._codigo__barra,
                    descripcion:this.producteSeleccionat._nombre__producto,
                    quantitatpack:this.producteSeleccionat._cantidad__pack,
                    Unds:this.quantitat,
                    preu: this.preu,
                    subtotal:(this.preu*this.quantitat*this.producteSeleccionat._cantidad__pack-this.preu*this.quantitat*this.producteSeleccionat._cantidad__pack*(this.clientSeleccionat._descuento__cliente/100)).toFixed(2)
                }
                this.productesAfegides.push(producte)
                this.quantitat=1;
                this.codibarra="";
                this.preu="";
                this.producteSeleccionat=null;
                this.preutotal = this.productesAfegides.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                    return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                })
            }
        },
        Eliminar:function (codi) {
            this.productesAfegides=this.productesAfegides.filter(producte => {
                return producte.codi != codi;
            })
            this.ActualizarPreu();
        },
        modifUnd:function (codi) {
            if(typeof codi == 'number') {
                this.productesAfegides.filter((producte) => {
                    if (producte.codi == codi) {
                        producte.subtotal=(producte.Unds*producte.preu*producte.quantitatpack-producte.Unds*producte.preu*producte.quantitatpack*(this.clientSeleccionat._descuento__cliente/100)).toFixed(2)
                    }
                })
                this.preutotal = this.productesAfegides.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                    return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                })
            }
        },
        modifPreu:function (codi) {
            if(typeof codi == 'number') {
                this.productesAfegides.filter((producte) => {
                    if (producte.codi == codi) {
                        producte.subtotal=(producte.Unds*producte.preu*producte.quantitatpack-producte.Unds*producte.preu*producte.quantitatpack*(this.clientSeleccionat._descuento__cliente/100)).toFixed(2)
                    }
                })
                this.preutotal = this.productesAfegides.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                    return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                })
            }
        },
        ActualizarPreu:function () {
            if(this.productesAfegides.length==0){
                this.preutotal=0
            }else {
                this.preutotal = this.productesAfegides.map((producte) => producte.subtotal).reduce((previousValue, currentValue) => {
                    return (parseFloat(previousValue) + parseFloat(currentValue)).toFixed(2)
                })
            }
        },
        CrearFactura:function () {
            if(!this.clientSeleccionat){
                Swal.fire({
                    type: 'error',
                    title: 'Falta seleccionar cliente',
                })
            }
            else if(!this.comercialSeleccionat){
                Swal.fire({
                    type: 'error',
                    title: 'Falta seleccionar comercial',
                })
            }
            else if(this.productesAfegides.length==0){
                Swal.fire({
                    type: 'error',
                    title: 'Falta añadir productos',
                })
            }
            else {
                var res = this
                res.productesAfegides.forEach(function (producte){
                    producte.descompte=res.clientSeleccionat._descuento__cliente
                    producte.Unds=producte.Unds*producte.quantitatpack
                })
                let productos = JSON.stringify(res.productesAfegides)
                let fecha = `${new Date().getDate()}-${new Date().getMonth() + 1}-${new Date().getFullYear()}`
                let numFactura = parseInt(res.facturas[res.facturas.length-1].facturaNumero)+1
                axios.post(`${config.host}/api/factura`, {
                    factura_numero: numFactura,
                    fecha: fecha,
                    productos: productos,
                    req: res.req,
                    cliente_id: res.clientSeleccionat.id,
                    comercial_id: res.comercialSeleccionat.id,
                    iva: res.iva
                })
                    .then(function (response) {
                        window.location.href = `/downloadFactura/${numFactura}`;
                    })
                    .catch(function (error) {
                        Swal.fire({
                            type: 'error',
                            title: 'Opsss',
                            text: 'Algún campo esta mal, reviselo.'
                        })
                    });
            }
        },
    },
    computed:{
        filteredComercials:function(){
            return this.comercials.filter((comercial) => {
                return comercial._nombre__comercial.match(this.searchComercial)
            })
        },
        filteredCliente:function(){
            return this.clients.filter((client) => {
                return client._nombre__cliente.match(this.searchCliente)
            })
        },
    }
})