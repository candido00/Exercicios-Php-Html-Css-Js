var $ = function (e) {return document.querySelector(e);}
var divTexto = $("#texto");
var bt = $ ("#carregar");

bt.addEventListener("click",function(){
	//console.log("funfou");
	load();
});

function load(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if (this.readyState==4 && this.status==200) {
			//console.log(JSON.parse(this.responseText));
			
			var posts = JSON.parse(this.responseText);

			var ul = document.createElement("UL");
			console.log(ul);
			for ( i = 0; i < posts.length; i++) {
				var li = document.createElement("LI");
				var h2 = document.createElement("h2");
				h2.innerHTML = posts[i].title;
				li.appendChild(h2);
				ul.appendChild(li);
				//console.log("titulo : " ,posts[i].title);
			}
			divTexto.appendChild(ul);
		}		

	}
	xhr.open("GET","https://jsonplaceholder.typicode.com/posts",true);
	xhr.send();
}