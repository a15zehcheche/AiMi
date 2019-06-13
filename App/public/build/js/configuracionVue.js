import {config} from '/build/js/config.js';
var app = new Vue({
    el: '#app',
    data: {
        empresa:[],
        iva:[],
        req:[]
    },
    mounted(){
        this.getEmpresa()
        this.getImpuestos()
    },

    methods: {
        getEmpresa:function () {
            var res=this
            axios.get(`${config.host}/api/empresa/1`)
                .then(function (response) {
                    res.empresa=response.data;
                    console.log(res.empresa)
                })
                .catch(function (error) {
                    console.log(error);
                })
        },
        getImpuestos:function () {
            var res=this
            axios.get(`${config.host}/api/impuestos`)
                .then(function (response) {
                    res.iva=response.data[0]
                    res.req=response.data[1]
                    console.log(res.iva)
                    console.log(res.req)
                })
                .catch(function (error) {
                    console.log(error);
                })
        },
        updEmpresa:function () {
            var res = this
            axios.put(`${config.host}/api/empresa/1`, {
                nom:res.empresa.nom,
                cp:res.empresa.cp,
                provincia:res.empresa.provincia,
                ciudad:res.empresa.ciudad,
                direccion:res.empresa.direccion,
                telefono:res.empresa.telefono,
                mobil:res.empresa.mobil,
                cif:res.empresa.cif
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Acutalizado correctament',
                    })
                })
                .catch(function (error) {
                    console.log(error);
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'Algún campo esta mal, reviselo.'
                    })
                });
        },
        updIva:function () {
            var res = this
            axios.put(`${config.host}/api/impuesto/1`, {
                valor:res.iva.valor
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Acutalizado correctament',
                    })
                })
                .catch(function (error) {
                    console.log(error);
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'Algún campo esta mal, reviselo.'
                    })
                });
        },
        updReq:function () {
            var res = this
            axios.put(`${config.host}/api/impuesto/2`, {
                valor:res.req.valor
            })
                .then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Acutalizado correctament',
                    })
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