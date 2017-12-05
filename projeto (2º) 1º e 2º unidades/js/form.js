document.form.addEventListener("submit", function(event){
	event.preventDefault();
	//Validacao Nome
	if (document.form.nome.value=="") {
		alert("Por favor preencha o campo nome")
		document.form.nome.focus();
		return false
	} else if (new RegExp(/[^a-z,A-Z,á,é,í,ó,ú,â,ê,ô,ã,õ,ç,Á,É,Í,Ó,Ú,Â,Ê,Ô,Ã,Õ,Ç,ü,ñ,Ü,Ñ,\s]/).test(document.form.nome.value)) {
		alert("Por favor digite somente letras.");
		document.form.nome.value = "";
		document.form.nome.focus();
		return false
	} else if (document.form.nome.value.indexOf(" ") == -1) {
		alert("Por favor preencha o campo nome completo")
		document.form.nome.focus();
		return false
	} else if (document.form.nome.value.length <5) {
		alert("Nome nao pode ser menor que 5 caracteres")
		document.form.nome.focus();
		return false
	} else if (document.form.nome.value.length >60) {
		alert("Nome nao pode ser maior que 60 caracteres")
		document.form.nome.focus();
		return false
	} else if (document.form.email.value=="") {
		alert("Por favor preencha o campo email")
		document.form.email.focus();
		return false
	} else if (document.form.email.value.indexOf('@') ==- 1 || document.form.email.value.indexOf('.') == -1) {
		alert("Por favor preencha o campo email válido")
		document.form.email.focus();
		return false
	} else if (document.form.descricao.value=="") {
		alert("Por favor preencha o campo descricao")
		document.form.descricao.focus();
		return false
	} else if (document.form.descricao.value.length <5) {
		alert("Descricao nao pode ser menor que 5 caracteres")
		document.form.descricao.focus();
		return false
	} else if (document.form.descricao.value.length >200) {
		alert("Descricao nao pode ser maior que 60 caracteres")
		document.form.descricao.focus();
		return false
	}else{
		document.location.href = "pagina.html";
	}
});