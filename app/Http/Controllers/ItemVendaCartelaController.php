<?php

namespace App\Http\Controllers;

use App\Models\ItemvendasCartela;
use Illuminate\Http\Request;

class ItemVendaCartelaController extends Controller
{
    //
    public function deleteCartela($id)
    {

        ItemvendasCartela::find($id)->delete();
        session()->flash('sucesso', 'venda devolvida com sucesso!');
        return redirect('/vendas');

    }
}
