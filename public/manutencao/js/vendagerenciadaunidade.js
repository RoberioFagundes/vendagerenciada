var _itens_unidade = [];
var _produto = null;

$("#produto").change(() => {
  _produto = $("#produto").val() ? JSON.parse($("#produto").val()) : null;
  if (_produto != null) {
    $("#valor").val(formatReal(_produto.valor));
    $("#quantidadeUnidade").val("1");
  }
});

function formatReal(valor) {
  return valor
    .toLocaleString("pt-BR", { minimumFractionDigits: 2 })
    .replace(".", ",");
}

$("#adicionar-produto").click(() => {
  if (document.getElementById("opcaoquantidade").value == "quantidadeUnidade") {
    _produto = $("#produto").val() ? JSON.parse($("#produto").val()) : null;
    //pegou as entradas de quantidade de unidade
    let quantidadeUnidade = $("#quantidadeUnidade").val();
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

      var total_unidade = totalgeralunidade;

      // let resultadogeral = totalgeral+totalgeralunidade;

      // console.log(totalgeral);
      // console.log((_itens[key].valor * _itens[key].quantidade));

      // para setar o valor total

      $(".total_unidade").html("R$ " + formatReal(total_unidade)); //para setar o valor total
      $("#tbl-produtos_unidade").append(html);
    } else {
      swal(
        "Alerta",
        "Informe o produto, quantidade por unidade e valor",
        "warning"
      );
    }
  } // fim da condição que verificar se o usuario unidade 
});

function montaLinhaProdutoUnidade(item_unidade) {
  if (document.getElementById("opcaoquantidade").value == "quantidadeUnidade") {
   
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
  $(".total_unidade").html("R$ " + formatReal(total_unidade));
}

function montaLinhaProdutoUnidade(item) {
  let html = "";
  let selectOpcaoQuantidade = document.getElementById("opcaoquantidade").value;
  html += '<tr class="l_' + item.rand + '">';
  html += "<td>" + _produto.produto + "</td>";
  if (selectOpcaoQuantidade == "quantidade") {
    html += "<td>" + item.quantidadeUnidade + "</td>";
    html +=
      '<td class="valortotal">' +
      formatReal(item.quantidadeUnidade * item.valor) +
      "</td>";
  } else if (selectOpcaoQuantidade == "quantidadeUnidade") {
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
