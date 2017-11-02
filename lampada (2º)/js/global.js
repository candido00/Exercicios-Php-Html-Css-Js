var $ = function(elemento){
	return document.querySelector(elemento);
}

var acesa = false;
var lampada = $(".lampada");
var botao = $("#btn");

botao.addEventListener('click', function(e){
	if (acesa) {
		acesa = false;
		lampada.src = "img/apagada.jpg";
		botao.innerText="Ligar";

	}else{
		acesa = true;
		lampada.src = "img/acesa.jpg";
		botao.innerText="Desligar";
	}
});