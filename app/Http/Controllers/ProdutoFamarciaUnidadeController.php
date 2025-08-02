<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoFamarciaUnidadeRequest;
use App\Http\Requests\UpdateProdutoFamarciaUnidadeRequest;
use App\Models\ProdutoFamarciaUnidade;
use Illuminate\Http\Request;
use App\Models\User;

class ProdutoFamarciaUnidadeController extends Controller
{
    public function index(Request $request){
		$produtos= User::join('produto_famarcia_unidades',
        'produto_famarcia_unidades.user_id','=','users.id')
        ->select('produto_famarcia_unidades.id',
                'produto_famarcia_unidades.COD_BARRA',
                'produto_famarcia_unidades.produto',
                'produto_famarcia_unidades.valor_produto',
                'produto_famarcia_unidades.valor_venda',
                'produto_famarcia_unidades.QTD_PRODUTO_UNIDADE',
                'produto_famarcia_unidades.QTD_PRODUTO'
                )
        ->where('users.id', auth()->user()->id)
        ->when($request->has('nome'),function($whenQuery) use ($request){
            $whenQuery->where('COD_BARRA', $request->nome)
            ->orWhere('produto','like', '%' . $request->nome . '%');
        })->paginate(10);

    
		$titulo = 'Produtos com unidades';
		return view('produtosfamarcia_unidade.list_produto_farmarcia_unidade',
         ['titulo'=>$titulo,
         'produtos'=>$produtos,
         'nome'=>$request->nome]);
	}

	public function new(){
		$titulo = 'Nono produto com Unidade';
		$categorias = User::join('categorias','categorias.user_id','users.id')->where('users.id',auth()->user()->id)->get();
		if(sizeof($categorias) == 0){
			session()->flash('erro', 'Cadastre ao menos uma categoria');
			return redirect('categorias');
		}
		return view('produtosfamarcia_unidade.form_produto_farmarcia_unidade', compact('titulo', 'categorias'));
	}

	public function save(Request $request){

		$quantidade=$request->inputQTD_PRODUTO;
		$unidade=$request->inputQTD_PRODUTO_UNIDADE;
		$resultado = $quantidade * $unidade;//aqui para multiplicar quantidade por unidade para evitar que a trigger faça isso

		//str_replace(['(', ')', '-'], '', $_POST['fone'])
		$removerPonto=str_replace(".","", $request->inputregistro);
		$removerPonto1=str_replace(".","", $removerPonto);

		$produto_farmacia = new ProdutoFamarciaUnidade();
        $produto_farmacia->COD_BARRA = $request->inputCOD_BARRA;
        $produto_farmacia->substancia = $request->inputsubstancia;
        $produto_farmacia->indicacao = $request->inputindicacao;
        $produto_farmacia->QTD_PRODUTO = $request->inputQTD_PRODUTO;
        $produto_farmacia->QTD_PRODUTO_UNIDADE = $resultado;
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

        return redirect('/produtosfamarciaUnidade/produto/unidade')->with('produto-salvo', 'Produto com cadastrado com sucesso');
	}

	public function update(Request $request){
		$quantidade=$request->inputQTD_PRODUTO;
		$unidade=$request->inputQTD_PRODUTO_UNIDADE;
		$resultado = $quantidade * $unidade;//aqui para multiplicar quantidade por unidade para evitar que a trigger faça isso

		$removerPonto=str_replace(".","", $request->inputregistro);
		$removerPonto1=str_replace(".","", $removerPonto);
		try{
			$produto_farmacia = ProdutoFamarciaUnidade::find($request->id);
			$produto_farmacia->COD_BARRA = $request->inputCOD_BARRA;
        $produto_farmacia->substancia = $request->inputsubstancia;
        $produto_farmacia->indicacao = $request->inputindicacao;
        $produto_farmacia->QTD_PRODUTO = $request->inputQTD_PRODUTO;
        $produto_farmacia->QTD_PRODUTO_UNIDADE = $request->inputQTD_PRODUTO;
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
			return redirect('/produtosfamarciaUnidade')->with('produto-salvo', 'Produto com atualização com sucesso');

		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());

		}
		return redirect('/produtosfamarciaUnidade');
	}

	public function edit($id){
		try{
			$titulo = 'Editar produto';
			$produto = User::join(
                'produto_famarcia_unidades',
                'produto_famarcia_unidades.user_id',
                '=',
                'users.id'
            )
                ->select(
                    'produto_famarcia_unidades.id',
                    'produto_famarcia_unidades.COD_BARRA',
                    'produto_famarcia_unidades.produto',
                    'produto_famarcia_unidades.valor_produto',
                    'produto_famarcia_unidades.valor_venda',
                    'produto_famarcia_unidades.QTD_PRODUTO_UNIDADE',
                    'produto_famarcia_unidades.QTD_PRODUTO'
                )
                ->where('users.id', auth()->user()->id)
            ->get()->find($id);
			$categorias = User::join('categorias','categorias.user_id','=','users.id')->where('users.id',auth()->user()->id)->get();
			return view('produtosfamarcia_unidade.edit_produto_famarcia_unidade', compact('titulo', 'produto', 'categorias'));
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}
	}

	
	public function delete($id){
		try{
			ProdutoFamarciaUnidade::find($id)->delete();
			session()->flash('sucesso', 'Produto removido com sucesso!');
			return redirect('/produtosfamarciaUnidade');
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}
	}
}
