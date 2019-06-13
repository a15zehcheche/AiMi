import {config} from '../config.js';
var app = new Vue({
    el: '#app',
    data: {
        codi_client:'',
        nom_client:'',
        cif: '',
        nom_contacte: '',
        telefon_contacte: '',
        descompte: '',
        adreça: '',
        cp: '',
        ciutat: '',
        provincia: '',
        pais:'',
        telefon1:'',
        telefon2: '',
        movil: '',
        fax: '',
        email: '',
        adreça_enviament: '',
        cp_enviament: '',
        ciutat_enviament: '',
        provincia_enviament: '',
        pais_enviament: '',
        addressFequalAddressE:false
    },
    mounted(){
        this.$refs.focus.focus();
    },
    methods: {
        addClient: function () {
            var res=this;
            if(this.addressFequalAddressE){
                this.adreça_enviament = this.adreça;
                this.cp_enviament = this.cp;
                this.ciutat_enviament = this.ciutat;
                this.provincia_enviament = this.provincia;
                this.pais_enviament = this.pais;
            }
            axios.post(`${config.host}/api/cliente`, {
                _codigo__cliente: res.codi_client,
                _nombre__cliente: res.nom_client,
                _cif__dni__nie:res.cif,
                _nombre__contacto:res.nom_contacte,
                _telefono__contacto:res.telefon_contacte,
                _descuento__cliente:res.descompte,
                _direccion:res.adreça,
                _cp:res.cp,
                _ciudad:res.ciutat,
                _provincia:res.provincia,
                _pais:res.pais,
                _telefono1: res.telefon1,
                _telefono2: res.telefon2,
                _movil:res.movil,
                _fax:res.fax,
                _email:res.email,
                _direccion__envio:res.adreça_enviament,
                _cp__envio:res.cp_enviament,
                _ciudad__envio:res.ciutat_enviament,
                _provincia__envio:res.provincia_enviament,
                _pais__envio:res.pais_enviament
            }).then(function (response) {
                    Swal.fire({
                        type: 'success',
                        title: 'Client añadido correctamente',
                    })
                    res.codi_client=''
                    res.nom_client=''
                    res.cif=''
                    res.nom_contacte=''
                    res.categoria=''
                    res.telefon_contacte=''
                    res.descompte=''
                    res.adreça=''
                    res.cp=''
                    res.ciutat=''
                    res.provincia=''
                    res.pais=''
                    res.telefon1=''
                    res.telefon2=''
                    res.movil=''
                    res.fax=''
                    res.email=''
                    res.adreça_enviament=''
                    res.cp_enviament=''
                    res.ciutat_enviament=''
                    res.provincia_enviament=''
                    res.pais_enviament=''
                }).catch(function (error) {
                    Swal.fire({
                        type: 'error',
                        title: 'Opsss',
                        text: 'Algún campo esta mal, reviselo.'
                    })
                });
        }
    }
})