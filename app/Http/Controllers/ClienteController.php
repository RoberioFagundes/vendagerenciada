<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Cidade;
use App\Models\User;

class ClienteController extends Controller
{
	public function index(Request $request){
		$clientes = User::join('cidades','cidades.user_id','=','users.id')
		->join('clientes','clientes.cidade_id','=','cidades.id')->where('users.id',auth()->user()->id)
		->select('clientes.id as id',
				 'clientes.nomeCliente',
				 'clientes.cpf_cnpj',
				 'clientes.rua',
				 'clientes.numero',
				 'clientes.bairro',
				 'cidades.nome','cidades.uf')
		->when($request->has('nome'), function ($whenQuery) use ($request) {
				$whenQuery->where('nomeCliente', $request->nome)
					->orWhere('nomeCliente', 'like', '%' . $request->nome . '%');
			})->where('users.id', auth()->user()->id)->paginate(10);
		$titulo = 'Clientes';
		
		return view('clientes/list',['titulo'=>$titulo,
        'clientes'=>$clientes,
        'nome'=>$request->nome]);
	}

	public function new(){
		$titulo = 'Novo cliente';

		$cidades = User::join('cidades','cidades.user_id','=','users.id')->where('users.id',auth()->user()->id)->
		orderBy('nome', 'desc')->get();
		if(sizeof($cidades) == 0){
			session()->flash('erro', 'Cadastre ao menos uma cidade');
			return redirect('cidades');
		}
		return view('clientes/form', compact('titulo', 'cidades'));
	}

	public function save(Request $request){


	
		try{
			
		$cliente = new Cliente();
		$cliente->nomeCliente=$request->nome;
		$cliente->rua=$request->rua;
		$cliente->numero=$request->numero;
		$cliente->bairro=$request->bairro;
		$cliente->complemento=$request->complemento;
		$cliente->contribuinte=$request->contribuinte;
		$cliente->cep=$request->cep;
		$cliente->telefone=$request->telefone;
		$cliente->cpf_cnpj=$request->cpf_cnpj;
		$cliente->ie_rg=$request->ie_rg;
		$cliente->cidade_id=$request->cidade_id;
		$cliente->user_id=auth()->user()->id;
		$cliente->save();

		session()->flash('sucesso', 'Cliente salvo com sucesso!');

		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());

		}
		return redirect('/clientes');
	}

	public function update(Request $request){
		
		try{
			$cidade = Cliente::find($request->id);
			$cidade->nomeCliente = $request->nome;
			$cidade->rua = $request->rua;
			$cidade->numero = $request->numero;
			$cidade->bairro = $request->bairro;
			$cidade->cep = $request->cep;
			$cidade->cidade_id = $request->cidade_id;
			$cidade->cpf_cnpj = $request->cpf_cnpj;
			$cidade->cidade_id = $request->cidade_id;
			$cidade->complemento = $request->complemento ?? '';
			$cidade->contribuinte = $request->contribuinte ? 1 : 0;
			$cidade->save();
			session()->flash('sucesso', 'Cliente editado com sucesso!');

		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());

		}
		return redirect('/clientes');
	}

	public function edit($id){
		try{
			$titulo = 'Editar cliente';
			$cliente = Cliente::find($id);
			$cidades = User::join('cidades','cidades.user_id','=','users.id')->where('users.id',auth()->user()->id)->
		orderBy('nome', 'desc')->get();
			return view('clientes/form', compact('titulo', 'cliente', 'cidades'));
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}
	}

	private function _validate(Request $request){
		$rules = [
			'nome' => 'required|max:50',
			'cpf_cnpj' => 'required',
			'ie_rg' => 'required',
			'cidade_id' => 'required',
			'rua' => 'required|max:80',
			'numero' => 'required|max:10',
			'bairro' => 'required|max:30',
			'cep' => 'required',
			'telefone' => 'required|min:12',
		];

		$messages = [
			'nome.required' => 'O campo nome é obrigatório.',
			'nome.max' => '50 caracteres maximos permitidos.',
			'cpf_cnpj.required' => 'O campo CPF/CNPJ é obrigatório.',
			'ie_rg.required' => 'O campo IE/RG é obrigatório.',
			'cidade_id.required' => 'O campo cidade é obrigatório.',
			'rua.required' => 'O campo rua é obrigatório.',
			'rua.max' => 'Máximo de 80 caracteres.',
			'numero.required' => 'O campo número é obrigatório.',
			'numero.max' => 'Máximo de 10 caracteres.',
			'bairro.required' => 'O campo bairro é obrigatório.',
			'bairro.max' => 'Máximo de 10 caracteres.',
			'cep.required' => 'O campo cep é obrigatório.',
			'telefone.required' => 'O campo telefone/celular é obrigatório.',
			'telefone.max' => 'Minimo de 12 caracteres.',

		];
		$this->validate($request, $rules, $messages);
	}

	public function delete($id){
		try{
			Cliente::find($id)->delete();
			session()->flash('sucesso', 'Cliente removida com sucesso!');
			return redirect('/clientes');
		}catch(\Exception $e){
			session()->flash('erro', $e->getMessage());
			return redirect()->back();
		}
	}
}
