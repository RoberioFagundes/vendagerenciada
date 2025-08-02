var cadform = document.getElementById("add-item");

// aguardar o usuario clicar no botão cadastrar do formulario

cadform.addEventListener("submit", (e) => {
  // não carregar a pagina
  e.preventDefault();

  // Recceber os dados do formulario

  var nome_produto = document.getElementById("desc").value;
  var quantidade = document.getElementById("amount").value;
  var valor = document.getElementById("value").value;

  // O array() é usado para criar Array de objetos
  let itens = new Array();

  // verifica se a propriedade no localstorage
  if (localStorage.hasOwnProperty(itens)) {
    // Reccuperar os valores da propriedade usuarios do localstorage
    // converte de string para object
    itens = JSON.parse(localStorage.getItem("itens"));
  }

  // Adiciona um novo objeto no array criado
  itens.push({ nome_produto, quantidade, valor });

  // salva no localStorage
  localStorage.setItem("itens", JSON.stringify(itens));

  // Enviar a mensagem de sucesso
  document.getElementById("msg").innerHTML =
    "<p style='color: green'>Dados salvo no localStorage!</p>";
});

/******* para forma de pagamento*******/
var cadformpagamento = document.getElementById("add-forma-pagamento");

// aguardar o usuario clicar no botão cadastrar do formulario

cadformpagamento.addEventListener("submit", (e) => {
  // não carregar a pagina
  e.preventDefault();

  // Recceber os dados do formulario
  var forma_pagamento = document.getElementById("forma_pagamento").value;
  var data = document.getElementById("data").value;
  var valor_pag = document.getElementById("valor_pag").value;

  // O array() é usado para criar Array de objetos
  let formapagamento = new Array();

  // verifica se a propriedade no localstorage
  if (localStorage.hasOwnProperty(formapagamento)) {
    // Reccuperar os valores da propriedade usuarios do localstorage
    // converte de string para object
    formapagamento = JSON.parse(localStorage.getItem("formapagamento"));
  }

  // Adiciona um novo objeto no array criado
  forma_pagamento.push({ formapagamento, data, valor_pag });

  // salva no localStorage
  localStorage.setItem("formapagamento", JSON.stringify(formapagamento));

  // Enviar a mensagem de sucesso
  document.getElementById("msg").innerHTML =
    "<p style='color: green'>Dados salvo no localStorage!</p>";
});
// fim da forma de pagamento

// Enviar as informações do localStorage para um arquivo/Api
async function enviarServidor(e) {
 
  // Acessa o IF quando ha dados no localStorage para enviar para o banco de dados
  if (localStorage.hasOwnProperty("itens")) {
    // Recuperar os itens do localStorage
    let dadosLocalstorage = JSON.parse(localStorage.getItem("itens"));
    console.log(dadosLocalstorage);

    let dadosLocalstorageformapagamento = JSON.parse(localStorage.getItem("forma_pagamento"))
    console.log(dadosLocalstorageformapagamento);
    

    // usar o fetch para fazer a requisição para um arquivo/API
    // await fetch("/vendas/vendas/save", {
    //   method: "POST",
    //   body: JSON.stringify(dadosLocalstorage),
    //   headers: {
    //     "Content-Type": "application/json",
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //   },
    // }).then((resposta) => {
    //   console.log(resposta);
    // });

    $.ajax({
        type: "POST",
        url:"/vendas/vendas/save",
        data: {
            dadosLocalstorage: dadosLocalstorage,
            _token: $('#signup-token').val()
        },
        datatype: 'json',
        success: function (response) {
            console.log(response);
            // location.href="/vendas";
    
        }
    
    });
  }
}

/******************************************impedir que salve no servidor*****************************************************/


