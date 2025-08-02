<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoFamarcia;
use App\Models\Categoria;
use App\Models\User;

class ProdutoController extends Controller
{
    public function index(Request $request){
		$produtos= User::join('produto_famarcia','produto_famarcia.user_id','=','users.id')
		->select('produto_famarcia.id',
			'produto_famarcia.COD_BARRA',
				 'produto_famarcia.produto',
				  'produto_famarcia.valor_venda',
				  'produto_famarcia.valor_produto',
				  'produto_famarcia.QTD_PRODUTO',
				  'produto_famarcia.QTD_PRODUTO_UNIDADE')
		->where('users.id', auth()->user()->id)
		->when($request->has('nome'), function($whenQuery) use ($request){
            $whenQuery->where('COD_BARRA', $request->nome)
			->orWhere('produto','like', '%' . $request->nome . '%');
        })
		->paginate(10);
		$titulo = 'Produtos';
		return view('produtos/list',
		['titulo'=>$titulo,
		'produtos'=>$produtos,
		'nome'=>$request->nome]);
	}

	public function new(){
		$titulo = 'Nono produto';
		$categorias = Categoria::all();
		if(sizeof($categorias) == 0){
			session()->flash('erro', 'Cadastre ao menos uma categoria');
			return redirect('categorias');
		}
		return view('produtos/form', compact('titulo', 'categorias'));
	}

	public function save(Request $request){
		
		$this->_validate($request);
		try{

			$request->merge(['valor' => str_replace(",", ".", $request->valor)]);
			$request->merge(['codigo_barras' => $request->codigo_barras ?? '']);
			Produto::create($request->all());
			session()->flash('sucesso', 'Produto salvo com sucesso!');

		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());

		}
		return redirect('/produtos');
	}

	public function update(Request $request){
	
		$this->_validate($request);
		try{
			$produto = Produto::find($request->id);
			$produto->nome = $request->nome;
			$produto->valor = str_replace(",", ".", $request->valor);
			$produto->categoria_id = $request->categoria_id;
			$produto->cfop_interno = $request->cfop_interno;
			$produto->cfop_externo = $request->cfop_externo;
			$produto->codigo_barras = $request->codigo_barras ?? '';

			$produto->ncm = $request->ncm;
			$produto->unidade_venda = $request->unidade_venda;
			$produto->cst_csosn = $request->cst_csosn;
			$produto->cst_pis = $request->cst_pis;
			$produto->cst_cofins = $request->cst_cofins;
			$produto->cst_ipi = $request->cst_ipi;
			$produto->perc_icms = $request->perc_icms;
			$produto->perc_pis = $request->perc_pis;
			$produto->perc_cofins = $request->perc_cofins;
			$produto->perc_ipi = $request->perc_ipi;

			$produto->validade = $request->validade;
			$produto->qtdProduto = $request->qtdProduto;
			$produto->qtd_unidade = $request->qtd_unidade;

			$produto->save();
			session()->flash('sucesso', 'Produto editado com sucesso!');

		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());

		}
		return redirect('/produtos');
	}

	public function edit($id){
	
		try{
			$titulo = 'Editar produto';
			$produto = User::join('produto_famarcia','produto_famarcia.user_id','=','users.id')->where('users.id', auth()->user()->id)->get()->find($id);
			$categorias = User::join('categorias','categorias.user_id','=','users.id')->get();
			return view('produtofarmacia.edit_prooduto_famarcia', compact('titulo', 'produto', 'categorias'));
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}
	}

	private function _validate(Request $request){
		$rules = [
			'nome' => 'required|max:50',
			'categoria_id' => 'required',
			'valor' => 'required',
			'cfop_interno' => 'required',
			'cfop_externo' => 'required',
			'ncm' => 'required',
			'unidade_venda' => 'required',
			'cst_csosn' => 'required',
			'cst_pis' => 'required',
			'cst_cofins' => 'required',
			'cst_ipi' => 'required',
			'perc_icms' => 'required',
			'perc_pis' => 'required',
			'perc_cofins' => 'required',
			'perc_ipi' => 'required',
		];

		$messages = [
			'nome.required' => 'O campo nome é obrigatório.',
			'nome.max' => '50 caracteres maximos permitidos.',
			'categoria_id.required' => 'O campo categoria é obrigatório.',
			'valor.required' => 'O campo valor é obrigatório.',
			'cfop_interno.required' => 'O campo CFOP interno é obrigatório.',
			'cfop_externo.required' => 'O campo CFOP externo é obrigatório.',
			'codigo_barras.required' => 'O campo Código de barras é obrigatório.',
			'ncm.required' => 'O campo Código de ncm é obrigatório.',
			'unidade_venda.required' => 'O campo unidade de venda é obrigatório.',
			'cst_csosn.required' => 'O campo CST/CSOSN é obrigatório.',
			'cst_pis.required' => 'O campo CST/PIS é obrigatório.',
			'cst_cofins.required' => 'O campo CST/COFINS é obrigatório.',
			'cst_ipi.required' => 'O campo CST/IPI é obrigatório.',
			'perc_icms.required' => 'O campo %CMS é obrigatório.',
			'perc_pis.required' => 'O campo %PIS é obrigatório.',
			'perc_cofins.required' => 'O campo %COFINS é obrigatório.',
			'perc_ipi.required' => 'O campo %IPI é obrigatório.',

		];
		$this->validate($request, $rules, $messages);
	}

	public function delete($id){
		try{
			ProdutoFamarcia::find($id)->delete();
			session()->flash('sucesso', 'Produto removido com sucesso!');
			return redirect('/produtos');
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}
	}
}
