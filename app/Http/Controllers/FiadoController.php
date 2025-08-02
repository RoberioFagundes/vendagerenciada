<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Fiado;
use App\Models\FiadoVenda;
use App\Models\User;

use Illuminate\Http\Request;

class FiadoController extends Controller
{
    //
    public function index_fiado(Request $request)
    {
        $clientefiado = User::join('clientes', 'clientes.user_id', '=', 'users.id')
            ->join('vendas', 'vendas.cliente_id', 'clientes.id')
            ->join('fatura_vendas', 'fatura_vendas.venda_id', '=', 'vendas.id')
            ->join('fiado_venda', 'fiado_venda.idFormaPagamento', '=', 'fatura_vendas.id')
            ->Where('fatura_vendas.forma_pagamento','=','Fiado')
            ->where('users.id',auth()->user()->id)
            ->select(
                'fiado_venda.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'vendas.created_at',
                'vendas.estado',
                'clientes.nomeCliente'
            )->orderBy('venda_id', 'DESC')
            ->when($request->has('nome'), function ($whenQuery) use ($request) {
                $whenQuery->where('nomeCliente', 'like', '%' . $request->nome . '%');
            })
            ->paginate(10);

         

            

        $notaexistente = User::join('clientes', 'clientes.user_id','=','users.id')
        ->join('fiado_venda','fiado_venda.cliente_id','=','clientes.id')
        ->where('users.id',auth()->user()->id)
        ->select(
            'fiado_venda.id',
            'fiado_venda.valor_total as valortotalvenda',
            'clientes.nomeCliente'
        )->orderBy('fiado_venda.id','DESC')
        ->when($request->has('nome'), function ($whenQuery) use ($request) {
            $whenQuery->where('nomeCliente', 'like', '%' . $request->nome . '%');
        })
        ->paginate(10);

        $titulo = "listagem de fiado";

        return view('Fiado.index_fiado', [
            'clientefiado' => $clientefiado,
            'nome' => $request->nome,
            'titulo' => $titulo,
            'notaexistente' => $notaexistente
        ]);
    }


    public function nota_existente_fiado()
    {
        $titulo = "cadastro de nota existente";
        $clientes = User::join('cidades', 'cidades.user_id', '=', 'users.id')
            ->join('clientes', 'clientes.cidade_id', '=', 'cidades.id')->where('users.id', auth()->user()->id)->get();

        return view('Fiado.cadastar_notas', compact('titulo', 'clientes'));
    }

    public function update_fiado_existente(REquest $request){
        $fiado = FiadoVenda::find($request->id);

        $fiado->cliente_id = $request->cliente_id;
        $fiado->valor_pago = $request->descontaNota;
        $fiado->valor_total = $request->valorTotal;
        $fiado->forma_pagamento = $request->formaPagamento;
        $fiado->prazo = $request->prazo;
        $fiado->vencimento = $request->vencimento;

        $fiado->save();

        session()->flash('sucesso', 'Fiado atualizado com sucesso!');
        return redirect('/Fiado/index_fiado')->with('fiado-salvo', 'Fiado atualizado com sucesso');

    }
    public function descontarnota($id)
    {

        $clientefiado = User::join('clientes', 'clientes.user_id', '=', 'users.id')
            ->join('vendas', 'vendas.cliente_id', 'clientes.id')
            ->join('fatura_vendas', 'fatura_vendas.venda_id', '=', 'vendas.id')
            ->join('fiado_venda', 'fiado_venda.idFormaPagamento', '=', 'fatura_vendas.id')
            ->where('users.id', auth()->user()->id)
            ->select(
                'fiado_venda.id',
                'fiado_venda.valor_total',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'vendas.created_at',
                'vendas.estado',
                'clientes.nomeCliente',
                'clientes.id as cliente_id'
            )->get()->find($id);



        $titulo = "Página de abatimento de nota";

        return view('Fiado.descontar_nota', [
            'clientefiado' => $clientefiado,
            'titulo' => $titulo
        ]);


    }

    public function update_fiado(Request $request)
    {

        $valortotal = str_replace(",", ".", $request->valor_total);
        $fiado = FiadoVenda::find($request->id);

        $fiado->cliente_id = $request->cliente_id;
        $fiado->valor_pago = $request->descontaNota;
        $fiado->valor_total = $request->valorTotal;
        $fiado->forma_pagamento = $request->formaPagamento;
        $fiado->prazo = $request->prazo;
        $fiado->vencimento = $request->vencimento;

        $fiado->save();

        session()->flash('sucesso', 'Fiado atualizado com sucesso!');
        return redirect('/Fiado/index_fiado')->with('fiado-salvo', 'Fiado atualizado com sucesso');
    }


    public function edit_fiado_existente($id){

        $notaexistente = User::join('clientes', 'clientes.user_id', '=', 'users.id')
        ->join('fiado_venda', 'fiado_venda.cliente_id','=','clientes.id')
        ->where('users.id', auth()->user()->id)
        ->select('fiado_venda.id',
                'clientes.nomeCliente',
                'fiado_venda.valor_total as valortotalvenda',
                'fiado_venda.vencimento')
        ->get()->find($id);

        $titulo = "notas existente";

        return view('Fiado.nota_existente',['notaexistente'=>$notaexistente,
    'titulo'=>$titulo]);

    }

    public function save(Request $request)
    {

        $fiadoVenda = new FiadoVenda();
        $fiadoVenda->valor_pago = $request->valorTotal;
        $fiadoVenda->cliente_id = $request->cliente_id;
        $fiadoVenda->valor_pago = $request->descontaNota;
        $fiadoVenda->valor_total = $request->valorTotal;
        $fiadoVenda->forma_pagamento = $request->formaPagamento;
        $fiadoVenda->prazo = $request->prazo;
        $fiadoVenda->vencimento = $request->vencimento;
        $fiadoVenda->user_id=auth()->user()->id;
        $fiadoVenda->save();

        session()->flash('sucesso', 'Fiado Cadastrado com sucesso!');
        return redirect('/Fiado/index_fiado')->with('fiado-salvo', 'Fiado atualizado com sucesso');

    }

    public function delete_fiado($id){
        try{
            FiadoVenda::find($id)->delete();
            session()->flash('sucesso', 'Nota removida com sucesso!');
            return redirect('Fiado/index_fiado');
            session()->flash('sucesso', 'Nota apagada com sucesso');
            return redirect('/Fiado')->back();
        }catch(\Exception $e){
            session()->flash('erro', $e->getMessage());
            return redirect()->back();
        }

    }

    public function delete_nota_existente($id){

        try{
            Fiado::find($id)->delete();
            return redirect('Fiado/index_fiado');
            session()->flash('sucesso', 'Nota apagada com sucesso');
            return redirect('/Fiado')->back();
        } catch(\Exception $e){
            session()->flash('erro', $e->getMessage());
            return redirect()->back();
        }



    }
}
