
const config = {
    host:"http://localhost:81"
};
/*
export default class backend {

    constructor() {
        this.host = "http://localhost:81";
    }
    getActualUser () {
        var token = (new appfunctions()).getCookie("token")
        var data = null
       axios.post(`${this.host}/actualUser`,{
                "jwt": token,
           })
           .then(function (response) {
                console.log(response.data);
                data = response.data
            })
            .catch(function (error) {
                console.log(error);
                return error;
            })
        return data;
    }
    getProductos () {
        axios.get(`${this.host}/productos`)
            .then(function (response) {
                console.log(response.data);
                return response.data;
            })
            .catch(function (error) {
                console.log(error);
                return error;
            })
    }
}*/

export {config};

