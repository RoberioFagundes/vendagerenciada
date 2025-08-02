<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoFamarcia;
use App\Models\Categoria;
use App\Models\User;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = User::join('produto_famarcia', 'produto_famarcia.user_id', '=', 'users.id')
            ->select(
                'produto_famarcia.id',
                'produto_famarcia.COD_BARRA',
                'produto_famarcia.produto',
                'produto_famarcia.valor_venda',
                'produto_famarcia.valor_produto',
                'produto_famarcia.QTD_PRODUTO',
                'produto_famarcia.QTD_PRODUTO_UNIDADE'
            )
            ->where('users.id', auth()->user()->id)
            ->when($request->has('nome'), function ($whenQuery) use ($request) {
                $whenQuery->where('COD_BARRA', $request->nome)
                    ->orWhere('produto', 'like', '%' . $request->nome . '%');
            })
            ->paginate(10);
        $titulo = 'Produtos';
        return view(
            'estoque.index_estoque',
            [
                'titulo' => $titulo,
                'produtos' => $produtos,
                'nome' => $request->nome
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
