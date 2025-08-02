<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saque;

class SaqueController extends Controller
{
    //
    public function create()
    {
        $titulo = "novo saque";
        return view("Saque.create_saque",compact('titulo'));

    }
    public function index()
    {
        return view("deposito.index");
    }

    public function store(Request $request)
    {
        $saque = new Saque();
        $saque->valor = $request->valor;
        $saque->descricao=$request->descricao;
        $saque->user_id = auth()->user()->id;
        $saque->save();

        session()->flash('sucesso', 'Saque salvo com sucesso!');
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
