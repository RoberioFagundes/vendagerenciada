var _itens = [];
var _produto = null;
var _fatura = [];
var _itens_cartela = [];

$("#produto").change(() => {
  var produto = $("#produto").val(); //pegou todos os itens que estão no select
  var objeto = JSON.parse(produto); // transformou em objeto JSON

  if (produto != "") {
    //verificou se o produto não esta vazio
    document
      .getElementById("opcaoquantidade")
      .addEventListener("change", function (e) {
        //iteração com select de quantidade ou unidade
        var selectOpcaoQuantidade =
          document.getElementById("opcaoquantidade").value; //receber o select que vai escolher se quantidade ou unidade
        if (selectOpcaoQuantidade == "optionquantidade") {
          //se esccolher quantidade faça
          var valor_venda = objeto.valor_venda; //valor de venda vai receber o objeto
          var valor_vendaToNumber = parseFloat(valor_venda);
          document.getElementById("valor").value = valor_vendaToNumber;

          document.getElementById("selectprodutounidade").style.display =
            "none"; //se escolher a quantidade o select que unidade desaparecer
          document.getElementById("selectquantidade").style.display = "block"; //se escolher a quantidade o select que quantidade aparecer

          console.log(valor_unidadetonumber);
          var inputquantidade = document.getElementById("quantidade").value; //input receber as entradas

          var estoqueObjeto = objeto.quantidade;
          var estoque = parseFloat(estoqueObjeto);

          console.log("estoque", objeto.quantidade);
          console.log("input de quantidade", inputquantidade);

          document.getElementById("quantidade").addEventListener("input", function () {
              //função que vai iteragir com usuario para informar se esta enviando a quantidade correta
              var valorinputquantidade =
                document.getElementById("quantidade").value;
              var valorinputquantidadeToNumber =
                parseFloat(valorinputquantidade);
              var produto = $("#produto").val(); //pegou todos os itens que estão no select
              var objeto = JSON.parse(produto); // transformou em objeto JSON
              var estoqueQuantidade = objeto.QTD_PRODUTO;
              console.log(estoqueQuantidade);
              console.log(typeof valorinputquantidadeToNumber);

              // if (valorinputquantidadeToNumber > estoqueQuantidade) {
              //   swal("Alerta", "Informe uma quantidade compartivel");
              // }
            });
        }
        if (selectOpcaoQuantidade == "optionquantidadeUnidade") {
          var valor_unidade = objeto.valor_unitario;
          var valor_unidadetonumber = parseFloat(valor_unidade);
          document.getElementById("valor").value = formatReal(
            valor_unidadetonumber
          );
          console.log("replace", typeof valor_unidadetonumber);

          document.getElementById("selectprodutounidade").style.display =
            "block"; //se escolher a quantidade o select que unidade aparecer
          document.getElementById("selectquantidade").style.display = "none"; //se escolher a quantidade o select que quantidade desaparecer
        }
      });
  }

  document.getElementById("estoque").innerHTML =
    "<div id='produto-caixa'><label><b>produto:</b></label>" +
    objeto.produto +
    "<br><label></label><div id='produto-quantidade'>" +
    "</div></b><br></div>"; //para encontrar o estoque por produto
    document.getElementById("produto-estoque").innerHTML=objeto.QTD_PRODUTO
});

$("#produto").change(() => {
  _produto = $("#produto").val() ? JSON.parse($("#produto").val()) : null;
  if (_produto != null) {
    $("#valor").val(formatReal(_produto.valor));
    $("#quantidade").val("1");
  }
});

function formatReal(valor) {
  return valor
    .toLocaleString("pt-BR", { minimumFractionDigits: 2 })
    .replace(".", ",");
}


$("#adicionar-produto").click(() => {
  console.log("teste de objeto", _ItemCartelaObjeto);

  if (document.getElementById("opcaoquantidade").value == "optionquantidade") {
    _produto = $("#produto").val() ? JSON.parse($("#produto").val()) : null;
    let quantidade = $("#quantidade").val();
    let valor = $("#valor").val().replace(",", ".");
    let user_id = $("#user_id").val();

    if (quantidade && valor && _produto) {
      let item = {
        quantidade: quantidade,
        id: _produto.id,
        valor: valor,
        user_id,
        rand: Math.floor(Math.random() * (999999999 - 10)) + 10,
      };
      let html = montaLinhaProduto(item);
      _itens.push(item);
      var totalgeral = 0;

      if (
        document.getElementById("opcaoquantidade").value == "optionquantidade"
      ) {
        for (var key in _itens) {
          totalgeral += _itens[key].valor * _itens[key].quantidade;
        }
      }

      var total = totalgeral;
      document.getElementById("total_geralQuantidade").value = total; //para setar o valor total de quantidade
      $(".total").html(formatReal(total)); //para setar o valor total
      $("#tbl-produtos").append(html);
    }
  }
});

function montaLinhaProduto(item) {
  var selectOpcaoQuantidade = document.getElementById("opcaoquantidade").value;
  if (selectOpcaoQuantidade == "optionquantidade") {
    let html = "";
    html += '<tr class="l_' + item.rand + '">';
    html += "<td>" + _produto.produto + "</td>";
    html += "<td>" + item.quantidade + "</td>";
    html +=
      '<td class="valortotal">' +
      formatReal(item.quantidade * item.valor) +
      "</td>";
    html +=
      '<td><button onclick="deleteItem(' +
      item.rand +
      ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
    html += "</i></button></td>";
    html += "</tr>";
    return html;
  }
}

function totaliza() {
  var valorUnidade = parseFloat(
    document.getElementById("total_geralUnidade").value
  );

  var valorQuantidade = parseFloat(
    document.getElementById("total_geralQuantidade").value
  );

  var valorCartela = parseFloat(
    document.getElementById("total_geralCartela").value
  );

  var soma = valorQuantidade + valorUnidade + valorCartela;
  return soma;
}

function deleteItem(rand) {
  let temp = _itens.filter((x) => {
    if (x.rand != rand) {
      return x;
    } else {
      $(".l_" + rand).remove();
    }
  });
  _itens = temp;
  let total = totaliza();
  $(".total").html(formatReal(total));
}

function deletePag(rand) {
  let temp = _fatura.filter((x) => {
    if (x.rand != rand) {
      return x;
    } else {
      $(".p_" + rand).remove();
    }
  });
  _fatura = temp;
}

// aqui vai modificar quando usuario escolher a forma de pagamento
$("#forma_pagamento").change(() => {
  var text = document.getElementById("total").textContent.replace(".", ",");
  var numeroQuantidade = parseFloat(text);

  var textUnidade = document.getElementById("total_unidade").textContent;
  var numeroUnidade = parseFloat(textUnidade);
  var valueElement = document
    .getElementById("total_unidade")
    .getAttribute("id")
    .valueOf();

  var numerocartela = document.getElementById("total_geralCartela").value;
  var numerocartelaParse = parseFloat(numerocartela);

  console.log("valor do id", valueElement);

  // somou o valor total de quantidade mais unidade
  somarUnidadecomQuantidade = (
    numeroQuantidade +
    numeroUnidade +
    numerocartelaParse
  ).toFixed(2);

  document.getElementById("valor_pag").value = somarUnidadecomQuantidade;

  console.log("somarunidade", somarUnidadecomQuantidade);
  

  var valorUnidade = parseFloat(
    document.getElementById("total_geralUnidade").value
  );

  var valorQuantidade = parseFloat(
    document.getElementById("total_geralQuantidade").value
  );

  if (document.getElementById("total_geralUnidade").value == "") {
    var somarUnidadecomQuantidadeVazio = 0 + valorQuantidade;
    $("#valor_pag").val(formatReal(somarUnidadecomQuantidadeVazio));
    var data = new Date();
    var dia = String(data.getDate()).padStart(2, "0");
    var mes = String(data.getMonth() + 1).padStart(2, "0");
    var ano = data.getFullYear();
    dataAtual = dia + "/" + mes + "/" + ano;
    $("#data").val(dataAtual);
  }
  if (document.getElementById("total_geralQuantidade").value == "") {
    var somarUnidadecomQuantidade = 0 + valorUnidade;

    $("#valor_pag").val(formatReal(somarUnidadecomQuantidade));
    var data = new Date();
    var dia = String(data.getDate()).padStart(2, "0");
    var mes = String(data.getMonth() + 1).padStart(2, "0");
    var ano = data.getFullYear();
    dataAtual = dia + "/" + mes + "/" + ano;
    $("#data").val(dataAtual);
  }

  if (
    document.getElementById("total_geralQuantidade").value != "" &&
    document.getElementById("total_geralUnidade").value != ""
  ) {
    var somarUnidadecomQuantidade =
      valorQuantidade + valorUnidade + numerocartelaParse;
    $("#valor_pag").val(formatReal(somarUnidadecomQuantidade));
    var data = new Date();
    var dia = String(data.getDate()).padStart(2, "0");
    var mes = String(data.getMonth() + 1).padStart(2, "0");
    var ano = data.getFullYear();
    dataAtual = dia + "/" + mes + "/" + ano;
    $("#data").val(dataAtual);
  }
}); //fim da forma de venda

$("#adicionar-pagamento").click(() => {
  let forma_pagamento = $("#forma_pagamento").val();
  let valor_pag = $("#valor_pag").val();
  let data = $("#data").val();
  if (!forma_pagamento || !data || !valor_pag) {
    swal("Alerta", "Informe a forma de pagamento, valor e data", "warning");
  } else {
    if (somaPagamentos(valor_pag)) {
      let pagamento = {
        valor: valor_pag,
        forma_pagamento: forma_pagamento,
        data: data,
        rand: Math.floor(Math.random() * (999999999 - 10)) + 10,
      };

      let html = montaLinhaPagameto(pagamento);
      _fatura.push(pagamento);
      $("#tbl-pagamentos").append(html);
    } else {
      // swal("Alerta", "Informe os valores de pagamento corretamente", "warning");
      let pagamento = {
        valor: valor_pag,
        forma_pagamento: forma_pagamento,
        data: data,
        rand: Math.floor(Math.random() * (999999999 - 10)) + 10,
      };

      let html = montaLinhaPagameto(pagamento);
      _fatura.push(pagamento);
      $("#tbl-pagamentos").append(html);
    }
  }
});

function montaLinhaPagameto(item) {
  let html = "";

  html += '<tr class="p_' + item.rand + '">';
  html += "<td>" + getFormaPagmento(item.forma_pagamento) + "</td>";
  html += "<td>" + item.data + "</td>";
  html += "<td>" + formatReal(item.valor) + "</td>";
  html +=
    '<td><button onclick="deletePag(' +
    item.rand +
    ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
  html += "</i></button></td>";
  html += "</tr>";
  return html;
}

function montaLinhaProduto(item) {
  let html = "";

  html += '<tr class="l_' + item.rand + '">';
  html += "<td>" + _produto.produto + "</td>";

  html += "<td>" + item.quantidade + "</td>";
  html +=
    '<td class="valortotal">' +
    formatReal(item.quantidade * item.valor) +
    "</td>";

  html +=
    '<td><button onclick="deleteItem(' +
    item.rand +
    ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
  html += "</i></button></td>";
  html += "</tr>";
  return html;
}

//somando total
function getTotal(_itens) {
  var total = 0;
  for (var key in _itens) {
    total += _itens[key].valor * _itens[key].quantidade;
  }
  document.getElementById("totalValue").innerHTML = formatValue(total);
}

function somaPagamentos(valor) {
  let total = totaliza();
  let soma = parseFloat(valor);

  _fatura.map((x) => {
    soma += parseFloat(x.valor);
  });

  if (total != soma) {
    return false;
  }
  return true;
}

function getFormaPagmento(forma) {
  let formas = {
    "01": "Dinheiro",
    "02": "Cheque",
    "03": "Cartão de Crédito",
    "04": "Cartão de Débito",
    "05": "Crédito Loja",
    10: "Vale Alimentação",
    11: "Vale Refeição",
    12: "Vale Presente",
    13: "Vale Combustível",
    14: "Duplicata Mercantil",
    15: "Boleto Bancário",
    16: "Depósito Bancário",
    17: "Pagamento Instantâneo (PIX)",
    90: "Fiado",
    99: "Outros",
  };
  return formas[forma];
}

$("#btn-salvar").click((_item_cartela) => {
  var produto = document.querySelectorAll(".produto");

  var valoresproduto = [];

  for (let index = 0; index < produto.length; index++) {
    const element = produto[index];

    valoresproduto.push(element);
  }

  console.log("teste de recebimento de objeto", _ItemCartelaObjeto);
// aqui eu converter de varios array em unico array 
  const obj = _ItemCartelaObjeto.reduce((list, sub) => list.concat(sub), []);
 

  console.log("array de array",obj);
  var objetoarray=[];
  // isso porque está vindo subarray aqui eu consigo colocar em um array somente para não ter erro no salvamento da informações 
  _ItemCartelaObjeto.forEach(element => {
    var elementos = _ItemCartelaObjeto[element];
    
    console.log("for com array final", elementos);
  }); 

  


  let cliente = $("#cliente").val();
  console.log("clientes",cliente);
  
  if (_fatura.length == 0) {
    swal("Atenção", "Informe os pagamentos para venda", "error");
  } else {
    // aqui são os parametros que serão enviado para o controller vendacontroller
    let user_id = $("#user_id").val();
    let valor_pag = $("#valor_pag").val().replace(",",".");
    let valor_pag2 = valor_pag.replace(",",".");
    var valor_pag3=parseFloat(valor_pag);

    
  
    
    // console.log(_itens_unidade.length);

    var teste = _ItemCartelaObjeto;

    var venda = {
      itens: _itens,
      fatura: _fatura,
      cliente_id: cliente,
      itens_unidade: _itens_unidade,
      item_cartela: obj,
      user_id: user_id,
      total: valor_pag3,
    };
    console.log(venda);
    
    $.post("/vendas/vendas/save", {
      _token: $("#token").val(),
      venda: venda,
    })
      .done((success) => {
        console.log(success);
        swal("Sucesso", "Venda salva", "success").then(() => {
          location.href = "/vendas";
        });
      })
      .fail((err) => {
        console.log(err);
        swal("Ops", "algo deu errado", "error");
      });
  }
});
