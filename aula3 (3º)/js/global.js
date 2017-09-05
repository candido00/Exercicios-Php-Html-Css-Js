function $(elemento){
	return document.querySelector(elemento);
}
$("table").addEventListener("click", function(event){
	if(event.target.className=="excluir"){
		var opt = window.confirm("Deseja realmente excluir esse baguio?");
		if(opt){
			window.location.href = "exclui.php?id="+event.target.name;
		}
	}else if((event.target.className=="editar")){
		window.location.href = "index.php?p=editar&idProd="+event.target.name;
	}
	
});