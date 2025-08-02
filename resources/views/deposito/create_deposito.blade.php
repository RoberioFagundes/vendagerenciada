@extends('default')
@section('body')
    @include('components.flash-mensagem-sucesso-cadastro')
    <!-- @section('produto-salvo')

    @endsection -->
    <div class="col-xl-12">

        <div class="card">
            <div class="card-body">
                <form method="post" action="{{route('deposito_store')}}">
                    @csrf
                    <!-- <input type="hidden" name="id" value="{{isset($produto) ? $produto->id : 0}}"> -->
                    <div class="row">
                        <div class="form-group col-xl-4">
                            <label>Valor</label>
                            <input type="text" class="form-control" id="valor"
                                placeholder="Campo de preenchimento Obrigátorio" name="valor">
                            <label id="valor" class="alert alert-danger" style="display:none;">Valor</label>
                        </div><br>



                        <div class="form-group col-xl-9">
                            <label>Descrição</label><br>
                            <textarea id="descricao" name="descricao" rows="5" cols="33">

                            </textarea>

                        </div>


                        <div class="col-12">
                            <a class="btn btn-danger" href="/produtos">Cancelar</a>
                            <button type="submit" class="btn btn-success mr-2">Salvar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        // $('#cep').mask('00000-000');
        // $('#phone').mask('(00) 00000-0000');
        // $('#cpf').mask('000.000.000-00', { reverse: true });
        $('#inputQTD_PRODUTO_UNIDADE').mask("#.##0.00", { reverse: true });
        $('#inputQTD_PRODUTO').mask("###0.00", { reverse: true });
        $('#inputvalor_produto').mask("#.##0.00", { reverse: true });
        $('#inputvalor_venda').mask("#.##0.00", { reverse: true });
        $('#inputvalor_venda_unidade').mask("#.##0.00", { reverse: true });

        $('#inputCOD_BARRA').on('keypress', function (event) {
            //Tecla 13 = Enter
            if (event.which == 13) {
                //cancela a ação padrão
                event.preventDefault();
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        document.getElementById('inputCOD_BARRA').addEventListener('input', function () {
            if (document.getElementById("inputCOD_BARRA").value != "") {
                document.getElementById('label-codigo-de-barras').style.display = 'none';
            }
        })

        document.getElementById('inputQTD_PRODUTO').addEventListener('input', function () {
            if (document.getElementById("inputQTD_PRODUTO").value != "") {
                document.getElementById('label-QTD-PRODUTO').style.display = 'none';
            }
        })

        document.getElementById('inputQTD_PRODUTO_UNIDADE').addEventListener('input', function () {
            if (document.getElementById("inputQTD_PRODUTO_UNIDADE").value != "") {
                document.getElementById('label-QTD-PRODUTO-UNIDADE').style.display = 'none';
            }
        })

        document.getElementById('inputvalor_produto').addEventListener('input', function () {
            if (document.getElementById("inputvalor_produto").value != "") {
                document.getElementById('label-vlr-produto').style.display = 'none';
            }
        })

        document.getElementById('inputvalor_venda').addEventListener('input', function () {
            if (document.getElementById("inputvalor_venda").value != "") {
                document.getElementById('label-valor-venda').style.display = 'none';
            }
        })

        //evento submit

        document.addEventListener('submit', function (event) {
            if (document.getElementById('inputvalor_venda').value === "") {
                document.getElementById('inputvalor_venda').focus();
                event.preventDefault();
                document.getElementById('label-valor-venda').style.display = 'block'
            }

            if (document.getElementById('inputvalor_produto').value === "") {
                document.getElementById('inputvalor_produto').focus();
                event.preventDefault();
                document.getElementById('label-vlr-produto').style.display = 'block'
            }

            if (document.getElementById('inputQTD_PRODUTO_UNIDADE').value === "") {
                document.getElementById('inputQTD_PRODUTO_UNIDADE').focus();
                event.preventDefault();
                document.getElementById('label-QTD-PRODUTO-UNIDADE').style.display = 'block'

            }

            if (document.getElementById("inputQTD_PRODUTO").value === "") {

                document.getElementById('inputQTD_PRODUTO').focus();
                event.preventDefault();
                document.getElementById('label-QTD-PRODUTO').style.display = 'block'
            }



            if (document.getElementById("inputCOD_BARRA").value === "") {
                document.getElementById('inputCOD_BARRA').focus();
                event.preventDefault();
                document.getElementById('label-codigo-de-barras').style.display = 'block';
            }









        })

        document.getElementById('inputCOD_BARRA').addEventListener('input', function () {

            const codigo_barra = document.querySelector("input[name=inputCOD_BARRA]");

            codigo_barra.addEventListener('blur', event => {
                const codigo_barra_value = codigo_barra.value.replace(/[^0-9]+/, '');
                console.log(codigo_barra_value);

                const url_codigo_barra = `https://vendagerenciada.com.br/api_medicamento_com_codigo_barra_show/${codigo_barra_value}/json`;


                fetch(url_codigo_barra)

                    .then(response => response.json())

                    .then(dataJson => {
                        console.log(dataJson);
                        document.getElementById('inputindicacao').value = dataJson.data.INDICAÇÃO
                        if (document.getElementById('inputindicacao').value == "undefined") {
                            document.getElementById('inputindicacao').value = "";
                        }
                        document.getElementById('inputproduto').value = dataJson.data.PRODUTO
                    })
            })

        }) //fim da função que vai preencher com codigo de barra 

        const registro = document.querySelector("input[name=inputregistro]");


        registro.addEventListener('blur', e => {
            const value = registro.value.replace(/[^0-9]+/, '');
            const url = `https://vendagerenciada.com.br/apimedicamentoshow/${value}/json/`;
            console.log(typeof (url));


            // produto com registro ms
            fetch(url)

                .then(response => response.json())

                .then(json => {

                    console.log(json);
                    var valorJson = json;
                    console.log(valorJson)
                    document.getElementById('inputsubstancia').value = valorJson.data.substancia
                    document.getElementById('inputcnpj').value = valorJson.data.cnpj
                    document.getElementById('inputlaboratorio').value = valorJson.data.laboratorio
                    document.getElementById('inputcodigoGgrem').value = valorJson.data.codigoGgrem
                    document.getElementById('inputEAN_1').value = valorJson.data.EAN_1
                    document.getElementById('inputEAN_2').value = valorJson.data.EAN_2
                    document.getElementById('inputEAN_3').value = valorJson.data.EAN_3
                    document.getElementById('inputproduto').value = valorJson.data.produto
                    document.getElementById('inputapresentacao').value = valorJson.data.apresentacao
                    document.getElementById('inputclasseTerapeutica').value = valorJson.data.classeTerapeutica
                    document.getElementById('inputtipoProduto').value = valorJson.data.tipoProduto
                    document.getElementById('inputregimePreco').value = valorJson.data.regimePreco
                    document.getElementById('inputPFSemImpostos').value = valorJson.data.PFSemImpostos
                    document.getElementById('inputPF_0').value = valorJson.data.PF_0
                    document.getElementById('inputPF_12').value = valorJson.data.PF_12
                    document.getElementById('inputPF_12_ALC').value = valorJson.data.PF_12_ALC
                    document.getElementById('inputPF_17').value = valorJson.data.PF_17
                    document.getElementById('inputPF17_ALC').value = valorJson.data.PF17_ALC
                    document.getElementById('inputPF_17_5').value = valorJson.data.PF_17_5
                    document.getElementById('inputPF_17_5_ALC').value = valorJson.data.PF_17_5_ALC
                    document.getElementById('inputPF_18').value = valorJson.data.PF_18
                    document.getElementById('inputPF_18_ALC').value = valorJson.data.PF_18_ALC
                    document.getElementById('inputPF_19').value = valorJson.data.PF_19
                    document.getElementById('inputPF_19_ALC').value = valorJson.data.PF_19_ALC
                    document.getElementById('inputPF_20').value = valorJson.data.PF_20
                    document.getElementById('inputPF_20_ALC').value = valorJson.data.PF_20_ALC
                    document.getElementById('inputPF_21').value = valorJson.data.PF_21
                    document.getElementById('inputPF_21_ALC').value = valorJson.data.PF_21_ALC
                    document.getElementById('inputPF_22').value = valorJson.data.PF_22
                    document.getElementById('inputPF_22_ALC').value = valorJson.data.PF_22_ALC
                    document.getElementById('inputPMC_Sem_Impostos').value = valorJson.data.PMC_Sem_Impostos
                    document.getElementById('inputPMC').value = valorJson.data.PMC
                    document.getElementById('inputPMC_12').value = valorJson.data.PMC_12
                    document.getElementById('inputPMC_12_ALC').value = valorJson.data.PMC_12_ALC
                    document.getElementById('inputPMC_17').value = valorJson.data.PMC_17
                    document.getElementById('inputPMC_17_ALC').value = valorJson.data.PMC_17_ALC
                    document.getElementById('inputPMC_17_5').value = valorJson.data.PMC_17_5
                    document.getElementById('inputPMC_17_5_ALC').value = valorJson.data.PMC_17_5_ALC
                    document.getElementById('inputPMC_18').value = valorJson.data.PMC_18
                    document.getElementById('inputPMC_18_ALC').value = valorJson.data.PMC_18_ALC
                    document.getElementById('inputPMC_19').value = valorJson.data.PMC_19
                    document.getElementById('inputPMC_19_ALC').value = valorJson.data.PMC_19_ALC
                    document.getElementById('inputPMC_20').value = valorJson.data.PMC_20
                    document.getElementById('inputPMC_20_ALC').value = valorJson.data.PMC_20_ALC
                    document.getElementById('inputPMC_21').value = valorJson.data.PMC_21
                    document.getElementById('inputPMC_21_ALC').value = valorJson.data.PMC_21_ALC
                    document.getElementById('inputPMC_22').value = valorJson.data.PMC_22
                    document.getElementById('inputPMC_22_ALC').value = valorJson.data.PMC_22_ALC
                    document.getElementById('inputrestricao_hospital').value = valorJson.data.restricao_hospital
                    document.getElementById('inputCAP').value = valorJson.data.CAP
                    document.getElementById('inputCONFAZ_87').value = valorJson.data.CONFAZ_87
                    document.getElementById('inputICMS_0').value = valorJson.data.ICMS_0
                    document.getElementById('inputANÁLISE_RECURSAL').value = valorJson.data.ANÁLISE_RECURSAL
                    document.getElementById('inputLISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS').value = valorJson.data.LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS
                    document.getElementById('inputCOMERCIALIZAÇAO_2022').value = valorJson.data.COMERCIALIZAÇAO_2022
                    document.getElementById('inputTARJA').value = valorJson.data.TARJA
                });
        });

        document.getElementById("inputCOD_BARRA").addEventListener("input", function () {

    const inputcodigo_barra = document.getElementById("inputCOD_BARRA")
    const value = inputcodigo_barra.value.replace(/[^0-9]+/, '');
    const url = `https://vendagerenciada.com.br/api/ApiProdutoGeralCodigoBarra/${value}`;
    // inicio #

    fetch(url)

        .then(response => response.json())

        .then(json => {

            console.log("valor do codigo json", json);
            var valorJson = json;
            console.log(valorJson)

            document.getElementById('inputproduto').value = valorJson.data.descricao

        });


    // fim 
    console.log("url do codigo de barra", url);

    })
    </script>
@endsection