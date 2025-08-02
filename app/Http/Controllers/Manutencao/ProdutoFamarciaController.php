<?php

namespace App\Http\Controllers;

use App\Models\ProdutoFamarcia;
use Illuminate\Http\Request;

use App\Models\User;

class ProdutoFamarciaController extends Controller
{
    //
    public function index_produto_famarcia()
    {
      
        $produtos = User::join('users', 'users.id', '=', 'produto_famarcia.user_id')->where('users.id', auth()->user()->id)->get();

        $titulo = 'Produtos';
       
        return view('produtos.list', compact('titulo', 'produtos'));
    }

    public function create_produto_famarcia()
    {
        $categorias = User::join('categorias', 'categorias.user_id', '=', 'users.id')->where('users.id',auth()->user()->id)->get();
       
        $titulo = "Cadastro de medicamento";
        return view('produtofarmacia.form_produto_farmarcia', compact('titulo', 'categorias'));

    }

    public function edit_produto_famarcia()
    {


    }

    public function show_produto_famarcia()
    {

    }

    public function store_produto_famarcia(Request $request)
    {

        $produto_farmacia = new ProdutoFamarcia();
        $produto_farmacia->COD_BARRA = $request->inputCOD_BARRA;
        $produto_farmacia->categoria_id=$request->categoria_id;
        $produto_farmacia->substancia = $request->inputsubstancia;
        $produto_farmacia->indicacao = $request->inputindicacao;
        $produto_farmacia->QTD_PRODUTO = $request->inputQTD_PRODUTO;
        $produto_farmacia->QTD_PRODUTO_UNIDADE = $request->inputQTD_PRODUTO_UNIDADE;
        $produto_farmacia->valor_venda = $request->inputvalor_venda;
        $produto_farmacia->valor_produto = $request->inputvalor_produto;
        $produto_farmacia->valor_unitario = $request->inputvalor_unitario;
        $produto_farmacia->indicacao = $request->inputindicacao;
        $produto_farmacia->cnpj = $request->inputcnpj;
        $produto_farmacia->laboratorio = $request->inputlaboratorio;
        $produto_farmacia->codigoGgrem = $request->inputcodigoGgrem;
        $produto_farmacia->registro_ms = $request->inputregistro;
        $produto_farmacia->EAN_1 = $request->inputEAN_1;
        $produto_farmacia->EAN_2 = $request->inputEAN_2;
        $produto_farmacia->EAN_3 = $request->inputEAN_3;
        $produto_farmacia->produto = $request->inputproduto;
        $produto_farmacia->apresentacao = $request->inputapresentacao;
        $produto_farmacia->classeTerapeutica = $request->inputclasseTerapeutica;
        $produto_farmacia->tipoProduto = $request->inputtipoProduto;
        $produto_farmacia->regimePreco = $request->inputregimePreco;
        $produto_farmacia->PFSemImpostos = $request->inputPFSemImpostos;
        $produto_farmacia->PF_0 = $request->inputPF_0;
        $produto_farmacia->PF_12 = $request->inputPF_12;
        $produto_farmacia->PF_12_ALC = $request->inputPF_12_ALC;
        $produto_farmacia->PF_17 = $request->inputPF_17;
        $produto_farmacia->PF17_ALC = $request->inputPF17_ALC;
        $produto_farmacia->PF_17_5 = $request->inputPF_17_5;
        $produto_farmacia->PF_17_5_ALC = $request->inputPF_17_5_ALC;
        $produto_farmacia->PF_18 = $request->inputPF_18;
        $produto_farmacia->PF_18_ALC = $request->inputPF_18_ALC;
        $produto_farmacia->PF_19 = $request->inputPF_19;
        $produto_farmacia->PF_19_ALC = $request->inputPF_19_ALC;
        $produto_farmacia->PF_20 = $request->inputPF_20;
        $produto_farmacia->PF_20_ALC = $request->inputPF_20_ALC;
        $produto_farmacia->PF_21 = $request->inputPF_21;
        $produto_farmacia->PF_21_ALC = $request->inputPF_21_ALC;
        $produto_farmacia->PF_22 = $request->inputPF_22;
        $produto_farmacia->PF_22_ALC = $request->inputPF_22_ALC;
        $produto_farmacia->PMC_Sem_Impostos = $request->inputPMC_Sem_Impostos;
        $produto_farmacia->PMC = $request->inputPMC;
        $produto_farmacia->PMC_12 = $request->inputPMC_12;
        $produto_farmacia->PMC_12_ALC = $request->inputPMC_12_ALC;
        $produto_farmacia->PMC_17 = $request->inputPMC_17;
        $produto_farmacia->PMC_17_ALC = $request->inputPMC_17_ALC;
        $produto_farmacia->PMC_17_5 = $request->inputPMC_17_5;
        $produto_farmacia->PMC_17_5_ALC = $request->inputPMC_17_5_ALC;
        $produto_farmacia->PMC_18 = $request->inputPMC_18;
        $produto_farmacia->PMC_18_ALC = $request->inputPMC_18_ALC;
        $produto_farmacia->PMC_19 = $request->inputPMC_19;
        $produto_farmacia->PMC_19_ALC = $request->inputPMC_19_ALC;
        $produto_farmacia->PMC_20 = $request->inputPMC_20;
        $produto_farmacia->PMC_20_ALC = $request->inputPMC_20_ALC;
        $produto_farmacia->PMC_21 = $request->inputPMC_21;
        $produto_farmacia->PMC_21_ALC = $request->inputPMC_21_ALC;
        $produto_farmacia->PMC_22 = $request->inputPMC_22;
        $produto_farmacia->PMC_22_ALC = $request->inputPMC_22_ALC;
        $produto_farmacia->restricao_hospital = $request->inputrestricao_hospital;
        $produto_farmacia->CAP = $request->inputCAP;
        $produto_farmacia->CONFAZ_87 = $request->inputCONFAZ_87;
        $produto_farmacia->ICMS_0 = $request->inputICMS_0;
        $produto_farmacia->ANÁLISE_RECURSAL = $request->inputANÁLISE_RECURSAL;
        $produto_farmacia->LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS = $request->inputLISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS;
        $produto_farmacia->COMERCIALIZAÇAO_2022 = $request->inputCOMERCIALIZAÇAO_2022;
        $produto_farmacia->TARJA = $request->inputTARJA;
        $produto_farmacia->USER_ID = auth()->user()->id;
        $produto_farmacia->save();

        return redirect('produto-famarcia/formulario-produto-famarcia')->with('produto-salvo', 'Produto com cadastrado com sucesso');

    }

    public function delete_produto_famarcia()
    {

    }

    public function update_produto_famarcia(Request $request)
    {
        // dd($request->all());
        try {
            $produto_farmacia = ProdutoFamarcia::find($request->id);
            $produto_farmacia->COD_BARRA = $request->inputCOD_BARRA;
            $produto_farmacia->substancia = $request->inputsubstancia;
            $produto_farmacia->indicacao = $request->inputindicacao;
            $produto_farmacia->QTD_PRODUTO = $request->inputQTD_PRODUTO;
            $produto_farmacia->QTD_PRODUTO_UNIDADE = $request->inputQTD_PRODUTO_UNIDADE;
            $produto_farmacia->valor_venda = $request->inputvalor_venda;
            $produto_farmacia->valor_produto = $request->inputvalor_produto;
            $produto_farmacia->valor_unitario = $request->inputvalor_unitario;
            $produto_farmacia->indicacao = $request->inputindicacao;
            $produto_farmacia->cnpj = $request->inputcnpj;
            $produto_farmacia->laboratorio = $request->inputlaboratorio;
            $produto_farmacia->codigoGgrem = $request->inputcodigoGgrem;
            $produto_farmacia->registro_ms = $request->inputregistro;
            $produto_farmacia->EAN_1 = $request->inputEAN_1;
            $produto_farmacia->EAN_2 = $request->inputEAN_2;
            $produto_farmacia->EAN_3 = $request->inputEAN_3;
            $produto_farmacia->produto = $request->inputproduto;
            $produto_farmacia->apresentacao = $request->inputapresentacao;
            $produto_farmacia->classeTerapeutica = $request->inputclasseTerapeutica;
            $produto_farmacia->tipoProduto = $request->inputtipoProduto;
            $produto_farmacia->regimePreco = $request->inputregimePreco;
            $produto_farmacia->PFSemImpostos = $request->inputPFSemImpostos;
            $produto_farmacia->PF_0 = $request->inputPF_0;
            $produto_farmacia->PF_12 = $request->inputPF_12;
            $produto_farmacia->PF_12_ALC = $request->inputPF_12_ALC;
            $produto_farmacia->PF_17 = $request->inputPF_17;
            $produto_farmacia->PF17_ALC = $request->inputPF17_ALC;
            $produto_farmacia->PF_17_5 = $request->inputPF_17_5;
            $produto_farmacia->PF_17_5_ALC = $request->inputPF_17_5_ALC;
            $produto_farmacia->PF_18 = $request->inputPF_18;
            $produto_farmacia->PF_18_ALC = $request->inputPF_18_ALC;
            $produto_farmacia->PF_19 = $request->inputPF_19;
            $produto_farmacia->PF_19_ALC = $request->inputPF_19_ALC;
            $produto_farmacia->PF_20 = $request->inputPF_20;
            $produto_farmacia->PF_20_ALC = $request->inputPF_20_ALC;
            $produto_farmacia->PF_21 = $request->inputPF_21;
            $produto_farmacia->PF_21_ALC = $request->inputPF_21_ALC;
            $produto_farmacia->PF_22 = $request->inputPF_22;
            $produto_farmacia->PF_22_ALC = $request->inputPF_22_ALC;
            $produto_farmacia->PMC_Sem_Impostos = $request->inputPMC_Sem_Impostos;
            $produto_farmacia->PMC = $request->inputPMC;
            $produto_farmacia->PMC_12 = $request->inputPMC_12;
            $produto_farmacia->PMC_12_ALC = $request->inputPMC_12_ALC;
            $produto_farmacia->PMC_17 = $request->inputPMC_17;
            $produto_farmacia->PMC_17_ALC = $request->inputPMC_17_ALC;
            $produto_farmacia->PMC_17_5 = $request->inputPMC_17_5;
            $produto_farmacia->PMC_17_5_ALC = $request->inputPMC_17_5_ALC;
            $produto_farmacia->PMC_18 = $request->inputPMC_18;
            $produto_farmacia->PMC_18_ALC = $request->inputPMC_18_ALC;
            $produto_farmacia->PMC_19 = $request->inputPMC_19;
            $produto_farmacia->PMC_19_ALC = $request->inputPMC_19_ALC;
            $produto_farmacia->PMC_20 = $request->inputPMC_20;
            $produto_farmacia->PMC_20_ALC = $request->inputPMC_20_ALC;
            $produto_farmacia->PMC_21 = $request->inputPMC_21;
            $produto_farmacia->PMC_21_ALC = $request->inputPMC_21_ALC;
            $produto_farmacia->PMC_22 = $request->inputPMC_22;
            $produto_farmacia->PMC_22_ALC = $request->inputPMC_22_ALC;
            $produto_farmacia->restricao_hospital = $request->inputrestricao_hospital;
            $produto_farmacia->CAP = $request->inputCAP;
            $produto_farmacia->CONFAZ_87 = $request->inputCONFAZ_87;
            $produto_farmacia->ICMS_0 = $request->inputICMS_0;
            $produto_farmacia->ANÁLISE_RECURSAL = $request->inputANÁLISE_RECURSAL;
            $produto_farmacia->LISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS = $request->inputLISTA_DE_CONCESSÃO_DE_CRÉDITO_TRIBUTÁRIO_PIS_COFINS;
            $produto_farmacia->COMERCIALIZAÇAO_2022 = $request->inputCOMERCIALIZAÇAO_2022;
            $produto_farmacia->TARJA = $request->inputTARJA;
            $produto_farmacia->USER_ID = auth()->user()->id;
            $produto_farmacia->save();
            session()->flash('sucesso', 'Produto editado com sucesso!');

        } catch (\Exception $e) {
            session()->flash('erro', $e->getMessage());

        }
        return redirect('/produtos');
    }
}
