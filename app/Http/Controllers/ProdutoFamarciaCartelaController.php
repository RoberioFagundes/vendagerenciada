<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProdutoFamarciaCartela;

use Illuminate\Http\Request;

class ProdutoFamarciaCartelaController extends Controller
{
    //
    public function index_produto_famarcia_cartela(Request $request)
    {
       
        $produtos = User::join('produto_famarcia_cartela', 
        'produto_famarcia_cartela.user_id', '=', 'users.id')
        ->select('produto_famarcia_cartela.id',
                 'produto_famarcia_cartela.COD_BARRA',
                 'produto_famarcia_cartela.produto',
                 'produto_famarcia_cartela.valor_produto',
                 'produto_famarcia_cartela.valor_venda',
                 'produto_famarcia_cartela.QTD_PRODUTO',
                 'produto_famarcia_cartela.QTD_PRODUTO_CARTELA')
        ->where('users.id', auth()->user()->id)->when($request->has('nome'),function($whenQuery) use ($request){
            $whenQuery->where('COD_BARRA', $request->nome)
            ->orWhere('produto','like', '%' . $request->nome . '%');
        })->paginate(10);

        // dd($produtos);
        $titulo = 'Medicamento com cartela';
       
        return view('produto_famarcia_cartela.index_produto_farmacia_cartela',
        ['titulo'=>$titulo,
        'produtos'=>$produtos,
        'nome'=>$request->nome]);
    }

    public function create_produto_famarcia_cartela()
    {
        $categorias = User::join('categorias', 'categorias.user_id', '=', 'users.id')->where('users.id',auth()->user()->id)->get();
       
        $titulo = "Cadastro de medicamento com cartela";
        return view('produto_famarcia_cartela.create_produto_famarcia_cartela', compact('titulo', 'categorias'));

    }

    public function edit_produto_famarcia_cartela($id)
    {
        
        try{
			$titulo = 'Editar produto com cartela';
			$produto = User::join('produto_famarcia_cartela', 'produto_famarcia_cartela.user_id',
             '=', 'users.id')->where('users.id', auth()->user()->id)->get()->find($id);
			$categorias = User::join('categorias', 'categorias.user_id', '=', 'users.id')->where('users.id',auth()->user()->id)->get();

			return view('produto_famarcia_cartela.edit_produto_famarcia_cartela', compact('titulo', 'produto', 'categorias'));
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}


    }

    public function show_produto_famarcia_cartela()
    {

    }

    public function store_produto_famarcia_cartela(Request $request)
    {
        $quantidade = $request->inputQTD_PRODUTO;
        $cartela = $request->inputQTD_PRODUTO_UNIDADE;

        $resultado=$quantidade * $cartela;

        $produto_farmacia = new ProdutoFamarciaCartela();
        $produto_farmacia->COD_BARRA = $request->inputCOD_BARRA;
        $produto_farmacia->categoria_id=$request->categoria_id;
        $produto_farmacia->substancia = $request->inputsubstancia;
        $produto_farmacia->indicacao = $request->inputindicacao;
        $produto_farmacia->QTD_PRODUTO = $request->inputQTD_PRODUTO;
        $produto_farmacia->QTD_PRODUTO_CARTELA = $resultado;
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

        return redirect('/produtosfamarciaCartela/produto/cartela')->with('produto-salvo', 'Produto com cadastrado com sucesso');

    }

    public function delete_produto_famarcia_cartela($id)
    {
        try{
			ProdutoFamarciaCartela::find($id)->delete();
			session()->flash('sucesso', 'Cartela de Produto removido com sucesso!');
			return redirect('/produtosfamarciaCartela');
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}
    }

    public function update_produto_famarcia_cartela(Request $request)
    {
        // dd($request->all());
        try {
            $produto_farmacia = ProdutoFamarciaCartela::find($request->id);
            $produto_farmacia->COD_BARRA = $request->inputCOD_BARRA;
            $produto_farmacia->substancia = $request->inputsubstancia;
            $produto_farmacia->indicacao = $request->inputindicacao;
            $produto_farmacia->QTD_PRODUTO = $request->inputQTD_PRODUTO;
            $produto_farmacia->QTD_PRODUTO_CARTELA = $request->inputQTD_PRODUTO_UNIDADE;
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
            return redirect('produtosfamarciaCartela')->with('produto-salvo', 'Produto com atualizado com sucesso');

        } catch (\Exception $e) {
            session()->flash('erro', $e->getMessage());

        }
        return redirect('/produtos');
    }
}
