<?php

namespace App\Http\Controllers;

use App\Models\ItemvendasUnidade;
use Illuminate\Http\Request;

class ItemVendaUnidadeController extends Controller
{
    //
    public function deleteUnidade($id)
    {

        ItemvendasUnidade::find($id)->delete();
        session()->flash('sucesso', 'venda devolvida com sucesso!');
        return redirect('/vendas');

    }
}
