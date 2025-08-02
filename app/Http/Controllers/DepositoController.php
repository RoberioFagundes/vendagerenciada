<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deposito;

class DepositoController extends Controller
{
    //
    public function create(){

        $titulo="cadastro de deposito";

        return view ("deposito/create_deposito",compact('titulo'));

    }
    public function index()
    {

    }

    public function store(Request $request)
    {
        $deposito = new Deposito();
        $deposito->valor=$request->valor;
        $deposito->descricao=$request->descricao;
        $deposito->user_id=auth()->user()->id;
        $deposito->save();

        session()->flash('sucesso', 'Deposito salvo com sucesso!');
        return redirect("Caixa");
    

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
