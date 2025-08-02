
document.getElementById("inputquantidade").addEventListener("input", function () {
  var produto = document.getElementById('selectproduto').value
  var valor =document.getElementById('inputvalor').value
  var quantidade = document.getElementById('inputquantidade').value
  console.log(produto);
  console.log(valor);
  console.log(quantidade);

})
