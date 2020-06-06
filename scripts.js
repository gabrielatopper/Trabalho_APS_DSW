
function validar() {
	var txt = document.getElementByName("txtNome");
	var nome = txt.value;
	if(nome.length < 2){
		alert("Preencha o campo NOME! ");
		return false;
	}else{
		return true;
	}
}
	
