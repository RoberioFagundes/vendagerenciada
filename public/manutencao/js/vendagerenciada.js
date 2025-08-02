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

          document
            .getElementById("quantidade")
            .addEventListener("input", function () {
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

/************************************inicio para quantidade produto unidade********************************************************************/

var _itens_unidade = [];
var _produto = null;

$("#produtoUnidade").change(() => {
  _produto = $("#produtoUnidade").val()
    ? JSON.parse($("#produtoUnidade").val())
    : null;
  if (_produto != null) {
    $("#valor").val(formatReal(_produto.valor));
    $("#optionquantidadeUnidade").val("1");
  }
  var produtoUnidade = document.getElementById("produtoUnidade").value;
  var objetoUnidade = JSON.parse(produtoUnidade);

  console.log("produto unidade", objetoUnidade);
});

$("#adicionar-produto").click(() => {
  if (
    document.getElementById("opcaoquantidade").value ==
    "optionquantidadeUnidade"
  ) {
    _produto = $("#produtoUnidade").val()
      ? JSON.parse($("#produtoUnidade").val())
      : null;
    //pegou as entradas de quantidade de unidade
    let quantidadeUnidade = $("#optionquantidadeUnidade").val();
    //   pegou o valor
    let valor = $("#valor").val().replace(",", ".");
    // faço a comparação
    if (quantidadeUnidade && valor && _produto) {
      // criou a variavel que varia recebe um array item unidade
      let item_unidade = {
        id: _produto.id,
        quantidadeUnidade: quantidadeUnidade,
        valor: valor,
        rand: Math.floor(Math.random() * (999999999 - 10)) + 10,
      };
      // a função montaLinhaProdutoUnidade recebe a lsita de unidade
      let html = montaLinhaProdutoUnidade(item_unidade);
      // adiciono essa unidade
      _itens_unidade.push(item_unidade);

      var totalgeralunidade = 0;

      for (var key in _itens_unidade) {
        totalgeralunidade +=
          _itens_unidade[key].valor * _itens_unidade[key].quantidadeUnidade;
      }
      console.log("valor total de unidade R$:", totalgeralunidade);

      var total_unidade = totalgeralunidade; //crio uma variavel que vai receber o valor total da quantidade de caixa

      document.getElementById("total_geralUnidade").value = total_unidade; //para o input com valor total de unidade

      // let resultadogeral = totalgeral+totalgeralunidade;

      // console.log(totalgeral);
      // console.log((_itens[key].valor * _itens[key].quantidade));

      // para setar o valor total

      $(".total_unidade").html(formatReal(total_unidade)); //para setar o valor total
      $("#tbl-produtos_unidade").append(html);
    }
  } // fim da condição que verificar se o usuario unidade
});

function montaLinhaProdutoUnidade(item_unidade) {
  if (
    document.getElementById("opcaoquantidade").value ==
    "optionquantidadeUnidade"
  ) {
    let html = "";
    html += '<tr class="l_' + item_unidade.rand + '">';
    html += "<td>" + _produto.produto + "</td>";

    html += "<td>" + item_unidade.quantidadeUnidade + "</td>";
    html +=
      '<td class="valortotal">' +
      formatReal(item_unidade.quantidadeUnidade * item.valor) +
      "</td>";

    html += "<td>" + item_unidade.quantidadeUnidade + "</td>";
    html +=
      "<td>" +
      formatReal(item_unidade.quantidadeUnidade * item.valor) +
      "</td>";

    html +=
      '<td><button onclick="deleteItemUnidade(' +
      item_unidade.rand +
      ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
    html += "</i></button></td>";
    html += "</tr>";
    return html;
  }
}

function totalizaunidade() {
  let soma = 0;
  _itens_unidade.map((x) => {
    soma += parseFloat(x.valor);
  });
  return soma;
}

function deleteItemUnidade(rand) {
  let temp = _itens_unidade.filter((x) => {
    if (x.rand != rand) {
      return x;
    } else {
      $(".l_" + rand).remove();
    }
  });
  _itens_unidade = temp;
  let total_unidade = totalizaunidade();
  $(".total_unidade").html(formatReal(total_unidade));
}

function montaLinhaProdutoUnidade(item) {
  let html = "";
  let selectOpcaoQuantidade = document.getElementById("opcaoquantidade").value;
  html += '<tr class="l_' + item.rand + '">';
  html += "<td>" + _produto.produto + "</td>";
  if (selectOpcaoQuantidade == "optionquantidade") {
    html += "<td>" + item.quantidadeUnidade + "</td>";
    html +=
      '<td class="valortotal">' +
      formatReal(item.quantidadeUnidade * item.valor) +
      "</td>";
  } else if (selectOpcaoQuantidade == "optionquantidadeUnidade") {
    html += "<td>" + item.quantidadeUnidade + "</td>";
    html += "<td>" + formatReal(item.quantidadeUnidade * item.valor) + "</td>";
  }
  html +=
    '<td><button onclick="deleteItemUnidade(' +
    item.rand +
    ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
  html += "</i></button></td>";
  html += "</tr>";
  return html;
}

/************************************fim para quantidade produto unidade********************************************************************/

/************************************inicio para quantidade de cartela*********************************************************************/
var _itens_cartela = [];

document
  .getElementById("produtocartela")
  .addEventListener("change", function () {
    var produtocartela = document.getElementById("produtocartela").value;
    var objeto = JSON.parse(produtocartela);

    document.getElementById("valor").value = objeto.valor_unitario; // para setar o unitario da cartela

    document.getElementById("produtocartelaNome").innerText = objeto.produto;
    document.getElementById("produtoQtdcartela").innerHTML=objeto.QTD_PRODUTO_CARTELA
    document.getElementById("produtoQtdCaixacartela").innerHTML =
      "<label>" +
      "Quantidade de caixa de produto com cartela" +
      objeto.QTD_PRODUTO +
      "</label>";

    console.log("objeto", objeto);
  });

document.addEventListener("change", function () {
  _itens_cartela = $("#produtocartela").val()
    ? JSON.parse($("produtocartela").val())
    : null;

  if (_itens_cartela != null) {
    $("#valorCartela").val(formatReal(_itens_cartela.valorCartela));
    $("#optionquantidadecartela").val("1");
  }
});

function formatReal(valorCartela) {
  return valorCartela
    .toLocaleString("pt-BR", { minimumFractionDigits: 2 })
    .replace(".", ",");
}

$("#adiocionar-produto").click(() => {
  let quantidade = $("#optionquantidadecartela").val();
  let valorCartela = $("#valorCartela").val().replace(",", ".");
  _itens_cartela = $("#produtocartela").val()
    ? JSON.parse($("#produtocartela").val())
    : null;

  if (quantidade && valorCartela && _itens_cartela) {
    let item_cartela = {
      quantidade: quantidade,
      valor: valorCartela,
      id: _produto.id,
      rand: Math.floor(Math.random() * (999999999 - 10)) + 10,
    };

    let html = montaLinhaProdutoCartela(item_cartela);
    _itens_cartela.push(item_cartela);
    let totalcartela = totaliza();
    $(".totalcartela").html("R$" + formatReal(totalcartela));
    $("#tbl-produtos-cartela").append(html);
  } else {
    swal("Alerta", "Informe o produto, quantidade e valor", "warning");
  }
});

function montaLinhaProdutoCartela(item_cartela) {
  if (
    document.getElementById("opcaoquantidade").value ==
    "optionquantidadeUnidade"
  ) {
    let html = "";
    html += '<tr class="l_' + item_cartela.rand + '">';
    html += "<td>" + _produto.produto + "</td>";

    html += "<td>" + item_cartela.quantidadeUnidade + "</td>";
    html +=
      '<td class="valortotalcartela">' +
      formatReal(item_cartela.optionquantidadecartela * item.valorCartela) +
      "</td>";

    html += "<td>" + item_cartela.optionquantidadecartela + "</td>";
    html +=
      "<td>" +
      formatReal(item_cartela.optionquantidadecartela * item.valor) +
      "</td>";

    html +=
      '<td><button onclick="deleteItemCartela(' +
      item_cartela.rand +
      ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
    html += "</i></button></td>";
    html += "</tr>";
    return html;
  }
}

// var _itens_cartela = [];
// var _produto = null;

$("#produtocartela").change(() => {
  _produto = $("#produtocartela").val()
    ? JSON.parse($("#produtocartela").val())
    : null;

  if (_produto != null) {
    $("#valorCartela").val(formatReal(_produto.valor));
    $("#optionquantidadecartela");
  }
});

var adicionarProduto = $("#adicionar-produto");
var _ItemCartelaObjeto = []; //esse crei porque não dando certo então foi esse mesmo para receber o valores do array

adicionarProduto.click((_item_cartela) => {
  /**************teste***********************************/

  var _itens_cartela = [];
  var _produto = null;

  if (document.getElementById("opcaoquantidade").value == "optionCartela") {
    _produto = $("#produtocartela").val()
      ? JSON.parse($("#produtocartela").val())
      : null;

    // pegou as entradas de quantidade de cartela
    let quantidadeCartela = $("#optionquantidadecartela").val();
    // pegou o valorCartela
    let valorCartela = $("#valorCartela").val().replace(",", ".");
    // faço o valor
    if (quantidadeCartela && valorCartela && _produto) {
      // criou a variavel que varia recebe um array item unidade
      let item_cartela = {
        id: _produto.id,
        quantidadeCartela: quantidadeCartela,
        valorCartela: valorCartela,
        rand: Math.floor(Math.random() * (999999999 - 10)) + 10,
      };

      // a função montalinhaProdutoCartela recebe a lista de cartela
      let html = montaLinhaProdutoCartela(item_cartela);
      // adiciono essa cartela
      _itens_cartela.push(item_cartela);

      console.log(_item_cartela);

      var totalgeralcartela = 0;
      var resultado = 0;

      // console.log("itens do array",_itens_cartela);

      for (var key in _itens_cartela) {
        totalgeralcartela +=
          _itens_cartela[key].valorCartela *
          _itens_cartela[key].quantidadeCartela;
      }
      console.log(
        "array adicionar produto",
        _itens_cartela,
        typeof _itens_cartela
      );

      _ItemCartelaObjeto.push(_itens_cartela);

      // recuperarValores();

      // var x = document.querySelector(".valortotal");
      // var y = x.valorCartela;

      var total_cartela = totalgeralcartela;

      // var total = querySelectorAll(".valortotal");

      // console.log("array de valor total", querySelectorAll(".valortotal"));

      console.log("resultado", resultado);

      console.log("valor total da cartela", resultado);

      document.getElementById("total_geralCartela").value = total_cartela; //para preencher o input com valor total das cartelas

      // $(".totalcartela").html(formatReal(total_cartela)); //para setar o valor total das cartelas
      $("#tbl-produtos-cartela").append(html);
    }
  }


});

// fiz essa função que vai funcionar depois do usuario fizer o segundo click
document
  .getElementById("adicionar-produto")
  .addEventListener("click", function () {
    // para calcular o valor total de cartela
    var total = 0;
    var valortotalelement = [];

    var itemcartela = document.querySelectorAll(".valortotalcartela");

    var tamanhodoarray = itemcartela.length;

    var array = [];

    // console.log("valor da classe",valorClasse);

    for (var index = 0; index < tamanhodoarray; index++) {
      var element = itemcartela[index].textContent;
      var primeiro = itemcartela[0];
      var conversaoStringToNumero = element.replace(",", ".");

      var numero = parseFloat(conversaoStringToNumero);

      array.push(numero);
      total += numero;
    }

    console.log("array", array);
    console.log("elementos", element, typeof element);
    console.log("valor total do elementos", total, typeof total);
    // console.log("valor anterior", totalgeralcartela);

    document.getElementById("total_geralCartela").value = total;

    document.getElementById("totalvalorcartela").innerHTML =
      "<label><b>Valor total da cartela: " + total + "</b></label>";
  });

// função que vai o setar valor ante de recuperar valor executar para evitar que o primeiro campo seja em branco
document
  .getElementById("optionquantidadecartela")
  .addEventListener("input", function () {
    var inputvalorcartela = document.getElementById("valorCartela").value;
    var inputquantidadecartela = document.getElementById(
      "optionquantidadecartela"
    ).value;
    // para o usuário clicar em adicionar produto o valor já esteja para adicionar no array evitar que o primeiro valor fiquei em branco
    var resultado =
      parseFloat(inputvalorcartela).toFixed(2) *
      parseFloat(inputquantidadecartela).toFixed(2);

    document.getElementById("total_geralCartela").value = resultado;
  });

function montaLinhaProdutoCartela(item_cartela) {
  if (document.getElementById("opcaoquantidade").value == "optionCartela") {
    let html = "";
    html += '<tr class="1_' + item_cartela.rand + '">';
    html += "<td class='produto'>" + _produto.produto + "</td>";

    html +=
      "<td class='quantidadeCartela'>" +
      item_cartela.quantidadeCartela +
      "</td>";

    html +=
      '<td class="valortotalcartela">' +
      formatReal(item_cartela.quantidadeCartela * item_cartela.valorCartela) +
      "</td>";

    html +=
      '<td><button onclick="deleteItemCartela(' +
      item_cartela.rand +
      ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
    html += "</i></button></td>";
    html += "</tr>";
    return html;
  }
}

function totalizacartela() {
  let soma = 0;
  _itens_cartela.map((x) => {
    soma += parseFloat(x.valorCartela);
  });
  return soma;
}

function deleteItemCartela(rand) {
  const obj = _ItemCartelaObjeto.reduce((list, sub) => list.concat(sub), []);
  console.log("deletando lista",obj);
  
  let temp = obj.filter((x) => {
    if (x.rand != rand) {
      return x;
    } else {
      $(".1_" + x.rand).remove();
    }
   
  });
 
  let total_cartela = totalizacartela();
  $(".totalcartela").html(formatReal(total_cartela));
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

/************************************fim para quantidade de cartela*************************************************************************/
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
