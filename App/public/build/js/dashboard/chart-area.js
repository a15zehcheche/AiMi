// Set new default font family and font color to mimic Bootstrap's default styling
import {config} from '../config.js';

Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


var app2 = new Vue({
  el: '#grafic',
  data: {
    gananciaMesual:0,
    gananciaAnual:0,
    quantitatF:0,
    quantitatD:0,
    facturas:[],
    devoluciones:[],
    data:[1,2,3,4,5,6,7,8,9,10,11,12],
    gananciaMesual_neto:0,
    devolucionMesual:0,
    top5:[]
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
            res.devoluciones.forEach((devolucion)=>{
              devolucion.productos=JSON.parse(devolucion.productos);
            })
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

      this.gananciaMesual = this.facturas.filter(factura => factura["mes"] == thisMonth).map((factura) => factura.preuTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); });
      this.gananciaMesual_neto = (this.facturas.filter(factura => factura["mes"] == thisMonth).map((factura) => factura.preuTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); })
              -this.devoluciones.filter(devolucion => devolucion["mes"] == thisMonth).map((factura) => factura.precioTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); })).toFixed(2);
      this.devolucionMesual =  this.devoluciones.filter(devolucion => devolucion["mes"] == thisMonth).map((factura) => factura.precioTotal).reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); });

      console.log(this.gananciaMesual  +"=" + this.gananciaMesual_neto +"+"+this.devolucionMesual);

      for(var i=1; i<=12;i++){
          var facturas_mes =  this.facturas.filter(factura => factura["mes"] == i).map((factura) => factura.preuTotal);
          if(facturas_mes.length > 0){
            facturas_mes = facturas_mes.reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); });
          }else{
              facturas_mes = 0;
          }

         var devoluciones_mes =  this.devoluciones.filter(devolucion => devolucion["mes"] == i).map((devolucion) => devolucion.precioTotal);
         if(devoluciones_mes.length > 0){
           devoluciones_mes = devoluciones_mes.reduce(function(a, b){ return (parseFloat(a) + parseFloat(b)).toFixed(2); });
         }else{
           devoluciones_mes = 0;
         }
         this.data[i-1]=facturas_mes - devoluciones_mes;
      }

      var productos_vendido_total = 0;
      var productos_devuerto_total= 0;
      var productos_vendido =[];
      var productos_devuerto = [];
      console.log("factura")
      this.facturas.forEach(function(factura) {
        factura.productos.forEach(function(producto) {
          if( productos_vendido[producto.codi]){
            productos_vendido[producto.codi].unds_vendidos +=  parseInt(producto.Unds);
          }else{
            productos_vendido[producto.codi] = {codibarra:producto.codi, nombre:producto.descripcion, unds_vendidos:parseInt(producto.Unds), unds_deluertos:0 , porcentage:0};
          }
        })
      });



      for (var key in productos_vendido) {
        productos_vendido_total += productos_vendido[key].unds_vendidos;

      }

      //console.log(productos_vendido_total);

      var productos_vendido_array=[];
      for (var key in productos_vendido) {
        productos_vendido[key].porcentage =parseFloat( (productos_vendido[key].unds_vendidos*100 / (productos_vendido_total)).toFixed(2));
        productos_vendido_array.push( productos_vendido[key]);
      }
      productos_vendido_array = productos_vendido_array.sort((a,b) => (a.porcentage > b.porcentage) ? 1 : ((b.porcentage > a.porcentage) ? -1 : 0));
      //console.log(productos_vendido_array.reverse());
      this.top5 = productos_vendido_array.reverse();

      console.log(this.top5);




     /* this.devoluciones.forEach(function(devolucion) {
        devolucion.productos.forEach(function(producto) {
          if( productos_devuerto[producto.codi]){
            productos_devuerto[producto.codi].unds_vendidos +=  parseInt(producto.Unds);
          }else{
            productos_devuerto[producto.codi] = {codibarra:producto.codi, nombre:producto.descripcion, unds_vendidos:parseInt(producto.Unds), unds_deluertos:0};
          }
          productos_devuerto_total +=  productos_devuerto[producto.codi].unds_deluertos;

        })
      });
      console.log(productos_devuerto);*/



     this.pintarGrafic();

    },
  pintarGrafic(){
      var ctx = document.getElementById("myAreaChart");
      var res = this;
      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic"],
          datasets: [{
            label: "Ganancia",
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgba(78, 115, 223, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "rgba(78, 115, 223, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: [res.data[0], res.data[1], res.data[2], res.data[3], res.data[4], res.data[5], res.data[6], res.data[7], res.data[8], res.data[9], res.data[10], res.data[11]],
          }],
        },
        options: {
          maintainAspectRatio: false,
          layout: {
            padding: {
              left: 10,
              right: 25,
              top: 25,
              bottom: 0
            }
          },
          scales: {
            xAxes: [{
              time: {
                unit: 'date'
              },
              gridLines: {
                display: false,
                drawBorder: false
              },
              ticks: {
                maxTicksLimit: 7
              }
            }],
            yAxes: [{
              ticks: {
                maxTicksLimit: 5,
                padding: 10,
                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                  return '€' + res.number_format(value);
                }
              },
              gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
              }
            }],
          },
          legend: {
            display: false
          },
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: 'index',
            caretPadding: 10,
            callbacks: {
              label: function(tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return datasetLabel + ': ' + res.number_format(tooltipItem.yLabel) +'€';
              }
            }
          }
        }
      });


      var ctx = document.getElementById("myPieChart");
      var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["% Ganancia", "% Devolucion"],
          datasets: [{
            data: [((this.gananciaMesual_neto*100) / this.gananciaMesual).toFixed(2), ((this.devolucionMesual*100) / this.gananciaMesual).toFixed(2)],
            backgroundColor: ['#1cc88a', '#4e73df'],
            hoverBackgroundColor: ['#17a673', '#2e59d9'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
          }],
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
          },
          legend: {
            display: false
          },
          cutoutPercentage: 80,
        },
      });

    },
    number_format(number, decimals, dec_point, thousands_sep) {
      // *     example: number_format(1234.56, 2, ',', ' ');
      // *     return: '1 234,56'
      number = (number + '').replace(',', '').replace(' ', '');
      var n = !isFinite(+number) ? 0 : +number,
          prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
          sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
          dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
          s = '',
          toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
          };
      // Fix for IE parseFloat(0.55).toFixed(0) = 0;
      s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
      if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
      }
      if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
      }
      return s.join(dec);
    }



  }
})