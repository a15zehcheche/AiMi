import {config} from '/build/js/config.js';
import appfunctions from '/build/js/appFunctions.js';

var app = new Vue({
    el: '#app',
    data: {
        host:config.host,
        nombre:null,
        user:null,
        PASSWORD_OLD:null,
        PASSWORD_NEW:null,
        PASSWORD_NEW_CONFIRM:null
    },
    mounted(){
        this.getActualUser();
    },
    beforeMount: function() {

    },
    methods: {
        getActualUser () {
            var token = (new appfunctions()).getCookie("token")
            if (!token) {
                window.location.replace((new appfunctions()).host + "/login");
            }
            var vueElement = this
            axios.post(`${config.host}/actualUser`, {
                "jwt": token,
            })
                .then(function (response) {
                    console.log(response.data);
                    vueElement.user = response.data.data
                    vueElement.nombre = vueElement.user.NOMBRE;
                })
                .catch(function (error) {
                    console.log(error);
                    return error;
                })
        },
        update(){
            var token = (new appfunctions()).getCookie("token")
            var vueElement = this;

            axios.put(`${config.host}/usuari/${this.user.ID}`,{
                "NOMBRE":this.nombre,
                "jwt": token,
            })
                .then(function (response) {
                    console.log(response.data);
                    (new appfunctions()).setCookie("token",response.data.jwt,1);
                    vueElement.getActualUser();
                })
                .catch(function (error) {
                    console.log(error);
                    return error;
                })

            if(this.PASSWORD_NEW == this.PASSWORD_NEW_CONFIRM && this.PASSWORD_OLD != null){
                axios.put(`${config.host}/usuari/${this.user.ID}`,{
                    "PASSWORD_OLD":this.PASSWORD_OLD,
                    "PASSWORD_NEW":this.PASSWORD_NEW,
                    "jwt": token,
                })
                    .then(function (response) {
                        if (response.data.done){
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Update',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }else{
                            Swal.fire({
                                position: 'top-end',
                                type: 'error',
                                title: 'Update Password',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }

                    })
                    .catch(function (error) {
                        console.log(error);
                        return error;
                    })
            }
            this.PASSWORD_NEW = this.PASSWORD_OLD = this.PASSWORD_NEW_CONFIRM ="";

        }

    }
})