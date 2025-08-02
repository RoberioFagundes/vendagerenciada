@extends('default')
@section('body')
@include('components.flash-mensagem-sucesso-cadastro')
<!-- @section('produto-salvo')

@endsection -->
<div class="col-xl-12">

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('produto_cartela_update', ['id', $produto->id]) }}">

                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{isset($produto) ? $produto->id : 0}}">
                <div class="row">
                    <div class="form-group col-xl-4">
                        <label>Código de Barras</label>
                        <input type="text" class="form-control" id="inputCOD_BARRA"
                            placeholder="Campo de preenchimento Obrigátorio" name="inputCOD_BARRA"
                            value="{{$produto->COD_BARRA}}">
                        <label id="label-codigo-de-barras" class="alert alert-danger" style="display:none;">O código de
                            barras é obrigatório.</label>
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Registro(MS)</label>
                        <input type="text" class="form-control" id="inputregistro"
                            placeholder="Campo de preenchimento Obrigátorio" name="inputregistro"
                            value="{{$produto->registro_ms}}">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Quantidade produto</label>
                        <input type="text" class="form-control" id="inputQTD_PRODUTO"
                            placeholder="Campo de preenchimento Obrigátorio" value="{{$produto->QTD_PRODUTO}}"
                            name="inputQTD_PRODUTO">
                        <label id="label-QTD-PRODUTO" class="alert alert-danger" style="display:none;">A quantidade de
                            produtos é obrigatória</label>
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Quantidade de cartela do produto na caixa</label>
                        <input type="text" class="form-control" id="inputQTD_PRODUTO_UNIDADE"
                            placeholder="Campo de preenchimento Obrigátorio" name="inputQTD_PRODUTO_UNIDADE"
                            value="{{$produto->QTD_PRODUTO_CARTELA}}">
                        <label id="label-QTD-PRODUTO-UNIDADE" class="alert alert-danger" style="display:none;">A
                            quantidade de unidade de produtos é obrigatória</label>
                    </div>

                    <div class="form-group col-xl-4">
                        <label>valor do produto</label>
                        <input type="text" class="form-control" value="{{$produto->valor_produto}}"
                            id="inputvalor_produto" placeholder="Campo de preenchimento Obrigátorio"
                            name="inputvalor_produto">
                        <label id="label-vlr-produto" class="alert alert-danger" style="display:none;">O valor do
                            produtos é obrigatório</label>
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Valor de venda</label>
                        <input type="text" class="form-control" id="inputvalor_venda" value="{{$produto->valor_venda}}"
                            placeholder="Campo de preenchimento Obrigátorio" name="inputvalor_venda">
                        <label id="label-valor-venda" class="alert alert-danger" style="display:none;">O valor de venda
                            é obrigatório</label>
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Valor da unidade do produto</label>
                        <input type="text" class="form-control" id="inputvalor_venda_unidade"
                            value="{{$produto->valor_unitario}}" placeholder="Campo de preenchimento Opcional"
                            name="inputvalor_unitario">
                        <label id="label-valor-venda" class="alert alert-danger" style="display:none;">O valor de venda
                            é obrigatório</label>
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Indicação</label>
                        <input type="text" class="form-control" id="inputindicacao" value="{{$produto->indicacao}}"
                            placeholder="Campo de preenchimento Opcional" name="inputindicacao">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>substância</label>
                        <input type="text" class="form-control" id="inputsubstancia" value="{{$produto->substancia}}"
                            placeholder="Campo de preenchimento Opcional" name="inputsubstancia">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>cnpj</label>
                        <input type="text" class="form-control" id="inputcnpj" value="{{$produto->cnpj}}"
                            placeholder="Campo de preenchimento Opcional" name="inputcnpj">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>laboratorio</label>
                        <input type="text" class="form-control" id="inputlaboratorio" value="{{$produto->laboratorio}}"
                            placeholder="Campo de preenchimento Opcional" name="inputlaboratorio">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Código Ggrem</label>
                        <input type="text" class="form-control" id="inputcodigoGgrem" value="{{$produto->codigoGgrem}}"
                            placeholder="Campo de preenchimento Opcional" name="inputcodigoGgrem">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>EAN 1</label>
                        <input type="text" class="form-control" id="inputEAN_1" value="{{$produto->EAN_1}}"
                            placeholder="Campo de preenchimento Opcional" name="inputEAN_1">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>EAN 2</label>
                        <input type="text" class="form-control" id="inputEAN_2" value="{{$produto->EAN_2}}"
                            placeholder="Campo de preenchimento Opcional" name="inputEAN_2">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>EAN 3</label>
                        <input type="text" class="form-control" id="inputEAN_3" value="{{$produto->EAN_3}}"
                            placeholder="Campo de preenchimento Opcional" name="inputEAN_3">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Produto</label>
                        <input type="text" class="form-control" id="inputproduto" value="{{$produto->produto}}"
                            placeholder="Campo de preenchimento Opcional" name="inputproduto">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Apresentação</label>
                        <input type="text" class="form-control" id="inputapresentacao"
                            value="{{$produto->apresentacao}}" placeholder="Campo de preenchimento Opcional"
                            name="inputapresentacao">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>classe Terapeutica</label>
                        <input type="text" class="form-control" id="inputclasseTerapeutica"
                            value="{{$produto->classeTerapeutica}}" placeholder="Campo de preenchimento Opcional"
                            name="inputclasseTerapeutica">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Tipo Produto</label>
                        <input type="text" class="form-control" id="inputtipoProduto" value="{{$produto->tipoProduto}}"
                            placeholder="Campo de preenchimento Opcional" name="inputtipoProduto">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Regime preço</label>
                        <input type="text" class="form-control" id="inputregimePreco" value="{{$produto->regimePreco}}"
                            placeholder="Campo de preenchimento Opcional" name="inputregimePreco">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF sem Impostos</label>
                        <input type="text" class="form-control" id="inputPFSemImpostos"
                            value="{{$produto->PFSemImpostos}}" placeholder="Campo de preenchimento Opcional"
                            name="inputPFSemImpostos">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 0</label>
                        <input type="text" class="form-control" id="inputPF_0" value="{{$produto->PF_0}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_0">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 12%</label>
                        <input type="text" class="form-control" id="inputPF_12" value="{{$produto->PF_12}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_12">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 12 ALC</label>
                        <input type="text" class="form-control" id="inputPF_12_ALC" value="{{$produto->PF_12_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_12_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 17</label>
                        <input type="text" class="form-control" id="inputPF_17" value="{{$produto->PF_17}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_17">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 17 ALC</label>
                        <input type="text" class="form-control" id="inputPF17_ALC" value="{{$produto->PF17_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF17_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 17,5%</label>
                        <input type="text" class="form-control" id="inputPF_17_5" value="{{$produto->PF_17_5}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_17_5">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 17,5% ALC</label>
                        <input type="text" class="form-control" id="inputPF_17_5_ALC" value="{{$produto->PF_17_5_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_17_5_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 18%</label>
                        <input type="text" class="form-control" id="inputPF_18" value="{{$produto->PF_18}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_18">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 18% ALC</label>
                        <input type="text" class="form-control" id="inputPF_18_ALC" value="{{$produto->PF_18_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_18_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 19</label>
                        <input type="text" class="form-control" id="inputPF_19" value="{{$produto->PF_19}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_19">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 19 ALC</label>
                        <input type="text" class="form-control" id="inputPF_19_ALC" value="{{$produto->PF_19_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_19_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 20</label>
                        <input type="text" class="form-control" id="inputPF_20" value="{{$produto->PF_20}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_20">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 20 ALC</label>
                        <input type="text" class="form-control" id="inputPF_20_ALC" value="{{$produto->PF_20_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_20_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 21</label>
                        <input type="text" class="form-control" id="inputPF_21" value="{{$produto->PF_21}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_21">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 21% ALC</label>
                        <input type="text" class="form-control" id="inputPF_21_ALC" value="{{$produto->PF_21_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_21_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 22%</label>
                        <input type="text" class="form-control" id="inputPF_22" value="{{$produto->PF_22}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_22">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PF 22 ALC</label>
                        <input type="text" class="form-control" id="inputPF_22_ALC" value="{{$produto->PF_22_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPF_22_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC Sem Impostos</label>
                        <input type="text" class="form-control" id="inputPMC_Sem_Impostos"
                            value="{{$produto->PMC_Sem_Impostos}}" placeholder="Campo de preenchimento Opcional"
                            name="inputPMC_Sem_Impostos">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC</label>
                        <input type="text" class="form-control" id="inputPMC" value="{{$produto->PMC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 12%</label>
                        <input type="text" class="form-control" id="inputPMC_12" value="{{$produto->PMC_12}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_12">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 12 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_12_ALC" value="{{$produto->PMC_12_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_12_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 17</label>
                        <input type="text" class="form-control" id="inputPMC_17" value="{{$produto->PMC_17}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_17">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 17 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_17_ALC" value="{{$produto->PMC_17_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_17_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 17,5</label>
                        <input type="text" class="form-control" id="inputPMC_17_5" value="{{$produto->PMC_17_5}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_17_5">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 17,5 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_17_5_ALC"
                            value="{{$produto->PMC_17_5_ALC}}" placeholder="Campo de preenchimento Opcional"
                            name="inputPMC_17_5_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 18</label>
                        <input type="text" class="form-control" id="inputPMC_18" value="{{$produto->PMC_18}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_18">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 18 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_18_ALC" value="{{$produto->PMC_18_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_18_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 19</label>
                        <input type="text" class="form-control" id="inputPMC_19" value="{{$produto->PMC_19}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_19">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 19 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_19_ALC" value="{{$produto->PMC_19_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_19_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 20</label>
                        <input type="text" class="form-control" id="inputPMC_20" value="{{$produto->PMC_20}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_20">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 20 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_20_ALC" value="{{$produto->PMC_20_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_20_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 21</label>
                        <input type="text" class="form-control" id="inputPMC_21" value="{{$produto->PMC_21}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_21">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 21 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_21_ALC" value="{{$produto->PMC_21_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_21_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 22</label>
                        <input type="text" class="form-control" id="inputPMC_22" value="{{$produto->PMC_22}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_22">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>PMC 22 ALC</label>
                        <input type="text" class="form-control" id="inputPMC_22_ALC" value="{{$produto->PMC_22_ALC}}"
                            placeholder="Campo de preenchimento Opcional" name="inputPMC_22_ALC">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>Restrição hospital</label>
                        <input type="text" class="form-control" id="inputrestricao_hospital"
                            value="{{$produto->restricao_hospital}}" placeholder="Campo de preenchimento Opcional"
                            name="inputrestricao_hospital">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>CAP</label>
                        <input type="text" class="form-control" id="inputCAP" value="{{$produto->CAP}}"
                            placeholder="Campo de preenchimento Opcional" name="inputCAP">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>CONFAZ_87</label>
                        <input type="text" class="form-control" id="inputCONFAZ_87" value="{{$produto->CONFAZ_87}}"
                            placeholder="Campo de preenchimento Opcional" name="inputCONFAZ_87">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>ICMS 0</label>
                        <input type="text" class="form-control" id="inputICMS_0" value="{{$produto->ICMS_0}}"
                            placeholder="Campo de preenchimento Opcional" name="inputICMS_0">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>ANÁLISE RECURSAL</label>
                        <input type="text" class="form-control" id="inputANÁLISE_RECURSAL"
                            value="{{$produto->ANÁLISE_RECURSAL}}" placeholder="Campo de preenchimento Opcional"
                            name="inputANÁLISE_RECURSAL">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>LISTA DE CONCESSÃO DE CRÉDITO TRIBUTÁRIO PIS COFINS</label>
                        <input type="text" class="form-control"
                            id="inputLISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS"
                            value="{{$produto->LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS}}"
                            placeholder="Campo de preenchimento Opcional"
                            name="inputLISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>COMERCIALIZAÇÃO 2022</label>
                        <input type="text" class="form-control" value="{{$produto->COMERCIALIZAÇAO_2022}}"
                            id="inputCOMERCIALIZAÇAO_2022" placeholder="Campo de preenchimento Opcional"
                            name="inputCOMERCIALIZAÇAO_2022">
                    </div>

                    <div class="form-group col-xl-4">
                        <label>TARJA</label>
                        <input type="text" class="form-control" value="{{$produto->TARJA}}" id="inputTARJA"
                            placeholder="Campo de preenchimento Opcional" name="inputTARJA">
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
    $('#inputvalor_unitario').mask("#.##0.00", { reverse: true });


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