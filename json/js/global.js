var ajax = new XMLHttpRequest();
ajax.onreadystatechange = function (){
		if (this.readyState==4 && this.status==200) {
			adicionar(JSON.parse(this.responseText));
		}
};
ajax.open("GET","getProdutos.php",true);
ajax.send();

var adicionar = function(json){
	var section = document.getElementById("listagem");
	var ul = document.createElement("ul");
	for (var x in json) {
		var li = document.createElement("li");
		li.innerHTML = "id:" +json[x].id=" -nome: "+json[].nome;
		ul.appendChild(li);
	}
	section.appendChild(ul);
}