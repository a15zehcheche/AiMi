import {config} from '/build/js/config.js';
import appfunctions from '/build/js/appFunctions.js';

var app = new Vue({
    el: '#app',
    data: {
        host:config.host,
        nombre:null,
        user:null,
        PASSWORD_OLD:"",
        PASSWORD_NEW:"",
        PASSWORD_NEW_CONFIRM:"",
        photoFile:null,
        avisos:{
            photo:false,
            password:false
        }
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

        updateImage(){
            let formData = new FormData();
            formData.append('photoProfile', this.photoFile);
            if(this.photoFile){
                axios.post(`${config.host}/usuariPhoto/${this.user.ID}`, formData, {
                    onUploadProgress: progressEvent => {
                        console.log(progressEvent.loaded / progressEvent.total)
                    }
                })  .then(function (response) {
                    (new appfunctions()).setCookie("token",response.data.jwt,1);
                    window.location.replace((new appfunctions()).host);
                })
                    .catch(function (error) {
                        console.log(error);
                        return error;
                    })
            }else{
                this.avisos.photo = true;
            }

        },
        updateName(){
            var token = (new appfunctions()).getCookie("token")
            axios.put(`${config.host}/usuari/${this.user.ID}`,{
                "NOMBRE":this.nombre,
                "jwt": token,
            })
                .then(function (response) {
                    if (response.data.done){
                        (new appfunctions()).setCookie("token",response.data.jwt,1);
                        window.location.replace((new appfunctions()).host);
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

        },
        updatePassword(){
            if(this.PASSWORD_NEW == this.PASSWORD_OLD || this.PASSWORD_NEW != this.PASSWORD_NEW_CONFIRM){
                this.avisos.password = true;
            }else{
                var token = (new appfunctions()).getCookie("token")
                axios.put(`${config.host}/usuari/${this.user.ID}`,{
                    "NOMBRE":this.nombre,
                    "PASSWORD_OLD":this.PASSWORD_OLD,
                    "PASSWORD_NEW":this.PASSWORD_NEW,
                    "jwt": token,
                })
                    .then(function (response) {
                        console.log(response.data)
                        if (response.data.done){
                            Swal.fire({
                                position: 'top-end',
                                type: 'success',
                                title: 'Update Password',
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
                this.PASSWORD_NEW = this.PASSWORD_OLD = this.PASSWORD_NEW_CONFIRM ="";
            }

        },
        onFileChanged (event) {
            this.photoFile =  event.target.files[0];
            console.log(this.photoFile);
        },

    }
})