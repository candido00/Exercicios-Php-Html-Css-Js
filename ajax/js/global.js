var ajax;
if (window.XMLHttpRequest) {
	console.log("funciona");
	ajax = new XMLHttpRequest();
	ajax.onreadystatechange= function(){

		if (this.readyState==4 && this.status==200) {
			document.getElementById("conteudo").innerHTML= this.responseText;

		}
	};

}else{

	console.log("seu navegador nao presta");
}
ajax.open("GET","arquivo.txt");
ajax.send();