//funçao de seleçao de elementos
var $ = function(elemento){
	return document.querySelector(elemento);
}

//adicionando o elemento botao a variavel
var buttonCalcular = document.getElementById('calcular');
var result = document.getElementById('res');

//adicionando um escutador de eventos para o click
buttonCalcular.addEventListener("click",function(event){
	event.preventDefault();
	var peso = $("#peso").value;
	var altura= $("#altura").value;
	var resultado = (peso/(altura*altura)).toFixed(2);

$("#res").innerHTML = resultado;
});

