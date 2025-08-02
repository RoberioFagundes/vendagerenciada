var _itens_cartela = [];

document.getElementById("produtoUnidade").addEventListener("change",function () {
    var produtocartela = document.getElementById("produtoUnidade").value;
    var objeto = JSON.parse(produtocartela);

    document.getElementById("valor").value=objeto.valor_unitario;// para setar o unitario da cartela

    document.getElementById("produtoUnidadeNome").innerText=objeto.produto;
    document.getElementById("produtoQtdUnidade").innerHTML=objeto.QTD_PRODUTO_UNIDADE;
    document.getElementById("produtoQtdCaixa").innerHTML='<label>'+"Quantidade de caixa de produto com unidade" +objeto.QTD_PRODUTO+'</label>'

   
    console.log("unidade", objeto);
    
})

