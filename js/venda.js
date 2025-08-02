/*
var novaTabela = document.createElement("table");
document.getElementById("test").appendChild(novaTabela);
var tabela = document.createElement("table");
var cabecalho = document.createElement("thead");
var corpo = document.createElement("tbody");

tabela.appendChild(cabecalho);
tabela.appendChild(corpo);

document.getElementById("test").appendChild(tabela);
*/ 



document.getElementById("quantidade").addEventListener('input',function () {
	var todosElementos = document.getElementsByTagName("tr");
     

	
	var resultados=[];

	var elemento;

	for (let index = 0; (elemento=todosElementos[index]) !=null; index++) {
		var elementoClass = elemento.className;
		
		if (elementoClass && elementoClass.indexOf(className) != -1){
			
			resultados.push(elemento);

			console.log(resultados);
		}
		
		return resultados;

		
	}
})