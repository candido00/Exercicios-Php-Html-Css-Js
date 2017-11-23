function trocar(imagem,titulo,descricao) {
	document.getElementById('imagem_principal').src=imagem;
	document.getElementById('titulo').value = titulo;
	document.getElementById('descricao').value = descricao;
	// body...
}
var bt = document.getElementById("btLocalizar");
var divMapa = document.getElementById("mapa");

if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(function(position){
			var lat = -8.517464;
			var long = -35.378309;

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
