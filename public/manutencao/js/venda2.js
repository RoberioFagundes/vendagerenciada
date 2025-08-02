var selectOpcaoQuantidade = document.getElementById("opcaoquantidade");

selectOpcaoQuantidade.addEventListener("change", function() {
    var selectOpcaoQuantidade = document.getElementById("opcaoquantidade").value
   


    if (selectOpcaoQuantidade=="optionquantidade") {
        document.getElementById("produto-quantidade").style.display="block";
         document.getElementById("produto-unidade").style.display="none"
         document.getElementById("produto-cartela").style.display="none"
         document.getElementById("error-opcao-quantidade").style.display="none";

        //  iteração com produto com caixa
        document.getElementById("produto").addEventListener("change",function () {
            
            var selectprodutocaixa =document.getElementById("produto").value;
            var objetoprodutocaixa = JSON.parse(selectprodutocaixa);

            document.getElementById("valor").value=objetoprodutocaixa.valor_venda
   
            console.log("produto com caixa",objetoprodutocaixa);
        })
         
    }

    else if (selectOpcaoQuantidade=="optionquantidadeUnidade") {
        document.getElementById("produto-quantidade").style.display="none";
        document.getElementById("produto-unidade").style.display="block"
        document.getElementById("produto-cartela").style.display="none"
        document.getElementById("error-opcao-quantidade").style.display="none";

        

        // iteração com produto unidade
        document.getElementById("produtoUnidade").addEventListener("change",function () {
         
            var selectprodutounidade = document.getElementById("produtoUnidade").value;
            var objetoprodutounidade = JSON.parse(selectprodutounidade);
            document.getElementById("valorUnidade").value=objetoprodutounidade.valor_unitario;

            console.log("iteração com unidade", objetoprodutounidade.valor_unitario);
            

        })
    }

    else if (selectOpcaoQuantidade=="optionCartela") {
   
        document.getElementById("produto-quantidade").style.display="none";
        document.getElementById("produto-unidade").style.display="none"
        document.getElementById("produto-cartela").style.display="block"
        document.getElementById("error-opcao-quantidade").style.display="none";

        document.getElementById("produtocartela").addEventListener("change",function () {
            var selectprodutocartela = document.getElementById("produtocartela").value;

            var objetoprodutocartela = JSON.parse(selectprodutocartela);

            document.getElementById("valorCartela").value=objetoprodutocartela.valor_venda
        })
    }

    else{
        document.getElementById("error-opcao-quantidade").style.display="block";
         document.getElementById("divQuantidadeUnidade").style.display="none";
         document.getElementById("divQuantidade").style.display="none";
        selectOpcaoQuantidade.focus()
    }
})

// para assim que preencher o input preencher o select 
var inputproduto=document.getElementById("inputprodutocodigobarra");

// document.getElementById("inputprodutocodigobarra").addEventListener("input",function () {
//     alert("codigo de barras");
// })