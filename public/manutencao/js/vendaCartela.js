var _itens_cartela = [];

document
  .getElementById("produtocartela")
  .addEventListener("change", function () {
    var produtocartela = document.getElementById("produtocartela").value;
    var objeto = JSON.parse(produtocartela);

    document.getElementById("valor").value = objeto.valor_unitario; // para setar o unitario da cartela

    document.getElementById("produtocartelaNome").innerText = objeto.produto;
    document.getElementById("produtoQtdcartela").innerHTML =objeto.QTD_PRODUTO_CARTELA 
    document.getElementById("produtoQtdCaixacartela").innerHTML =
      "<label>" +
      "Quantidade de caixa de produto com cartela" +
      objeto.QTD_PRODUTO +
      "</label>";

    console.log("objeto", objeto);
  });

document.addEventListener("change", function () {
  _itens_cartela = $("#produtocartelaNome").val()
    ? JSON.parse($("produtocartelaNome").val())
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
  _itens_cartela = $("#produtocartelaNome").val()
    ? JSON.parse($("#produtocartelaNome").val())
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
      '<td><button onclick="deleteItemUnidade(' +
      item_unidade.rand +
      ')" class="btn btn-danger btn-sm"><i class="la la-trash">';
    html += "</i></button></td>";
    html += "</tr>";
    return html;
  }
}

var _itens_cartela = [];
var _produto = null;

$("#produtocartela").change(() => {
  _produto = $("#produtocartela").val()
    ? JSON.parse($("#produtocartela").val())
    : null;

  if (_produto != null) {
    $("#valorCartela").val(formatReal(_produto.valor));
    $("#optionquantidadecartela");
  }
});

$("#adicionar-produto").click(() => {
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

      console.log("item cartela", item_cartela);
      // a função montalinhaProdutoCartela recebe a lista de cartela
      let html = montaLinhaProdutoCartela(item_cartela);
      // adiciono essa cartela
      _itens_cartela.push(item_cartela);

      var totalgeralcartela = 0;
      var resultado = 0;

      for (var key in _itens_cartela) {
        totalgeralcartela +=
          _itens_cartela[key].valorCartela *
          _itens_cartela[key].quantidadeCartela;
      }
      
      
   
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

  /*
  $('.value-plus').on('click', function() {
    let elementos = document.getElementsByClassName("produto");
    let valores = [];
    for (let i = 0; i < elementos.length; i++) {
      valores.push(elementos[i].innerHTML.replace(",", "."));
    };
    console.log(valores);
  });
*/
  // calculo para somar os subtotal da quantidade de cartela de produto
  // let tds = document.querySelectorAll(".valortotalcartela");

  // var ValorTotalSubtotal = 0;
  // let valoresCartela = [];

  // for (key in _itens_cartela) {
  //   ValorTotalSubtotal += valoresCartela.push(
  //     tds[key].innerHTML.replace(",", ".")
  //   );
  //   console.log("valor do subtotal", ValorTotalSubtotal);
  // }
});

// fiz essa função que vai funcionar depois do usuario fizer o segundo click
document.getElementById("adicionar-produto").addEventListener("click",function () {
        
  // para calcular o valor total de cartela 
  var total=0;
  var valortotalelement = [];
  
  var itemcartela=document.querySelectorAll('.valortotalcartela');

  var tamanhodoarray = itemcartela.length

  var array=[];

  // console.log("valor da classe",valorClasse);
  
 
  for (var index = 0; index < tamanhodoarray; index++) {
    var element = itemcartela[index].textContent;
    var primeiro=itemcartela[0];
    var conversaoStringToNumero=element.replace(",",".")

    var numero = parseFloat(conversaoStringToNumero);
    
    array.push(numero);
    total+=numero
    
  }

  console.log("array",array);
  console.log("elementos",element, typeof(element));
  console.log("valor total do elementos",total.toFixed(2), typeof(total));
  // console.log("valor anterior", totalgeralcartela);
  


  document.getElementById("total_geralCartela").value=total


  document.getElementById("totalvalorcartela").innerHTML='<label><b>Valor total da cartela: '+total.toFixed(2)+'</b></label>';
})


// função que vai o setar valor ante de recuperar valor executar para evitar que o primeiro campo seja em branco
document.getElementById("optionquantidadecartela").addEventListener("input",function () {
  var inputvalorcartela = document.getElementById("valorCartela").value;
  var inputquantidadecartela = document.getElementById("optionquantidadecartela").value;
// para o usuário clicar em adicionar produto o valor já esteja para adicionar no array evitar que o primeiro valor fiquei em branco 
  var resultado=parseFloat(inputvalorcartela).toFixed(2)*parseFloat(inputquantidadecartela).toFixed(2)

  document.getElementById("total_geralCartela").value=resultado;
})


// function recuperarValores() {

//   // var els = document.getElementsByClassName("total_geralCartela");
//   // var elsArray = Array.prototype.slice.call(els, 0);
//   // var soma = 0;
  
//   // elsArray.forEach(function(el) {
//   //     soma += parseFloat(el.value);
//   // });
  
//   // document.getElementById("totalcartelaid").value = soma;

//   // var colunas = document.getElementById("total_geralCartela").value;
 
//   // var total = 0;
//   // var numColunas = colunas.length;

//   // var objCarrinho = [];
//   // for (let i = 0; i < numColunas; i++) {
//   //   var valor = colunas[i].textContent;
//   //   numerovalor = parseFloat(valor);
//   //   objCarrinho = [];
//   //   objCarrinho.push(valor);

//   //   var numobj=parseFloat(objCarrinho.push(valor))
//   //   total +=numobj;
//   //   console.log("valor total", total);
//   // }

//   var produtos = document.querySelectorAll('.valortotalcartela');
// //console.log(produtos);

// // Array para armazenar os valores
// var valores = [];

// // Ler a lista de elementos e obter os valores
// for(var i = 0; i < produtos.length; i++){

//     // Recuperar o valor que está dentro da classe "produto_id"
//     var valor = produtos[i].textContent;

//     // Usar o push para adicionar elementos no final do array
//     valores.push(valor);
// }

// // Exibir os valores obtidos
// alert(`Lista de ID recuperado: ${valores}`);

//   // recebo os valores que vão vir para a classe 
//   var classValores = document.querySelectorAll(".valortotalcartela");

//   // Array para armazenar os valores da classValores
//   var ArrayValoresClass = [];

//   var total=0;

//   for (var index = 0; index < classValores.length; index++) {
//     var element = classValores[index].textContent;

//     // Usar o push para adicionar elementos no final do array
//     ArrayValoresClass.push(element);

//     var converterString=JSON.stringify(ArrayValoresClass.push(element));

//     var convertfloat=parseFloat(converterString).replace(",",".")

//     total+=parseFloat(ArrayValoresClass);
    
//   }
//   console.log("numero convertido", converterString);
//   console.log("elementos do array", ArrayValoresClass);

//   console.log("tipo do array",typeof(ArrayValoresClass));
  
  
//   console.log("Array de dados", total);
  

// }

function montaLinhaProdutoCartela(item_cartela) {
  if (document.getElementById("opcaoquantidade").value == "optionCartela") {
    let html = "";
    html += '<tr class="1_' + item_cartela.rand + '">';
    html += "<td>" + _produto.produto + "</td>";

    html += "<td>" + item_cartela.quantidadeCartela + "</td>";

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

function deleteItemCartela() {
  let temp = _itens_cartela.filter((x) => {
    if (x.rand != rand) {
      return x;
    } else {
      $(".1_" + rand).remove();
    }
  });
  _itens_cartela = temp;
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
