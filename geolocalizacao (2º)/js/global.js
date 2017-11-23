var bt = document.getElementById("btLocalizar");
var divMapa = document.getElementById("mapa");

bt.addEventListener("click", function (){
	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(function(position){
			var lat = position.coords.latitude;
			var long =position.coords.longitude;

			var latlong = new google.maps.LatLng(lat,long);
			console.log(latlong);
			var opcoes = {
				center:latlong,
				zoom:14
			};
			var meuMapa = new google.maps.Map(divMapa,opcoes);
			var marcador = new google.maps.Marker({
				position:latlong,
				map:meuMapa
			});
			
		});
	}
});