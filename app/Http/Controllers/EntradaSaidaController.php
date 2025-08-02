<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EntradaSaida;
use App\Models\User;

class EntradaSaidaController extends Controller
{
    //
    public function index(){
        $titulo="Entrada e Saida";
        $EntradaSaida=User::join('Entrada_Saida','Entrada_Saida.user_id','=','users.id')
        ->join('vendas','vendas.id','=','Entrada_Saida.venda_id')
        ->join('fatura_vendas','fatura_vendas.venda_id','=','vendas.id')
        ->where('fatura_vendas.forma_pagamento','=','Dinheiro')
        ->whereDay('Entrada_Saida.created_at', now())
        ->where('users.id',auth()->user()->id)
        ->get();


        $deposito=User::join('deposito','deposito.user_id','=','users.id')
        ->whereDay('deposito.created_at', now())
        ->where('users.id',auth()->user()->id)
        ->get();

        $saque=User::join('saque','saque.user_id','=','users.id')
        ->whereDay('saque.created_at', now())
        ->where('users.id',auth()->user()->id)
        ->get();

        $somarDeposito = $deposito->sum('valor');
        
        $somarSaque = $saque->sum('valor');

        $SomarEntradaSaida = ($EntradaSaida->sum('valortotalvenda') + $somarDeposito) - $somarSaque;



        return view("EntradaSaida.index", compact('titulo',
        'EntradaSaida','deposito','saque', 'somarDeposito', 'SomarEntradaSaida', 'somarSaque'));
    }
}
