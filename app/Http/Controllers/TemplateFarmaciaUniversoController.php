<?php

namespace App\Http\Controllers;
use App\Mail\ProdutoUnidadeEstoque;
use App\Mail\ProdutoCartelaEstoque;
use Mail;
use App\Mail\ProdutoZero;
use App\Models\ItemvendasCartela;
use App\Models\ItemvendasUnidade;
use App\Models\ProdutoFamarcia;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Venda;
use App\Models\ItemVenda;
use App\Models\FaturaVenda;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use SDamian\LaravelManPagination\Pagination;
use Barryvdh\DomPDF\Facade\Pdf;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateFarmaciaUniversoController extends Controller
{
    //

    public function new()
    { //função correta

        try {
            $clientes = User::join('clientes', 'clientes.user_id', '=', 'users.id')->where('users.id', auth()->user()->id)->get();


            $produtos = User::join('produto_famarcia', 'produto_famarcia.user_id', '=', 'users.id')->where('users.id', auth()->user()->id)->get();

            $produtosUnidade = User::join('produto_famarcia_unidades', 'produto_famarcia_unidades.user_id', '=', 'users.id')->where('users.id', auth()->user()->id)->get();

            $produtoCartela = User::join('produto_famarcia_cartela', 'produto_famarcia_cartela.user_id', '=', 'users.id')->where('users.id', auth()->user()->id)->get();

            // if(sizeof($clientes) == 0){
            //     session()->flash('erro', 'Cadastre ao menos um cliente');
            //     return redirect('clientes');
            // }

            // if(sizeof($produtos) == 0){
            //     session()->flash('erro', 'Cadastre ao menos um produto');
            //     return redirect('produtos');
            // }
            $titulo = 'Nova venda';
            return view('dashboard.aprovado.aprovado',["clientes"=>$clientes,"produtos"=>$produtos,"produtosUnidade"=>$produtosUnidade,"produtoCartela"=>$produtoCartela,"titulo"=>$titulo]);



        } catch (\Exception $e) {
            session()->flash('erro', $e->getMessage());
            return redirect()->back();
        }

    }
}
