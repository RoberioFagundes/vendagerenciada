// interação com produto com caixa 


    if (document.getElementById("produto-quantidade").innerText!="") { 
        document.getElementById("produto").addEventListener("click",function () {
            if (document.getElementById("produto").value!="") { // para verificar se escolhi produto 
                
                document.getElementById("quantidade").addEventListener("inputf", function () { //iteração com quantidade de caixa
                    var estoque = document.getElementById("produto-estoque").innerText // pegou o valor do estoque
    
                    var valorestoquecaixa=parseFloat(estoque);
                    var inputquantidadeCaixa=document.getElementById("quantidade").value; // pegou o valor da quantidade
                    
                    if (inputquantidadeCaixa > valorestoquecaixa) {
                        swal("Ops", "valor maior do que tem no estoque", "error");
                        document.getElementById("quantidade").focus();
                    }
                    else if (inputquantidadeCaixa==0) {
                        swal("Ops", "Digite uma quantidade maior que zero", "error");
                    }
                 
                })
            }
        })
    }
 

    // interação com produto com Unidade
    if (document.getElementById("produto").innerText!="") { //verificar se o usuario escolheu caixa ou unidade ou cartela
        document.getElementById("produtoUnidade").addEventListener("click",function () {//iteração com produto com unidade
            if (document.getElementById("produtoUnidade").value!="") { // para verificar se escolhi produto com unidade 
                
                document.getElementById("optionquantidadeUnidade").addEventListener("input", function () { //iteração com quantidade de caixa
                    var estoqueUnidade = document.getElementById("produtoQtdUnidade").innerText // pegou o valor do estoque
    
                    var valorestoqueUnidade=parseFloat(estoqueUnidade);
                   
                    
                    var inputquantidadeUnidade=document.getElementById("optionquantidadeUnidade").value; // pegou o valor da quantidade
                    
                    if (inputquantidadeUnidade > valorestoqueUnidade) {
                        swal("Ops", "Você digitou uma quantidade maior de unidade do que tem no estoque", "error");
                    }
                    else if (inputquantidadeUnidade==0) {
                        swal("Ops", "Digite uma quantidade de unidade maior que zero", "error");
                    }
                 
                })
            }
        })
    }

     // interação com produto com Cartela
     if (document.getElementById("produto").innerText!="") { //verificar se o usuario escolheu caixa ou unidade ou cartela
        document.getElementById("produtocartela").addEventListener("click",function () {//iteração com produto com unidade
            if (document.getElementById("produtocartela").value!="") { // para verificar se escolhi produto com unidade 
                
                document.getElementById("optionquantidadecartela").addEventListener("input", function () { //iteração com quantidade de caixa
                    var estoqueCartela = document.getElementById("produtoQtdcartela").innerText // pegou o valor do estoque
    
                    var valorestoqueCartela=parseFloat(estoqueCartela);
                    console.log("quantidade de cartela",valorestoqueCartela);
                    
                    var inputquantidadeCartela=document.getElementById("optionquantidadecartela").value; // pegou o valor da quantidade
                    
                    if (inputquantidadeCartela > valorestoqueCartela) {
                        swal("Ops", "Você digitou uma quantidade maior de Cartela do que tem no estoque", "error");
                    }
                    else if (inputquantidadeCartela==0) {
                        swal("Ops", "Digite uma quantidade de Cartela maior que zero", "error");
                    }
                 
                })
            }
        })
    }
 





if (document.getElementById("adicionar-produto").value=="") {
    
    document.getElementById("adicionar-produto").addEventListener("click",function () {
        
    })
    
}





if (document.getElementById("adicionar-produto").value=="") {
    
    document.getElementById("adicionar-produto").addEventListener("click",function () {
        
    })
    
}

document.getElementById("adicionar-pagamento").addEventListener("click", function () {
    
    var selectOpcaoQuantidadeCartelaUnidade = document.getElementById("opcaoquantidade").value
    
    
    if (selectOpcaoQuantidadeCartelaUnidade=="") {
        swal("Ops", "Escolhar primeiro a opção de venda por caixa ou unidade ou cartela no formulario acima depois a forma de pagamento ", "error");
    }
})