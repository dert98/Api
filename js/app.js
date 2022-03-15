   
var app = new Vue({
  el: "#app",
  data: {
    mensaje:'hola mundo',
    productos:{}
  },
  
  mounted: function () {
    this.getProducts();
  },
  
  methods: {
    getProducts: function() {
		axios.get('http://localhost/api/api/api.php?action=r')
  		.then(function (response) {
  			if (response.data.error) {
  				app.errorMessage = response.data.message;
  			} else {
  				app.productos = response.data.productos;
  				app.filtrados = response.data.productos;
  			}
  		})
	},
  },
  })