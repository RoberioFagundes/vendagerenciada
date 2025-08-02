document.getElementById("opcaoquantidade").addEventListener("change", function () {

    var selectOpcaoQuantidade = document.getElementById("opcaoquantidade").value; 

    if (selectOpcaoQuantidade==optionquantidade) {
        alert("quantidade");
        document.getElementById("produto-unidade").style.display="none"
    }
    
})