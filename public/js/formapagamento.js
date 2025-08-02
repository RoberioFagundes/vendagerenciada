/*para forma de pagamento*/ 

var ListFormaPagamento=[];
// para forma de pagamento

// para a forma de pagamento
function setlistformapagamento(ListFormaPagamento) {
  var table =
    "<thead><tr><td class='table-primary'>Forma de pagamento</td><td class='table-primary'>Data</td><td class='table-primary'>valor</td><td class='table-primary'>Ações</td></tr></thead><tbody>";
  for (var key in ListFormaPagamento) {
    table +=
      "<tr><td>" +
      ListFormaPagamento[key].formadePagamento +
      "</td><td>" +
      ListFormaPagamento[key].inputdata +
      "</td><td>" +
      ListFormaPagamento[key].inputvalor +
      '</td><td><button class="btn btn-success" onclick="setUpdateformapagamento(' +
      key +
      ');">Editar</button> <button class="btn btn-danger" onclick="deleteDataFormapagamento(' +
      key +
      ');">Delete</button></td></tr>';
  
  }
  table += "</tbody>";

  document.getElementById("table-forma-pagamento").innerHTML = table;
  saveListStorage(ListFormaPagamento);
}



function addDataFormaPagamento() {

  var element = document.getElementById("forma_pagamento");
  var formadePagamento = element.options[element.selectedIndex].text;
  var inputdata = document.getElementById("data").value;
  var inputvalor = document.getElementById("valor_pag").value;
  
  if (formadePagamento==="") {
    alert("Escolhar uma opção no campo forma de pagamento");
  }

  if (inputdata==="") {
    alert("Preenchar o campo data por favor");
  }

  if (inputvalor==="") {
    alert("Preenchar o campo do valor")
  }

  
  
  ListFormaPagamento.unshift({formadePagamento:formadePagamento, inputdata: inputdata, inputvalor: inputvalor});
  setlistformapagamento(ListFormaPagamento);

 
  
}

// para quando o usuario clicar em editar 
function setUpdateformapagamento(id) {

  
  var object = ListFormaPagamento[id];
  var formadePagamento = document.getElementById("forma_pagamento").innerText;

  formadePagamento = object.formadePagamento;

  // const obj =JSON.stringify(object);

  // const obj_json = JSON.parse(obj);
  
  // console.log(obj_json);
  
  // console.log(obj_json.formadePagamento);
 
  

  document.getElementById("forma_pagamento").value=object.formadePagamento;
  document.getElementById("data").value=object.inputdata;
  document.getElementById('valor_pag').value=object.inputvalor;

  document.getElementById("btnupdateformapagamento").style.display="inline-block";
  document.getElementById("btnAddFormaPagamento").style.display="none";

  document.getElementById("inputIDUpdateFormaPagamento").innerHTML =
  '<input id="idUpdate" type="hidden" value="' + id + '">';

  
}

// para quando o usuario clicar no botão salvar
function updateDataFormaPagamento() {


  
  var id = document.getElementById("inputIDUpdateFormaPagamento").value;
  var formadePagamento = document.getElementById("forma_pagamento").value;

  var inputdata = document.getElementById("data").value;
  var inputvalor = document.getElementById("valor_pag").value;

  ListFormaPagamento[id] = { formadePagamento: formadePagamento, inputdata: inputdata, inputvalor: inputvalor };

  setlistformapagamento(ListFormaPagamento);
  
  console.log(formadePagamento);
  

}
// limpa os campos de editar
function resetFormFormaPagamento() {
  document.getElementById("forma_pagamento").value="";
  document.getElementById("data").value="";
  document.getElementById("valor").value="";
}

// deletando os dados
function deleteDataFormapagamento(id) {
  if (confirm("Desejar deletar o item?")) {
    if (id===ListFormaPagamento.length -1) {
      ListFormaPagamento.pop();      
    } else if (id===0) {
      ListFormaPagamento.shift();
    }else{
      var arrAuxIni = ListFormaPagamento.slice(0,id);
      var arrAuxEnd = ListFormaPagamento.slice(id+1);
      ListFormaPagamento = arraAuxIni.concat(arrAuxEnd);
      }
      setlistformapagamento(ListFormaPagamento);
  }
}

// deletando a lista
function deletelistformapagamento() {
  if (confirm("Desejar apagar a lista de forma de pagamento")) {
    ListFormaPagamento=[]
    setlistformapagamento(ListFormaPagamento);
  }
}

// para forma de pagamento
function formatFormapagamento(formadePagamento) {
  var forma_pagamento = formadePagamento.toLowerCase();
  forma_pagamento = forma_pagamento.charAt(0).toUpperCase() + forma_pagamento.slice(1);
  return forma_pagamento;
}


// salvando em storage
function saveListStorageFormaPagamento(ListFormaPagamento){
  var jsonStr1 = JSON.stringify(ListFormaPagamento);
  localStorage.setItem("ListFormaPagamento", jsonStr1);
}

// varificar se já tem algo salvo
function initListStorageFormaPagamento() {
  var testList = localStorage.getItem("ListFormaPagamento");
  if(testList){
    ListFormaPagamento = JSON.parse(testList);
  }

  setlistformapagamento(ListFormaPagamento);
}

initListStorageFormaPagamento();


 

