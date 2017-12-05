var divMapa = document.getElementById("mapa");

if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(function(position){
			var lat = -8.517464;
			var long = -35.378309;

			var latlong = new google.maps.LatLng(lat,long);
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


/*function validacao Nome(evt) {

	if (new RegExp(/[^a-z,A-Z,á,é,í,ó,ú,â,ê,ô,ã,õ,ç,Á,É,Í,Ó,Ú,Â,Ê,Ô,Ã,Õ,Ç,ü,ñ,Ü,Ñ,\s]/).test(document.form.nome.value)) {
		alert("Por favor digite somente letras.");
		document.form.nome.value = "";
		document.form.nome.focus();
		return false
	}

    var tecla = event.keyCode;
    
    if(tecla == 13)
    	if (document.form.nome.value=="") {
    		alert("Preencha o campo nome corretamente")
    		document.form.nome.focus();
    		return false
    	}

};*/
