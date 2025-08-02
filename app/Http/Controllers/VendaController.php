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


class VendaController extends Controller
{
    /*$produtos= ProdutoFamarcia::join('users', 'users.id', '=', 'produto_famarcia.user_id')->where('users.id', auth()->user()->id)->get();*/
    public function index(Request $request)
    {
        $search = $request->get('nomeCliente');
        // função correta
        $vendasClienteCaixa = User::Join('cidades', 'cidades.user_id', '=', 'users.id')
            ->Join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
            ->Join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
            ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->where('users.id', auth()->user()->id)
            ->whereDay('item_vendas.created_at', now())
            ->orderBy('created_at', 'desc')
            ->select(
                'item_vendas.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado',
                'clientes.nomeCliente'
            )->whereAnd('clientes.nomeCliente', 'like', "%$search%")
            ->orderBy('venda_id', 'DESC')
            ->paginate(2);
          
         



        // $pagination->paginate($vendasClienteCaixa);
        // dd($vendasClienteCaixa);
        /*
          $vendasClienteCaixa = User::Join('cidades', 'cidades.user_id', '=', 'users.id')
        ->Join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
        ->Join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
        ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
        ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
        ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
        ->select('vendas.valor as valortotalvenda','vendas.id as venda_id','produto_famarcia.produto',
        'item_vendas.quantidade','vendas.created_at','fat.forma_pagamento','vendas.estado','clientes.nomeCliente')
        ->where('users.id',auth()->user()->id)->whereDay('item_vendas.created_at',now())
        ->whereTime('item_vendas.created_at','>','06:00:00')->whereTime('item_vendas.created_at','<=','12:30:00')->paginate(5);
        
        */

        ;

        $usuario_autentificado = auth()->user()->id; // usuario autentificado 
        $VendaCaixaPerimetroManha = User::Join('vendas', 'vendas.user_id', '=', 'users.id')
            ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'item_vendas.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('item_vendas.created_at', now())
            ->select(
                'item_vendas.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->orderBy('venda_id', 'DESC')
            ->paginate(2);





        $VendaCaixaPerimetroManhaPesquisar = Cliente::when($request->has('nomeCliente'), function ($whenQuery) use ($request) {
            $whenQuery->where('nomeCliente', 'like', '%' . $request->nome . '%');
        });

        //perimetro manhã 
        $VendaCaixaPerimetroManhaSemCliente = User::Join('vendas', 'vendas.user_id', '=', 'users.id')
            ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('item_vendas.created_at', now())
            ->select(
                'item_vendas.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->orderBy('venda_id', 'DESC')
            ->paginate(2);
        // perimetro tarde 
        $VendaCaixaPerimetroTarde = User::Join('vendas', 'vendas.user_id', '=', 'users.id')
            ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('item_vendas.created_at', now())
            ->whereTime('item_vendas.created_at', '>', '12:30:00')->whereTime('item_vendas.created_at', '<=', '17:00:00')->paginate(5);
        //perimetro tarde sem cliente 
        // perimetro tarde 
        $VendaCaixaPerimetroTardesemCliente = DB::select("select users.id, users.name, vendas.id as venda_id, vendas.created_at, vendas.valor as valortotal, 
            item_vendas.quantidade, item_vendas.quantidadeUnidade, item_vendas.valor, produto_famarcia.produto, fatura_vendas.forma_pagamento,
            vendas.estado, time(vendas.created_at) 
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id AND
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and TIME(vendas.created_at) > TIME('12:30:01')  and TIME(vendas.created_at) < TIME('17:00:00') "); //consulta para mostrar usuarios horario de vendas

        // perimetro noite 
        $VendaCaixaPerimetroNoite = DB::select("select users.id, users.name, vendas.id as venda_id, vendas.created_at, vendas.valor as valortotal, cidades.nome, cidades.uf, cidades.codigo,
             clientes.nomeCliente,clientes.rua, clientes.bairro, clientes.complemento, clientes.cep, clientes.telefone, clientes.cpf_cnpj, clientes.ie_rg,
             item_vendas.quantidade, item_vendas.quantidadeUnidade, item_vendas.valor, produto_famarcia.produto, fatura_vendas.forma_pagamento,
             vendas.estado, time(vendas.created_at) 
             from vendas,
              item_vendas,
               users,
                cidades,
                 clientes,
                  produto_famarcia,
                  fatura_vendas
             where 
             cidades.user_id=users.id and
             clientes.cidade_id=cidades.id and
             vendas.cliente_id=clientes.id and
             item_vendas.venda_id=vendas.id and
             produto_famarcia.id=item_vendas.produto_id and
              fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and TIME(item_vendas.created_at) > TIME('17:00:01')  and TIME(item_vendas.created_at) < TIME('21:00:00')");



        $VendaCaixaPerimetroNoiteSemCliente = DB::select("select users.id, users.name, vendas.id as venda_id, vendas.created_at, vendas.valor as valortotal, 
            item_vendas.quantidade, item_vendas.quantidadeUnidade, item_vendas.valor, produto_famarcia.produto, fatura_vendas.forma_pagamento,
            vendas.estado, time(vendas.created_at) 
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id AND
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and TIME(item_vendas.created_at) > TIME('17:00:01')  and TIME(item_vendas.created_at) < TIME('24:00:00')");


        $titulo = "Vendas";


        //venda por unidade 
        $VendaUnidadeClientePerimetroManha = User::join('cidades', 'cidades.user_id', '=', 'users.id')
            ->join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
            ->join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
            ->join('itemvendas_unidade', 'itemvendas_unidade.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia_unidades', 'produtofarmaciaUnidade_id', '=', 'produto_famarcia_unidades.id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'itemvendas_unidade.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia_unidades.produto',
                'itemvendas_unidade.quantidadeUnidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado',
                'clientes.nomeCliente'
            )
            ->where('users.id', auth()->user()->id)->whereDay('itemvendas_unidade.created_at', now())
            ->orderBy('venda_id', 'DESC')
            ->paginate(2);

        // dd($VendaUnidadeClientePerimetroManha);




        // dd($VendaUnidadeClientePerimetroManha);

        $VendaUnidadeClientePerimetroTarde = DB::select("select users.id, users.name, vendas.id as venda_id, vendas.created_at, vendas.valor as valortotal, cidades.nome, cidades.uf, cidades.codigo,
       clientes.nomeCliente,clientes.rua, clientes.bairro, clientes.complemento, clientes.cep, clientes.telefone, clientes.cpf_cnpj, clientes.ie_rg,
       itemvendas_unidade.quantidadeUnidade, itemvendas_unidade.valor, produto_famarcia_unidades.produto, fatura_vendas.forma_pagamento,
       vendas.estado, time(vendas.created_at) 
       from vendas,
        itemvendas_unidade,
         users,
          cidades,
           clientes,
            produto_famarcia_unidades,
            fatura_vendas
       where 
       cidades.user_id=users.id and
       clientes.cidade_id=cidades.id and
       vendas.cliente_id=clientes.id and
       itemvendas_unidade.venda_id=vendas.id and
       produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       and TIME(vendas.created_at) > TIME('12:30:01') AND TIME(vendas.created_at) < TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas

        $VendaUnidadeClientePerimetroNoite = DB::select("select users.id, 
            users.name,
            vendas.id as venda_id, 
            vendas.created_at, 
            vendas.valor as valortotal, 
            itemvendas_unidade.quantidadeUnidade,
            itemvendas_unidade.valor,
            produto_famarcia_unidades.produto,
            fatura_vendas.forma_pagamento,
            vendas.estado, time(vendas.created_at) 
            from vendas,
             itemvendas_unidade,
              users,
                 produto_famarcia_unidades,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            itemvendas_unidade.venda_id=vendas.id AND
            produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and TIME(vendas.created_at) > TIME('17:00:00')  and TIME(vendas.created_at) < TIME('24:00:00') "); //consulta para mostrar usuarios horario de vendas

        /************************inicio de venda com unidade sem cliente********************************/
        //venda por unidade 
        $VendaUnidadeSemClientePerimetroManha = User::join('vendas', 'vendas.user_id', '=', 'users.id')
            ->join('itemvendas_unidade', 'itemvendas_unidade.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia_unidades', 'produtofarmaciaUnidade_id', '=', 'produto_famarcia_unidades.id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'itemvendas_unidade.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia_unidades.produto',
                'itemvendas_unidade.quantidadeUnidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('itemvendas_unidade.created_at', now())
            ->orderBy('venda_id', 'DESC')
            ->paginate(2);
        $VendaUnidadeSemClientePerimetroTarde = DB::select("select users.id, users.name, vendas.id as venda_id, vendas.created_at, vendas.valor as valortotal, itemvendas_unidade.quantidadeUnidade, itemvendas_unidade.valor, produto_famarcia_unidades.produto, fatura_vendas.forma_pagamento,
 vendas.estado, time(vendas.created_at) 
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
 and TIME(vendas.created_at) > TIME('12:30:00') AND TIME(vendas.created_at) <= TIME('17:30:00')"); //consulta para mostrar usuarios horario de vendas

        $VendaUnidadeSemClientePerimetroNoite = DB::select("select users.id, users.name, vendas.id as venda_id, vendas.created_at, vendas.valor as valortotal, itemvendas_unidade.quantidadeUnidade, itemvendas_unidade.valor, produto_famarcia_unidades.produto, fatura_vendas.forma_pagamento,
 vendas.estado, time(vendas.created_at) 
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
 and TIME(vendas.created_at) > TIME('17:30:00') AND TIME(vendas.created_at) <= TIME('24:00:00')");


        /************************fim de venda com unidade sem cliente********************************/

        /*******************************************venda com cartela com cliente*************************/
        $VendaCartelaClientePerimetroManha =
            User::join('cidades', 'cidades.user_id', '=', 'users.id')
                ->join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
                ->join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
                ->join('itemvendas_cartela', 'itemvendas_cartela.venda_id', '=', 'vendas.id')
                ->join('produto_famarcia_cartela', 'produto_famarcia_cartela.id', '=', 'itemvendas_cartela.produtofarmaciaCartela_id')
                ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
                ->select(
                    'itemvendas_cartela.id',
                    'vendas.valor as valortotalvenda',
                    'vendas.id as venda_id',
                    'produto_famarcia_cartela.produto',
                    'itemvendas_cartela.quantidadecartela',
                    'vendas.created_at',
                    'fat.forma_pagamento',
                    'vendas.estado',
                    'clientes.nomeCliente'
                )
                ->where('users.id', auth()->user()->id)->whereDay('itemvendas_cartela.created_at', now())
                ->orderBy('venda_id', 'DESC')
                ->paginate(2);




        // dd($VendaUnidadeClientePerimetroManha);

        $VendaCartelaClientePerimetroTarde = DB::select("select users.id, users.name, 
vendas.id as venda_id, 
vendas.created_at,
vendas.valor as valortotal,
cidades.nome, 
cidades.uf, 
cidades.codigo,
clientes.nomeCliente,
clientes.rua, 
clientes.bairro, 
clientes.complemento, clientes.cep, clientes.telefone, clientes.cpf_cnpj, clientes.ie_rg,
       itemvendas_cartela.quantidadecartela, itemvendas_cartela.valor, produto_famarcia_cartela.produto, fatura_vendas.forma_pagamento,
       vendas.estado, time(vendas.created_at) 
       from vendas,
        itemvendas_cartela,
         users,
          cidades,
           clientes,
            produto_famarcia_cartela,
            fatura_vendas
       where 
       cidades.user_id=users.id and
       clientes.cidade_id=cidades.id and
       vendas.cliente_id=clientes.id and
       itemvendas_cartela.venda_id=vendas.id and
       produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       AND TIME(vendas.created_at) > TIME('12:30:00') AND TIME(vendas.created_at) <= TIME('17:30:00')"); //consulta para mostrar usuarios horario de vendas

        $VendaCartelaClientePerimetroNoite = DB::select("select users.id, users.name, 
vendas.id as venda_id, 
vendas.created_at,
vendas.valor as valortotal,
cidades.nome, 
cidades.uf, 
cidades.codigo,
clientes.nomeCliente,
clientes.rua, 
clientes.bairro, 
clientes.complemento, clientes.cep, clientes.telefone, clientes.cpf_cnpj, clientes.ie_rg,
       itemvendas_cartela.quantidadecartela, itemvendas_cartela.valor, produto_famarcia_cartela.produto, fatura_vendas.forma_pagamento,
       vendas.estado, time(vendas.created_at) 
       from vendas,
        itemvendas_cartela,
         users,
          cidades,
           clientes,
            produto_famarcia_cartela,
            fatura_vendas
       where 
       cidades.user_id=users.id and
       clientes.cidade_id=cidades.id and
       vendas.cliente_id=clientes.id and
       itemvendas_cartela.venda_id=vendas.id and
       produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       AND TIME(vendas.created_at) > TIME('17:00:00') AND TIME(vendas.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************************************fim da venda com cartela com cliente*************************/

        /*******************************************inicio da venda com cartela sem cliente*************************/
        $VendaCartelaSemClientePerimetroManha = User::join('vendas', 'vendas.user_id', '=', 'users.id')
            ->join('itemvendas_cartela', 'itemvendas_cartela.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia_cartela', 'produto_famarcia_cartela.id', '=', 'itemvendas_cartela.produtofarmaciaCartela_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia_cartela.produto',
                'itemvendas_cartela.quantidadecartela',
                'itemvendas_cartela.id',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('itemvendas_cartela.created_at', now())
            ->orderBy('venda_id', 'DESC')
            ->paginate(2); //consulta para mostrar usuarios horario de vendas
       

        $VendaCartelaSemClientePerimetroTarde = DB::select("select users.id, users.name, 
vendas.id as venda_id, 
vendas.created_at,
vendas.valor as valortotal,
itemvendas_cartela.quantidadecartela, itemvendas_cartela.valor, produto_famarcia_cartela.produto, fatura_vendas.forma_pagamento,
 vendas.estado, time(vendas.created_at) 
       from vendas,
        itemvendas_cartela,
         users,
            produto_famarcia_cartela,
            fatura_vendas
       where 
       vendas.user_id=users.id and
       vendas.id=itemvendas_cartela.venda_id and
       produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       AND TIME(vendas.created_at) > TIME('12:30:00') AND TIME(vendas.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas

        $VendaCartelaSemClientePerimetroNoite = DB::select("select users.id, users.name, 
vendas.id as venda_id, 
vendas.created_at,
vendas.valor as valortotal,
itemvendas_cartela.quantidadecartela, itemvendas_cartela.valor, produto_famarcia_cartela.produto, fatura_vendas.forma_pagamento,
 vendas.estado, time(vendas.created_at) 
       from vendas,
        itemvendas_cartela,
         users,
            produto_famarcia_cartela,
            fatura_vendas
       where 
       vendas.user_id=users.id and
       vendas.id=itemvendas_cartela.venda_id and
       produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       AND TIME(vendas.created_at) > TIME('17:00:00') AND TIME(vendas.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas


        /*******************************************fim da venda com cartela sem cliente*************************/

        /*******************valor total de venda com caixa com cliente pela manhã********/

        $valortotalCaixaManhaCliente = DB::select("
 select DISTINCT format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                clientes,
                 produto_famarcia,
                 fatura_vendas
            where 
            clientes.user_id=users.id and
            vendas.cliente_id=clientes.id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and 
             DAY(item_vendas.created_at)=DAY(CURRENT_DATE) 
            and TIME(item_vendas.created_at) > TIME('06:00:00') AND TIME(item_vendas.created_at) <= TIME('12:30:00')
"); //consulta para mostrar usuarios horario de vendas


        /*******************fim do valor total de venda com caixa pela manhã********/

        /*******************valor total de venda com cliente caixa pela tarde********/

        $valortotalCaixaTardeCliente = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
               cidades,
                clientes,
                 produto_famarcia,
                 fatura_vendas
            where 
            cidades.user_id=users.id and
            clientes.id=vendas.cliente_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and 
             date(item_vendas.created_at)=CURRENT_DATE 
            and TIME(item_vendas.created_at) > TIME('12:30:00') AND TIME(item_vendas.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas


        //*******************fim do valor total de venda com caixa pela tarde********/

        /*******************valor total de venda com caixa com cliente pela noite********/

        $valortotalCaixaNoiteCliente = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
               cidades,
                clientes,
                 produto_famarcia,
                 fatura_vendas
            where 
            cidades.user_id=users.id and
            clientes.id=vendas.cliente_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and 
             date(item_vendas.created_at)=CURRENT_DATE 
            and TIME(item_vendas.created_at) > TIME('17:00:00') AND TIME(item_vendas.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa pela noite********/

        /*******************valor total de venda com caixa com cliente todos os periodos********/

        $valortotalCaixaTodosPeriodoCliente = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                clientes,
                 produto_famarcia,
                 fatura_vendas
            where 
            clientes.user_id=users.id and
            vendas.cliente_id=clientes.id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DAY(item_vendas.created_at)=DAY(CURRENT_DATE)"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa Mes********/

        $valortotalCaixaTodosPeriodoClienteMes = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             MONTH(item_vendas.created_at)=MONTH(CURRENT_DATE()) 
             "); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa Mes********/

        /*******************fim do valor total de venda com caixa Mes Manha********/

        $valortotalCaixaTodosPeriodoClienteMesManha = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             MONTH(item_vendas.created_at)=MONTH(CURRENT_DATE()) 
             and TIME(item_vendas.created_at) > TIME('06:00:00') AND
              TIME(item_vendas.created_at) <= TIME('12:30:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa Mes Tarde********/

        /*******************inicio do valor total de venda com caixa Mes Tarde********/
        $valortotalCaixaTodosPeriodoClienteMesTarde = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             MONTH(item_vendas.created_at)=MONTH(CURRENT_DATE()) 
             and TIME(item_vendas.created_at) > TIME('12:30:00') AND
              TIME(item_vendas.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa Mes Tarde********/

        /*******************inicio do valor total de venda com caixa Mes Noite********/
        $valortotalCaixaTodosPeriodoClienteMesNoite = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             MONTH(item_vendas.created_at)=MONTH(CURRENT_DATE()) 
             and TIME(item_vendas.created_at) > TIME('17:00:00') AND
              TIME(item_vendas.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa ano Manhã********/

        $valortotalCaixaTodosPeriodoClienteAnoManha = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             YEAR(item_vendas.created_at)=YEAR(CURRENT_DATE()) 
             and TIME(item_vendas.created_at) > TIME('06:00:00') AND
              TIME(item_vendas.created_at) <= TIME('12:30:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa ano tarde********/

        $valortotalCaixaTodosPeriodoClienteAnoTarde = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             YEAR(item_vendas.created_at)=YEAR(CURRENT_DATE()) 
             and TIME(item_vendas.created_at) > TIME('12:30:00') AND
              TIME(item_vendas.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa ano tarde********/

        $valortotalCaixaTodosPeriodoClienteAnoNoite = 
        DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             YEAR(item_vendas.created_at)=YEAR(CURRENT_DATE()) 
             and TIME(item_vendas.created_at) > TIME('17:00:00') AND
              TIME(item_vendas.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa ano noite********/

        $valortotalCaixaTodosPeriodoClienteAno = DB::select("select  format(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id and
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
             and 
             YEAR(item_vendas.created_at)=YEAR(CURRENT_DATE()) 
             "); //consulta para mostrar usuarios horario de vendas

        /*******************fim do valor total de venda com caixa ano noite todos os periodos********/


        /******************vendas com caixa sem cliente Manhã*****************************/
        $valortotalCaixaSemClienteManha = DB::select("select FORMAT(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from
            vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            vendas.user_id=users.id and
            item_vendas.venda_id=vendas.id AND
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DAY(item_vendas.created_at)=DAY(CURRENT_DATE)
            and TIME(item_vendas.created_at) > TIME('06:00:00') AND
              TIME(item_vendas.created_at) <= TIME('12:30:00')"); //consulta para mostrar usuarios horario de vendas


        // dd($valortotalCaixaSemClienteManha);
        /******************vendas com caixa sem cliente*****************************/

        /******************vendas com caixa sem cliente Tarde*****************************/
        $valortotalCaixaSemClienteTarde = DB::select("select FORMAT(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id AND
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DAY(item_vendas.created_at)=DAY(CURRENT_DATE)
            and TIME(item_vendas.created_at) > TIME('12:30:00') AND
              TIME(item_vendas.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas


        /******************vendas com caixa sem cliente*****************************/

        /******************vendas com caixa sem cliente Noite*****************************/
        $valortotalCaixaSemClienteNoite = DB::select("select FORMAT(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id AND
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DAY(item_vendas.created_at)=DAY(CURRENT_DATE)
           and TIME(item_vendas.created_at) > TIME('17:00:00') AND
              TIME(item_vendas.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas


        /******************vendas com caixa sem cliente*****************************/

        /******************vendas com caixa sem cliente Noite*****************************/
        $valortotalCaixaSemClienteTodosPeriodo = DB::select("select FORMAT(SUM(item_vendas.valor * item_vendas.quantidade),2) as valortotal 
            from vendas,
             item_vendas,
              users,
                 produto_famarcia,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
            item_vendas.venda_id=vendas.id AND
            produto_famarcia.id=item_vendas.produto_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DAY(item_vendas.created_at)=DAY(CURRENT_DATE)"); //consulta para mostrar usuarios horario de vendas

        /******************vendas com caixa sem cliente*****************************/

        /********************valor total de vendas com unidades Manhã**********************/
        $ValortotalVendaUnidadeClientePerimetroManha = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* itemvendas_unidade.quantidadeUnidade),2) as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE)
and TIME(itemvendas_unidade.created_at) > TIME('06:00:00') AND TIME(itemvendas_unidade.created_at) <= TIME('12:30:00')"); //consulta para mostrar usuarios horario de vendas 


        /******************** fim valor total de vendas com unidades**********************/

        /********************valor total de vendas com unidades Tarde**********************/
        $ValortotalVendaUnidadeClientePerimetroTarde = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* itemvendas_unidade.quantidadeUnidade),2) as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE)
and TIME(itemvendas_unidade.created_at) > TIME('12:30:00') AND TIME(itemvendas_unidade.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas 


        /******************** fim valor total de vendas com unidades**********************/

        /********************valor total de vendas com unidades Noite**********************/
        $ValortotalVendaUnidadeClientePerimetroNoite = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* itemvendas_unidade.quantidadeUnidade),2) as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE)
and TIME(itemvendas_unidade.created_at) > TIME('17:00:00') AND TIME(itemvendas_unidade.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas 


        /******************** fim valor total de vendas com unidades**********************/

        /********************valor total de vendas com unidades todos os periodos**********************/
        $ValortotalVendaUnidadeClienteTodoPerimetro = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* itemvendas_unidade.quantidadeUnidade),2) as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE)
"); //consulta para mostrar usuarios horario de vendas 


        /******************** fim valor total de vendas com unidades**********************/

        /********************mês com unidade com clientes manhã */
        $valortotalUnidadeTodosPeriodoClienteMesManha = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* 
itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' 
 and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('06:00:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('12:30:00')"); //consulta para mostrar usuarios horario de vendas

        /********************mês com unidade com clientes tarde */
        $valortotalUnidadeTodosPeriodoClienteMesTarde = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* 
itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' 
 and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('12:30:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas

        /********************mês com unidade com clientes noite */
        $valortotalUnidadeTodosPeriodoClienteMesNoite = DB::select("select FORMAT(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2) as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE)
and TIME(itemvendas_unidade.created_at) > TIME('17:00:00') AND TIME(itemvendas_unidade.created_at) <= TIME('24:00:00')");

        /********************mês com unidade com clientes todo periodo */
        $valortotalUnidadeTodosPeriodoClienteMes = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* 
itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' 
 and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE) 
 ");

        /********************Ano com unidade com clientes todo periodo manhã */
        $valortotalUnidadeTodosPeriodoClienteAnoManha = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* 
itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' 
 and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('06:00:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('12:30:00') 
 ");

        /********************Ano com unidade com clientes todo periodo tarde */
        $valortotalUnidadeTodosPeriodoClienteAnoTarde = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* 
itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' 
 and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('12:30:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('17:00:00') 
 ");

        /********************Ano com unidade com clientes todo periodo noite*/
        $valortotalUnidadeTodosPeriodoClienteAnoNoite = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* 
itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' 
 and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('17:00:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('24:00:00') 
 ");

        /********************Ano com unidade com clientes todo periodo*/
        $valortotalUnidadeTodosPeriodoClienteAno = DB::select("select FORMAT(SUM(itemvendas_unidade.valor* 
itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' 
 and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE) 
 ");

        /********************Dia com unidade com venda geral manhã periodo*/
        $valortotalUnidadeSemclientesTodosPeriodoClienteDia = DB::select("select 
 FORMAT(SUM(itemvendas_unidade.valor *  itemvendas_unidade.quantidadeUnidade),2) as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE) 
 ");


        /*********************************inicio de vendas com unidades sem clientes manhã************************************/
        $valortotalVendaUnidadeSemClientePerimetroManhaDia = DB::select("select 
 FORMAT(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2) as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE) and TIME(itemvendas_unidade.created_at) > TIME('06:00:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('12:30:00')");
        /*********************************inicio de vendas com unidades sem clientes tarde************************************/
        $valortotalVendaUnidadeSemClientePerimetroTardeDia = DB::select("select SUM(vendas.valor) 
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE) 
 and TIME(vendas.created_at) > TIME('12:30:00') 
 AND TIME(vendas.created_at) <= TIME('17:00:00')");

        /*********************************inicio de vendas com unidades sem clientes Noite************************************/
        $valortotalVendaUnidadeSemClientePerimetroNoiteDia = DB::select("select 
        FORMAT(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2) 
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('17:00:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('24:00:00')");

        /*********************************inicio de vendas com unidades sem cliente todo periodo************************************/
        $valortotalVendaUnidadeSemClientePerimetroTodoPeriodo = DB::select("select SUM(vendas.valor) 
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE)");

        /*********************************inicio de vendas com unidades sem clientes Manhã Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroManhaMes = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2) 
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE) 
 and TIME(vendas.created_at) > TIME('06:00:00') 
 AND TIME(vendas.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com unidades sem clientes tarde Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroTardeMes = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2)
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE) 
 and TIME(vendas.created_at) > TIME('12:30:00') 
 AND TIME(vendas.created_at) <= TIME('17:00:00')");

        /*********************************inicio de vendas com unidades sem clientes noite Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroNoiteMes = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2)
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE) 
 and TIME(vendas.created_at) > TIME('17:00:00') 
 AND TIME(vendas.created_at) <= TIME('24:00:00')");

        /*********************************inicio de vendas com unidades sem clientes Manhã Ano************************************/
        $valortotalVendaUnidadeSemClientePerimetroManhaAno = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2)  
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE) 
 and TIME(vendas.created_at) > TIME('06:00:00') 
 AND TIME(vendas.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com unidades sem clientes Tarde Ano************************************/
        $valortotalVendaUnidadeSemClientePerimetroTardeAno = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2)  
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE) 
 and TIME(vendas.created_at) > TIME('12:30:00') 
 AND TIME(vendas.created_at) <= TIME('17:00:00')");

        /*********************************inicio de vendas com unidades sem clientes Noite Ano************************************/
        $valortotalVendaUnidadeSemClientePerimetroNoiteAno = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2)  
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE) 
 and TIME(vendas.created_at) > TIME('17:00:00') 
 AND TIME(vendas.created_at) <= TIME('24:00:00')");

        /*********************************inicio de vendas com unidades sem clientes todo periodo Ano************************************/
        $valortotalVendaUnidadeSemClientePerimetroTodoPeriodoAno = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2)  
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE)");

        /*********************************inicio de vendas com unidades sem clientes todo periodo Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroTodoPeriodoMes = DB::select("select format(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2) 
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE)");



        /*********************************fim de vendas com unidades sem clientes manhã************************************/

        /*********************************inicio de vendas com unidades sem clientes tarde************************************/
        $valortotalVendaUnidadeSemClientePerimetroTarde = DB::select("select SUM(vendas.valor) as valortotal
from vendas,
 itemvendas_unidade,
  users,
     produto_famarcia_unidades,
     fatura_vendas
where 
vendas.user_id=users.id AND
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
and TIME(vendas.created_at) > TIME('12:30:00') AND TIME(vendas.created_at) <= TIME('17:00:00')");


        /*********************************fim de vendas com unidades sem clientes manhã************************************/

        /*********************************inicio de vendas com unidades sem clientes Noite************************************/
        $valortotalVendaUnidadeSemClientePerimetroNoite = DB::select("select FORMAT(SUM(itemvendas_unidade.valor*itemvendas_unidade.quantidadeUnidade),2)
 as valortotal
from vendas,
 itemvendas_unidade,
  users,
   cidades,
    clientes,
     produto_famarcia_unidades,
     fatura_vendas
where 
cidades.user_id=users.id and
clientes.cidade_id=cidades.id and
vendas.cliente_id=clientes.id and
itemvendas_unidade.venda_id=vendas.id and
produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
 fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
 and YEAR(itemvendas_unidade.created_at)=YEAR(CURRENT_DATE()) and TIME(itemvendas_unidade.created_at) > TIME('17:00:00') AND
              TIME(itemvendas_unidade.created_at) < TIME('24:00:00')");


        /*********************************fim de vendas com unidades sem clientes manhã************************************/

        /*********************************inicio de vendas com cartela com clientes Manha Ano************************************/
        $valortotalVendaUnidadeSemClientePerimetroManhaDay = DB::select("select 
        FORMAT(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2) 
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('06:00:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com unidade com clientes Manha Ano************************************/
        $valortotalVendaUnidadeSemClientePerimetroTardeDayUnidade = DB::select("select 
        FORMAT(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2) 
as valortotal
 from vendas,
  itemvendas_unidade,
   users,
      produto_famarcia_unidades,
      fatura_vendas
 where 
vendas.user_id=users.id AND
 itemvendas_unidade.venda_id=vendas.id and
 produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
  fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
  and DAY(itemvendas_unidade.created_at)=DAY(CURRENT_DATE) 
 and TIME(itemvendas_unidade.created_at) > TIME('12:30:00') 
 AND TIME(itemvendas_unidade.created_at) <= TIME('17:00:00')
");
        // dd($valortotalVendaUnidadeSemClientePerimetroTardeDay);
//  dd($valortotalVendaUnidadeSemClientePerimetroTardeDay);

        /**************************inicio vendas com cartela pela manhã************/
        $ValorTotalVendaCartelaClientePerimetroManha = DB::select("select 
SUM(vendas.valor) as valortotal
       from vendas,
        itemvendas_cartela,
         users,
          cidades,
           clientes,
            produto_famarcia_cartela,
            fatura_vendas
       where 
       cidades.user_id=users.id and
       clientes.cidade_id=cidades.id and
       vendas.cliente_id=clientes.id and
       itemvendas_cartela.venda_id=vendas.id and
       produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       AND TIME(vendas.created_at) > TIME('06:00:00') AND TIME(vendas.created_at) <= TIME('12:30:00')");


        /*********************************inicio de vendas com cartela com clientes tarde Dia************************************/
        $valortotalVendaUnidadeSemClientePerimetroTardeDay = DB::select("select 
        FORMAT(SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade),2)
  as valortotal
   from vendas,
    itemvendas_unidade,
     users,
        produto_famarcia_unidades,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_unidade.venda_id=vendas.id and
   produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and MONTH(itemvendas_unidade.created_at)=MONTH(CURRENT_DATE) 
   and TIME(itemvendas_unidade.created_at) > TIME('12:30:00') 
   AND TIME(itemvendas_unidade.created_at) <= TIME('17:00:00')");

        /*********************************inicio de vendas com cartela com clientes tarde Dia************************************/
        $valortotalVendaUnidadeSemClientePerimetroNoiteDay = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
  as valortotal
   from vendas,
    itemvendas_cartela,
     users,
        produto_famarcia_cartela,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_cartela.venda_id=vendas.id and
   produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) 
   and TIME(itemvendas_cartela.created_at) > TIME('17:00:00') 
   AND TIME(itemvendas_cartela.created_at) <= TIME('24:00:00')");

        $valortotalVendaUnidadeSemClientePerimetroTodoPeriodoDay = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
   as valortotal
    from vendas,
     itemvendas_cartela,
      users,
         produto_famarcia_cartela,
         fatura_vendas
    where 
   vendas.user_id=users.id AND
    itemvendas_cartela.venda_id=vendas.id and
    produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
     fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
     and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE)");

        /*********************************inicio de vendas com cartela com clientes Manhã Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroManhaMONTH = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
  as valortotal
   from vendas,
    itemvendas_cartela,
     users,
        produto_famarcia_cartela,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_cartela.venda_id=vendas.id and
   produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE) 
   and TIME(itemvendas_cartela.created_at) > TIME('06:00:00') 
   AND TIME(itemvendas_cartela.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com cartela com clientes Tarde Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroTardeMONTH = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
  as valortotal
   from vendas,
    itemvendas_cartela,
     users,
        produto_famarcia_cartela,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_cartela.venda_id=vendas.id and
   produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE) 
   and TIME(itemvendas_cartela.created_at) > TIME('12:30:00') 
   AND TIME(itemvendas_cartela.created_at) <= TIME('17:00:00')");

        /*********************************inicio de vendas com cartela com clientes Noite Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroNoiteMONTH = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
  as valortotal
   from vendas,
    itemvendas_cartela,
     users,
        produto_famarcia_cartela,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_cartela.venda_id=vendas.id and
   produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE) 
   and TIME(itemvendas_cartela.created_at) > TIME('17:00:00') 
   AND TIME(itemvendas_cartela.created_at) <= TIME('24:00:00')");

        /*********************************inicio de vendas com cartela com clientes todo perido Mês************************************/
        $valortotalVendaUnidadeSemClientePerimetroTodoPeriodoMONTH = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
  as valortotal
   from vendas,
    itemvendas_cartela,
     users,
        produto_famarcia_cartela,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_cartela.venda_id=vendas.id and
   produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE)");

        /*********************************inicio de vendas com cartela com clientes Manhã Mês************************************/
        $valortotalVendaCartelaSemClientePerimetroManhaYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
  as valortotal
   from vendas,
    itemvendas_cartela,
     users,
        produto_famarcia_cartela,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_cartela.venda_id=vendas.id and
   produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE) 
   and TIME(itemvendas_cartela.created_at) > TIME('06:00:00') 
   AND TIME(itemvendas_cartela.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com cartela com clientes Tarde Mês************************************/
        $valortotalVendaCartelaSemClientePerimetroTardeYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
  as valortotal
   from vendas,
    itemvendas_cartela,
     users,
        produto_famarcia_cartela,
        fatura_vendas
   where 
  vendas.user_id=users.id AND
   itemvendas_cartela.venda_id=vendas.id and
   produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
    fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
    and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE) 
   and TIME(itemvendas_cartela.created_at) > TIME('12:30:00') 
   AND TIME(itemvendas_cartela.created_at) <= TIME('17:00:00')");
        /**************************inicio vendas com cartela pela noite************/

        /*********************************inicio de vendas com cartela com clientes Tarde Mês************************************/
        $valortotalVendaCartelaSemClientePerimetroNoiteYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
    as valortotal
     from vendas,
      itemvendas_cartela,
       users,
          produto_famarcia_cartela,
          fatura_vendas
     where 
    vendas.user_id=users.id AND
     itemvendas_cartela.venda_id=vendas.id and
     produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
      fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
      and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE) 
     and TIME(itemvendas_cartela.created_at) > TIME('17:00:00') 
     AND TIME(itemvendas_cartela.created_at) <= TIME('24:00:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo ************************************/
        $valortotalVendaCartelaSemClientePerimetroTodoPeriodoYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
    as valortotal
     from vendas,
      itemvendas_cartela,
       users,
          produto_famarcia_cartela,
          fatura_vendas
     where 
    vendas.user_id=users.id AND
     itemvendas_cartela.venda_id=vendas.id and
     produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
      fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
      and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE)");

        /*********************************inicio de vendas com cartela com clientes todo periodo Manhã ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPeriodoDay = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) as valortotal
from 
        cidades,
        clientes,
        vendas,
        itemvendas_cartela,
        users,
            produto_famarcia_cartela,
            fatura_vendas
        where 
        cidades.user_id=users.id AND
        clientes.cidade_id=cidades.id AND
        itemvendas_cartela.venda_id=vendas.id and
        vendas.cliente_id=clientes.id and
        vendas.user_id=users.id AND
        itemvendas_cartela.venda_id=vendas.id and
        produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
        and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) 
        and TIME(itemvendas_cartela.created_at) > TIME('06:00:00') 
        AND TIME(itemvendas_cartela.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo Manhã ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioTardedoDay = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) as valortotal
from 
        cidades,
        clientes,
        vendas,
        itemvendas_cartela,
        users,
            produto_famarcia_cartela,
            fatura_vendas
        where 
        cidades.user_id=users.id AND
        clientes.cidade_id=cidades.id AND
        itemvendas_cartela.venda_id=vendas.id and
        vendas.cliente_id=clientes.id and
        vendas.user_id=users.id AND
        itemvendas_cartela.venda_id=vendas.id and
        produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
        and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) 
        and TIME(itemvendas_cartela.created_at) > TIME('12:30:00') 
        AND TIME(itemvendas_cartela.created_at) <= TIME('17:00:00')");


        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoDay = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id AND
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) and TIME(itemvendas_cartela.created_at) > TIME('17:00:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('24:00:00')");


        /*********************************inicio de vendas com cartela com clientes todo periodo ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioDay = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id AND
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) ");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioManhadoMonth = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('06:00:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioTardedoMonth = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('12:30:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('17:00:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoMonth = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('17:00:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('24:00:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPeriodoMonth = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and MONTH(itemvendas_cartela.created_at)=MONTH(CURRENT_DATE)  
                  ");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioManhadoYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('06:00:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('12:30:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioTardedoYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('12:30:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('17:00:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('17:00:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('24:00:00')");

        /*********************************inicio de vendas com cartela com clientes todo periodo noite ************************************/
        $valortotalVendaCartelaComClientePerimetroTodoPeriodoYEAR = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
            as valortotal
            from 
            cidades,
            clientes,
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            cidades.user_id=users.id AND
            clientes.cidade_id=cidades.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id and
            vendas.cliente_id=clientes.id and
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and YEAR(itemvendas_cartela.created_at)=YEAR(CURRENT_DATE) 
                       ");

        /***********************inicio vendas com cartela com cliente */
        $valortotalVendaCartelaSemClientePerimetroManhaDay = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) 
        as valortotal
        from vendas,
        itemvendas_cartela,
        users,
            produto_famarcia_cartela,
            fatura_vendas
        where 
        vendas.user_id=users.id AND
        itemvendas_cartela.venda_id=vendas.id and
        produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
        and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) 
        and TIME(itemvendas_cartela.created_at) > TIME('06:00:00') 
        AND TIME(itemvendas_cartela.created_at) <= TIME('12:30:00')");
        /**************************inicio vendas com cartela pela noite************/
        $ValorTotalVendaCartelaClientePerimetroManha = DB::select("select 
  SUM(vendas.valor) as valortotal
         from vendas,
          itemvendas_cartela,
           users,
            cidades,
             clientes,
              produto_famarcia_cartela,
              fatura_vendas
         where 
         cidades.user_id=users.id and
         clientes.cidade_id=cidades.id and
         vendas.cliente_id=clientes.id and
         itemvendas_cartela.venda_id=vendas.id and
         produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
          fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
         AND TIME(vendas.created_at) > TIME('06:00:00') AND TIME(vendas.created_at) <= TIME('12:30:00')");


        /**************************fim vendas com cartela pela manhã************/

        /**************************inicio vendas com cartela pela tarde************/
        $ValortotalVendaCartelaClientePerimetroTarde = DB::select("select 
SUM(vendas.valor) as valortotal
       from vendas,
        itemvendas_cartela,
         users,
          cidades,
           clientes,
            produto_famarcia_cartela,
            fatura_vendas
       where 
       cidades.user_id=users.id and
       clientes.cidade_id=cidades.id and
       vendas.cliente_id=clientes.id and
       itemvendas_cartela.venda_id=vendas.id and
       produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       AND TIME(vendas.created_at) > TIME('12:30:00') AND TIME(vendas.created_at) <= TIME('17:00:00')");



        /**************************fim vendas com cartela pela tarde************/

        /**************************inicio vendas com cartela pela Noite************/
        $ValortotalVendaCartelaClientePerimetroNoite = DB::select("select 
SUM(vendas.valor) as valortotal
       from vendas,
        itemvendas_cartela,
         users,
          cidades,
           clientes,
            produto_famarcia_cartela,
            fatura_vendas
       where 
       cidades.user_id=users.id and
       clientes.cidade_id=cidades.id and
       vendas.cliente_id=clientes.id and
       itemvendas_cartela.venda_id=vendas.id and
       produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
       AND TIME(vendas.created_at) > TIME('12:30:00') AND TIME(vendas.created_at) <= TIME('17:00:00')");



        /**************************fim vendas com cartela pela Noite************/



        /****************************************inicio da venda com cartela sem cliente Manhã*************************************/
        $ValortotalVendaCartelaSemClientePerimetroManha = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) AS valortotal
            from 
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id AND
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('06:00:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('12:30:00')"); //consulta para mostrar usuarios horario de vendas
        // dd($ValortotalVendaCartelaSemClientePerimetroManha);
        /****************************************fim da venda com cartela sem cliente Manhã*************************************/

        /****************************************inicio da venda com cartela sem cliente tarde*************************************/
        $ValortotalVendaCartelaSemClientePerimetroTarde = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) AS valortotal
            from 
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id AND
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('12:30:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas


        /****************************************fim da venda com cartela sem cliente tarde*************************************/

        /****************************************inicio da venda com cartela sem cliente Noite*************************************/
        $ValortotalVendaCartelaSemClientePerimetroNoite = DB::select("select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) AS valortotal
            from 
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id AND
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) 
            and TIME(itemvendas_cartela.created_at) > TIME('17:00:00') 
            AND TIME(itemvendas_cartela.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas


        /****************************************fim da venda com cartela sem cliente Noite*************************************/

        /****************************************inicio da venda com cartela sem cliente para todos periodo do dia no dia *************************************/
        $ValortotalVendaCartelaSemClienteTodosPerimetroDia = DB::select("
        select FORMAT(SUM(itemvendas_cartela.valor * itemvendas_cartela.quantidadecartela),2) AS valortotal
            from 
            vendas,
            itemvendas_cartela,
            users,
                produto_famarcia_cartela,
                fatura_vendas
            where 
            itemvendas_cartela.venda_id=vendas.id and
            vendas.user_id=users.id AND
            itemvendas_cartela.venda_id=vendas.id AND
            produto_famarcia_cartela.id=itemvendas_cartela.produtofarmaciaCartela_id and
            fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'
            and DAY(itemvendas_cartela.created_at)=DAY(CURRENT_DATE) "); //consulta para mostrar usuarios horario de vendas


        /****************************************fim da venda com cartela sem cliente para todos periodo do dia no dia*************************************/


        /****************************************inicio da venda com Caixa sem cliente para todos periodo do dia no dia *************************************/
        $ValortotalVendaUnidadeSemClienteTodosPerimetroDia = DB::select("
       SELECT SUM(vendas.valor) as valortotal FROM vendas,
        itemvendas_unidade,
         users,
            produto_famarcia_unidades,
            fatura_vendas WHERE
            vendas.user_id=users.id and
       vendas.id=itemvendas_unidade.venda_id and
       produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DATE(vendas.created_at)=CURRENT_DATE"); //consulta para mostrar usuarios horario de vendas


        /****************************************fim da venda com unidade sem cliente para todos periodo do dia no dia*************************************/

        /****************************************inicio da venda com Unidade para todos periodo do dia no dia *************************************/
        $ValortotalVendaUnidadeSemClienteTodosPerimetroMes = DB::select("
       SELECT SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade) as valortotal FROM vendas,
        itemvendas_unidade,
         users,
            produto_famarcia_unidades,
            fatura_vendas WHERE
            vendas.user_id=users.id and
       vendas.id=itemvendas_unidade.venda_id and
       produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DATE(vendas.created_at)=CURRENT_DATE"); //consulta para mostrar usuarios horario de vendas


        /****************************************fim da venda com unidade para todos periodo do dia no dia*************************************/



        /****************************************inicio da venda com Unidade com clientes e sem clientes para periodo manhã *************************************/
        $ValortotalVendaUnidadePerimetroManha = DB::select("
       SELECT SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade) as valortotal FROM vendas,
        itemvendas_unidade,
         users,
            produto_famarcia_unidades,
            fatura_vendas WHERE
            vendas.user_id=users.id and
       vendas.id=itemvendas_unidade.venda_id and
       produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DATE(vendas.created_at)=CURRENT_DATE 
        AND TIME(itemvendas_unidade.created_at) > TIME('06:00:00') AND TIME(itemvendas_unidade.created_at) <= TIME('12:30:00')"); //consulta para mostrar usuarios horario de vendas


        /****************************************fim da venda com cartela com clientes e sem clientes para periodo manhã*************************************/

        /****************************************inicio da venda com unidade tarde com cliente e sem cliente *************************************/
        $ValortotalVendaUnidadePerimetroTarde = DB::select("
       SELECT SUM(itemvendas_unidade.valor * itemvendas_unidade.quantidadeUnidade) as valortotal FROM vendas,
        itemvendas_unidade,
         users,
            produto_famarcia_unidades,
            fatura_vendas WHERE
            vendas.user_id=users.id and
       vendas.id=itemvendas_unidade.venda_id and
       produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DATE(vendas.created_at)=CURRENT_DATE 
        AND TIME(itemvendas_unidade.created_at) > TIME('12:30:00') AND TIME(itemvendas_unidade.created_at) <= TIME('17:00:00')"); //consulta para mostrar usuarios horario de vendas

        /****************************************fim da venda com unidade tarde com cliente e sem cliente*************************************/


        /****************************************inicio da venda com com unidade  para periodo noite *************************************/
        $ValortotalVendaUnidadePerimetroTarde = DB::select("
       SELECT SUM(itemvendas_unidade.valor*itemvendas_unidade.quantidadeUnidade) as valortotal FROM vendas,
        itemvendas_unidade,
         users,
            produto_famarcia_unidades,
            fatura_vendas WHERE
            vendas.user_id=users.id and
       vendas.id=itemvendas_unidade.venda_id and
       produto_famarcia_unidades.id=itemvendas_unidade.produtofarmaciaUnidade_id and
        fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado' AND DATE(vendas.created_at)=CURRENT_DATE 
        AND TIME(itemvendas_unidade.created_at) > TIME('17:00:00') AND TIME(itemvendas_unidade.created_at) <= TIME('24:00:00')"); //consulta para mostrar usuarios horario de vendas

        /****************************************fim da venda com unidade  para periodo noite*************************************/

        /**************************************soma caixa+cartela+unidade dia Manhã*************************************/
        foreach($valortotalCaixaSemClienteManha as $valortotalcaixamanha){
            $Valortotalcaixamanha = $valortotalcaixamanha->valortotal;
        }

        foreach($valortotalVendaUnidadeSemClientePerimetroManhaDia as $valortotalunidademanha){
            $valortotalunidademanha = $valortotalunidademanha->valortotal;
        }

        foreach($ValortotalVendaCartelaSemClientePerimetroManha as $valortotalcartela){

            $valortotalcartelaManha = $valortotalcartela->valortotal;

        }

        $valorcaixamanha = str_replace(",",".",$Valortotalcaixamanha);
        $valorUnidadeManha = str_replace(",",".",$valortotalunidademanha);
        $valorcartela = str_replace(",","",$valortotalcartelaManha);
        $valortotalUnidadeManha = floatval($valorUnidadeManha);
        $somarCaixaCartelaUnidade =floatval($valorcaixamanha)+ floatval($valorUnidadeManha) + floatval($valorcartela); 

        

      
        foreach ($valortotalCaixaSemClienteTodosPeriodo as $ValortotalCaixaSemClienteManha) {
            $valortotalCaixaDiaSemClienteManhaClienteDias = $ValortotalCaixaSemClienteManha->valortotal;//caixa
        }
   
        $valorcaixadia=str_replace(",",".",$valortotalCaixaDiaSemClienteManhaClienteDias);

        foreach ($valortotalUnidadeSemclientesTodosPeriodoClienteDia as $ValortotalVendaUnidadeSemClientePerimetroManhaDia) {
            $ValortotalVendaUnidadeSemClientePerimetroManhaDias = $ValortotalVendaUnidadeSemClientePerimetroManhaDia->valortotal;
        }

       

        $valortotalunidade = str_replace(",",".",$ValortotalVendaUnidadeSemClientePerimetroManhaDias);
        foreach ($valortotalVendaCartelaSemClientePerimetroManhaDay as $ValortotalVendaCartelaSemClientePerimetroManhaDay) {
            $ValortotalVendaCartelaSemClientePerimetroManhaDias = $ValortotalVendaCartelaSemClientePerimetroManhaDay->valortotal;
        }
        $valortotalcartela = str_replace(",",".", $ValortotalVendaCartelaSemClientePerimetroManhaDias);

        $valortotalcartela1 = str_replace(".", ".", $valortotalcartela);
        
        //para saber o tipo da variavel gettype
        $DayCaixaManha = floatval($valorcaixadia);
        // dd($valortotalVendaCartelaSemClientePerimetroManhaDay);
        $DayUnidadeManha = floatval($valortotalunidade);
        $DayCartelaManha = floatval($valortotalcartela1);

   
 
        $somarCaixaUnidadeCartelaDay = $DayCaixaManha + $DayUnidadeManha + $DayCartelaManha;

       

        /**************************************Fim soma caixa+cartela+unidade dia Manhã*************************************/





        /**************************************inicio soma caixa+cartela+unidade dia Tarde*************************************/
        foreach ($valortotalCaixaSemClienteTarde as $ValortotalCaixaSemClienteTarde) {
            $ValortotalCaixaSemClienteTardeDia = floatval($ValortotalCaixaSemClienteTarde->valortotal);
        }

        foreach ($ValortotalVendaUnidadeClientePerimetroTarde as $valortotalVendaUnidadeClientePerimetroTarde) {
            $ValortotalVendaUnidadeClientePerimetroTardeDia = floatval($valortotalVendaUnidadeClientePerimetroTarde->valortotal);
        }

        foreach ($ValortotalVendaCartelaSemClientePerimetroTarde as $valortotalVendaCartelaSemClientePerimetroTardeCartela) {
            $valortotalVendaCartelaSemClientePerimetroTardeCartela = floatval($valortotalVendaCartelaSemClientePerimetroTardeCartela->valortotal);
        }

        $daytardeCaixa = floatval($ValortotalCaixaSemClienteTardeDia);
        $daytardeUnidade = floatval($ValortotalVendaUnidadeClientePerimetroTardeDia);
        $daytardeCartela = floatval($valortotalVendaCartelaSemClientePerimetroTardeCartela);
        $somarCaixaComUnidadeComCartelaDayTarde = $daytardeCaixa + $daytardeUnidade + $daytardeCartela;

        /**************************************inicio soma caixa+cartela+unidade dia Noite*************************************/
        foreach ($valortotalCaixaSemClienteNoite as $ValortotalCaixaSemClienteNoite) {
            $valortotalCaixaNoiteSemClienteDia = floatval($ValortotalCaixaSemClienteNoite->valortotal);
        }

        foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteDia as $ValortotalVendaUnidadeSemClientePerimetroNoiteDia) {
            $valortotalVendaUnidadeSemClientePerimetroNoiteDay = $ValortotalVendaUnidadeSemClientePerimetroNoiteDia->valortotal;
        }

        foreach ($ValortotalVendaCartelaSemClientePerimetroNoite as $valortotalVendaCartelaSemClientePerimetroNoiteCartela) {
            $ValortotalVendaCartelaSemClientePerimetroNoiteDayCartela = $valortotalVendaCartelaSemClientePerimetroNoiteCartela->valortotal;
        }

        $dayCaixaNoiteDia = floatval($valortotalCaixaNoiteSemClienteDia);
        $dayUnidadeNoiteNoiteDia = floatval($valortotalVendaUnidadeSemClientePerimetroNoiteDay);
        $dayCartelaNoiteDia = floatval($ValortotalVendaCartelaSemClientePerimetroNoiteDayCartela);
        $somarCaixaComUnidadeComCartelaDayNoite = $dayCaixaNoiteDia + $dayUnidadeNoiteNoiteDia + $dayCartelaNoiteDia;


        /****************************fim soma caixa+cartela+unidade dia Noite*************************************/
        /**************************************inicio soma caixa+cartela+unidade todo periodo*************************************/

        $dayTodoPeriodo = $somarCaixaUnidadeCartelaDay +
            $somarCaixaComUnidadeComCartelaDayTarde +
            $somarCaixaComUnidadeComCartelaDayNoite;
        /**************************************fim soma caixa+cartela+unidade todo periodo*************************************/

        /**************************************inicio soma caixa+cartela+unidade periodo manha mês*************************************/
        foreach ($valortotalCaixaTodosPeriodoClienteMesManha as $ValortotalCaixaTodosPeriodoClienteMesManhaMonth) {

            $monthmanhaCaixa = $ValortotalCaixaTodosPeriodoClienteMesManhaMonth->valortotal;
        }
        $MonthManhaCaixaMes = (double) filter_var($monthmanhaCaixa, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);



        foreach ($valortotalVendaUnidadeSemClientePerimetroManhaMes as $ValortotalVendaUnidadeSemClientePerimetroManhaMesMonth) {

            $monthmanhaUnidade = $ValortotalVendaUnidadeSemClientePerimetroManhaMesMonth->valortotal;
        }


        $MonthManhaUnidade = (double) filter_var($monthmanhaUnidade, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);



        foreach ($valortotalVendaUnidadeSemClientePerimetroManhaMONTH as $ValortotalVendaUnidadeSemClientePerimetroManhaMONTHMes) {
            $MonthManhaCartela = $ValortotalVendaUnidadeSemClientePerimetroManhaMONTHMes->valortotal;
        }

        $MonthManhaCartela = (double) filter_var($MonthManhaCartela, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);



        $somarCaixaComUnidadeComCartelaMonthManha = $MonthManhaCaixaMes + $MonthManhaUnidade + $MonthManhaCartela;

        /**************************************fim soma caixa+cartela+unidade periodo manha mês*************************************/

        /**************************************inicio soma caixa+cartela+unidade periodo tarde mês*************************************/
        foreach ($valortotalCaixaTodosPeriodoClienteMesTarde as $ValortotalCaixaTodosPeriodoClienteMesTardeCaixa) {
            $MesCaixaTarde = $ValortotalCaixaTodosPeriodoClienteMesTardeCaixa->valortotal;
        }

        $mesCaixaTarde = (double) filter_var($MesCaixaTarde, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        foreach ($valortotalVendaUnidadeSemClientePerimetroTardeMes as $ValortotalVendaUnidadeSemClientePerimetroTardeMes) {

            $MesUnidadeTarde = $ValortotalVendaUnidadeSemClientePerimetroTardeMes->valortotal;

        }

        $mesUnidadeTarde = (double) filter_var($MesUnidadeTarde, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        foreach ($valortotalVendaUnidadeSemClientePerimetroTardeMONTH as $ValortotalVendaUnidadeSemClientePerimetroTardeMONTH) {
            $MesCartelaTarde = $ValortotalVendaUnidadeSemClientePerimetroTardeMONTH->valortotal;
        }

        $mesCartelaTarde = (double) filter_var($MesCartelaTarde, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $CaixaComUnidadeComCartelaMonthTarde = $mesCaixaTarde + $mesUnidadeTarde + $mesCartelaTarde;
        /**************************************fim soma caixa+cartela+unidade periodo tarde mês*************************************/

        /**************************************inicio soma caixa+cartela+unidade periodo noite mês*************************************/
        foreach ($valortotalCaixaTodosPeriodoClienteMesNoite as $ValortotalCaixaTodosPeriodoClienteMesNoite) {
            $NoiteCaixa = $ValortotalCaixaTodosPeriodoClienteMesNoite->valortotal;
        }

        $NoiteCaixaMes = (double) filter_var($NoiteCaixa, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteMes as $ValortotalVendaUnidadeSemClientePerimetroNoiteMes) {
            $noiteUnidade = $ValortotalVendaUnidadeSemClientePerimetroNoiteMes->valortotal;
        }

        $NoiteUnidadeMes = (double) filter_var($noiteUnidade, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteMONTH as $ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoMonth) {
            $noiteCartela = $ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoMonth->valortotal;
        }

        $NoiteCartelaMes = (double) filter_var($noiteCartela, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


        $somarCaixaComUnidadecomCartelaNoite = $NoiteCaixaMes + $NoiteUnidadeMes + $NoiteCartelaMes;



        $somarCaixaComUnidadeComCartelaDayTodoPeriodo = $somarCaixaComUnidadeComCartelaMonthManha +
            $CaixaComUnidadeComCartelaMonthTarde +
            $somarCaixaComUnidadecomCartelaNoite;
        /**************************************fim soma caixa+cartela+unidade periodo noite mês*************************************/

        /**************************************inicio com soma caixa+cartela+unidade periodo manha ano*************************************/
        foreach ($valortotalCaixaTodosPeriodoClienteAnoManha as $ValortotalCaixaTodosPeriodoClienteAnoManha) {
            $noiteCaixaAnoManha = $ValortotalCaixaTodosPeriodoClienteAnoManha->valortotal;
        }

        $NoiteCaixaManhaAno = (double) filter_var($noiteCaixaAnoManha, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


        foreach ($valortotalVendaUnidadeSemClientePerimetroManhaAno as $ValortotalVendaUnidadeSemClientePerimetroManhaAno) {
            $noiteUnidadeAno = $ValortotalVendaUnidadeSemClientePerimetroManhaAno->valortotal;
        }

        $NoiteUnidadeAnoManha = (double) filter_var($noiteUnidadeAno, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);



        foreach ($valortotalVendaCartelaSemClientePerimetroManhaYEAR as $ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoYEAR) {
            $noiteCartelaAno = $ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoYEAR->valortotal;
        }

        $noiteCartelaYear = (double) filter_var($noiteCartelaAno, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


        $somarCaixaComUnidadeComCartelaYEARManha = $NoiteCaixaManhaAno + $NoiteUnidadeAnoManha + $noiteCartelaYear;
        /**************************************fim com soma caixa+cartela+unidade periodo manha ano*************************************/

        /**************************************inicio com soma caixa+cartela+unidade periodo tarde ano*************************************/
        foreach ($valortotalCaixaTodosPeriodoClienteAnoTarde as $ValortotalCaixaTodosPeriodoClienteAnoTarde) {
            $AnoCaixaTarde = $ValortotalCaixaTodosPeriodoClienteAnoTarde->valortotal;
        }

        $YearCaixaTarde = (double) filter_var($AnoCaixaTarde, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


        foreach ($valortotalVendaUnidadeSemClientePerimetroTardeAno as $ValortotalVendaUnidadeSemClientePerimetroNoiteAno) {

            $AnoUnidadeTarde = $ValortotalVendaUnidadeSemClientePerimetroNoiteAno->valortotal;
        }

        $YearUNIDADETarde = (double) filter_var($AnoUnidadeTarde, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


        foreach ($valortotalVendaCartelaSemClientePerimetroTardeYEAR as $ValortotalVendaCartelaSemClientePerimetroTardeYEAR) {
            $AnoCartelaTarde = $ValortotalVendaCartelaSemClientePerimetroTardeYEAR->valortotal;
        }

        $YearCartelaTarde = (double) filter_var($AnoCartelaTarde, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $somarCaixaComUnidadeComCartelaYearTarde = $YearCaixaTarde + $YearUNIDADETarde + $YearCartelaTarde;
        /**************************************fim com soma caixa+cartela+unidade periodo tarde ano*************************************/

        /**************************************inicio com soma caixa+cartela+unidade periodo noite ano*************************************/
        foreach ($valortotalCaixaTodosPeriodoClienteAnoNoite as $ValortotalCaixaTodosPeriodoClienteAnoNoite) {
            $caixaNoiteCaixaYear = $ValortotalCaixaTodosPeriodoClienteAnoNoite->valortotal;
        }

        $caixaCaixaNoiteANo = (double) filter_var($caixaNoiteCaixaYear, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteAno as $ValortotalVendaUnidadeSemClientePerimetroNoiteAno) {
            $UNidadenoite = $ValortotalVendaUnidadeSemClientePerimetroNoiteAno->valortotal;
        }

        $UNidadeNoite = (double) filter_var($UNidadenoite, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        foreach ($valortotalVendaCartelaSemClientePerimetroNoiteYEAR as $ValortotalVendaCartelaSemClientePerimetroNoiteYEAR) {
            $CartelaAnoNoite = $ValortotalVendaCartelaSemClientePerimetroNoiteYEAR->valortotal;
        }


        $CartelaNoite = (double) filter_var($CartelaAnoNoite, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $somarCaixaComUnidadeComCartelaYearNoite = $caixaCaixaNoiteANo + $UNidadeNoite + $CartelaNoite;
        /**************************************fim com soma caixa+cartela+unidade periodo noite ano*************************************/

        /**************************************inicio com soma caixa+cartela+unidade todo periodo*************************************/
        $total_produtos = User::join('vendas','vendas.user_id','=','users.id')
        ->where('users.id',auth()->user()->id)
        ->get('vendas.valor');
        

        $TodoPeriodoAnoYearCaixaComUnidadeComCartela = $total_produtos->sum('valor');






        $somarCaixaComUnidadeComCartelaYEARManha + $somarCaixaComUnidadeComCartelaYearTarde + $somarCaixaComUnidadeComCartelaYearNoite;

        // dd($CartelaNoite);
        /**************************************fim soma caixa+cartela+unidade dia Tarde*************************************/
        // dd($somarCaixaUnidadeCartelaDay);

        // dd($DiaCaixaManha+$DiaUnidadeManha);
        // Recuperar os registros do banco dados
        //  $pesquisar = Conta::when($request->has('nome'), function ($whenQuery) use ($request){
        //     $whenQuery->where('nome', 'like', '%' . $request->nome . '%');
        // })
        // ->when($request->filled('data_inicio'), function ($whenQuery) use ($request){
        //     $whenQuery->where('vencimento', '>=', \Carbon\Carbon::parse($request->data_inicio)->format('Y-m-d'));
        // })
        // ->when($request->filled('data_fim'), function ($whenQuery) use ($request){
        //     $whenQuery->where('vencimento', '<=', \Carbon\Carbon::parse($request->data_fim)->format('Y-m-d'));
        // })
        // ->orderByDesc('created_at')
        // ->paginate(10)
        // ->withQueryString();

        $searchCaixaCliente = Cliente::when($request->has('nome'), function ($whenQuery) use ($request) {
            $whenQuery->where('nome', 'like', '%' . $request->nome . '%');
        })
            ->orderByDesc('created_at')
            ->paginate(10)
            ->withQueryString();

        return view('vendas/list', compact(
            'titulo',
            'vendasClienteCaixa',
            'valortotalCaixaManhaCliente',
            'VendaCaixaPerimetroManha',
            'VendaCaixaPerimetroManhaSemCliente',
            'VendaCaixaPerimetroTarde',
            'VendaCaixaPerimetroTardesemCliente',
            'VendaCaixaPerimetroNoite',
            'VendaCaixaPerimetroNoiteSemCliente',
            'VendaUnidadeClientePerimetroManha',
            'VendaUnidadeClientePerimetroTarde',
            'VendaUnidadeClientePerimetroNoite',
            'VendaUnidadeSemClientePerimetroManha',
            'VendaUnidadeSemClientePerimetroTarde',
            'VendaUnidadeSemClientePerimetroNoite',
            'VendaCartelaClientePerimetroManha',
            'VendaCartelaClientePerimetroTarde',
            'VendaCartelaClientePerimetroNoite',
            'VendaCartelaSemClientePerimetroManha',
            'VendaCartelaSemClientePerimetroTarde',
            'VendaCartelaSemClientePerimetroNoite',
            'valortotalCaixaManhaCliente',
            'somarCaixaCartelaUnidade',



            'valortotalCaixaTardeCliente',
            'valortotalCaixaNoiteCliente',
            'valortotalCaixaTodosPeriodoCliente',
            'valortotalCaixaTodosPeriodoClienteMes',
            'valortotalCaixaTodosPeriodoClienteMesManha',
            'valortotalCaixaTodosPeriodoClienteMesTarde',
            'valortotalCaixaTodosPeriodoClienteMesNoite',

            'valortotalCaixaTodosPeriodoClienteAnoManha',
            'valortotalCaixaTodosPeriodoClienteAnoTarde',
            'valortotalCaixaTodosPeriodoClienteAnoNoite',
            'valortotalCaixaTodosPeriodoClienteAno',


            'valortotalCaixaSemClienteManha',
            'valortotalCaixaSemClienteTarde',
            'valortotalCaixaSemClienteNoite',
            'valortotalCaixaSemClienteTodosPeriodo',

            'ValortotalVendaUnidadeClientePerimetroManha',
            'ValortotalVendaUnidadeClientePerimetroTarde',
            'ValortotalVendaUnidadeClientePerimetroNoite',
            'ValortotalVendaUnidadeClienteTodoPerimetro',
            'valortotalUnidadeTodosPeriodoClienteMesManha',
            'valortotalUnidadeTodosPeriodoClienteMesTarde',
            'valortotalUnidadeTodosPeriodoClienteMesNoite',
            'valortotalUnidadeTodosPeriodoClienteMes',

            'valortotalUnidadeSemclientesTodosPeriodoClienteDia',

            'valortotalUnidadeTodosPeriodoClienteAnoManha',
            'valortotalUnidadeTodosPeriodoClienteAnoTarde',
            'valortotalUnidadeTodosPeriodoClienteAnoNoite',

            'valortotalVendaUnidadeSemClientePerimetroManhaDia',
            'valortotalVendaUnidadeSemClientePerimetroTardeDia',
            'valortotalVendaUnidadeSemClientePerimetroNoiteDia',
            'valortotalVendaUnidadeSemClientePerimetroTodoPeriodo',
            'valortotalVendaUnidadeSemClientePerimetroManhaMes',
            'valortotalVendaUnidadeSemClientePerimetroTardeMes',
            'valortotalVendaUnidadeSemClientePerimetroNoiteMes',
            'valortotalVendaUnidadeSemClientePerimetroTodoPeriodoMes',
            'valortotalVendaUnidadeSemClientePerimetroManhaAno',
            'valortotalVendaUnidadeSemClientePerimetroTardeAno',
            'valortotalVendaUnidadeSemClientePerimetroNoiteAno',
            'valortotalVendaUnidadeSemClientePerimetroTodoPeriodoAno',

            'valortotalVendaUnidadeSemClientePerimetroManhaDay',
            'valortotalVendaUnidadeSemClientePerimetroTardeDayUnidade',
            'valortotalVendaUnidadeSemClientePerimetroNoiteDay',
            'valortotalVendaUnidadeSemClientePerimetroTodoPeriodoDay',
            'valortotalVendaUnidadeSemClientePerimetroManhaMONTH',
            'valortotalVendaUnidadeSemClientePerimetroTardeMONTH',
            'valortotalVendaUnidadeSemClientePerimetroNoiteMONTH',
            'valortotalVendaUnidadeSemClientePerimetroTodoPeriodoMONTH',
            'valortotalVendaCartelaSemClientePerimetroManhaYEAR',
            'valortotalVendaCartelaSemClientePerimetroTardeYEAR',
            'valortotalVendaCartelaSemClientePerimetroNoiteYEAR',
            'valortotalVendaCartelaSemClientePerimetroTodoPeriodoYEAR',

            'valortotalVendaCartelaComClientePerimetroTodoPeriodoDay',
            'valortotalVendaCartelaComClientePerimetroTodoPerioTardedoDay',
            'valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoDay',
            'valortotalVendaCartelaComClientePerimetroTodoPerioDay',
            'valortotalVendaCartelaComClientePerimetroTodoPerioManhadoMonth',
            'valortotalVendaCartelaComClientePerimetroTodoPerioTardedoMonth',
            'valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoMonth',
            'valortotalVendaCartelaComClientePerimetroTodoPeriodoMonth',

            'valortotalVendaCartelaComClientePerimetroTodoPerioManhadoYEAR',
            'valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoYEAR',
            'valortotalVendaCartelaComClientePerimetroTodoPerioTardedoYEAR',
            'valortotalVendaCartelaComClientePerimetroTodoPeriodoYEAR',




            'valortotalVendaUnidadeSemClientePerimetroTarde',
            'valortotalVendaUnidadeSemClientePerimetroNoite',
            'valortotalUnidadeTodosPeriodoClienteAno',

            'ValorTotalVendaCartelaClientePerimetroManha',
            'ValortotalVendaCartelaClientePerimetroTarde',
            'ValortotalVendaCartelaClientePerimetroNoite',

            'ValortotalVendaCartelaSemClientePerimetroManha',
            'ValortotalVendaCartelaSemClientePerimetroTarde',
            'ValortotalVendaCartelaSemClientePerimetroNoite',
            'ValortotalVendaCartelaSemClienteTodosPerimetroDia',

            'ValortotalVendaUnidadeSemClienteTodosPerimetroDia',
            'ValortotalVendaUnidadePerimetroManha',
            'ValortotalVendaUnidadePerimetroTarde',
            'somarCaixaUnidadeCartelaDay',
            'somarCaixaComUnidadeComCartelaDayTarde',
            'somarCaixaComUnidadeComCartelaDayNoite',
            'dayTodoPeriodo',
            'somarCaixaComUnidadeComCartelaMonthManha',
            'CaixaComUnidadeComCartelaMonthTarde',
            'somarCaixaComUnidadecomCartelaNoite',
            'somarCaixaComUnidadeComCartelaDayTodoPeriodo',
            'somarCaixaComUnidadeComCartelaYEARManha',
            'somarCaixaComUnidadeComCartelaYearTarde',
            'somarCaixaComUnidadeComCartelaYearNoite',
            'TodoPeriodoAnoYearCaixaComUnidadeComCartela',
            'searchCaixaCliente'



        ));
    }

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
            return view('vendas/form', ["clientes"=>$clientes,"produtos"=>$produtos,"produtosUnidade"=>$produtosUnidade,"produtoCartela"=>$produtoCartela,"titulo"=>$titulo]);



        } catch (\Exception $e) {
            session()->flash('erro', $e->getMessage());
            return redirect()->back();
        }

    }

    public function save(Request $request)
    { //função correta


        try {

            $venda = $request->venda;


            // var_dump($venda);
            // vai receber o que vem do array venda que está no arquivo vendagerenciada.js 
            $result = Venda::create([
                'valor' => $venda['total'],
                'cliente_id' => $venda['cliente_id'],
                'chave' => '',
                'numero_nfe' => 0,
                'estado' => 'Novo',
                'user_id' => $venda['user_id']

            ]);
            if (isset($venda['itens'])) {
                foreach ($venda['itens'] as $i) {

                    $itemvenda = new ItemVenda();
                    $itemvenda->venda_id = $result->id;
                    $itemvenda->produto_id = $i['id'];
                    $itemvenda->quantidade = $i['quantidade'];
                    $itemvenda->valor = str_replace(",", ".", $i['valor']);
                    $itemvenda->user_id = auth()->user()->id;
                    $itemvenda->save();


                    $usuario_autentificado=auth()->user()->id;
                    $produtoCaixaZero =DB::select("select * from produto_famarcia, users 
                    WHERE produto_famarcia.USER_ID=users.id AND 
                    users.id='$usuario_autentificado' and
        produto_famarcia.QTD_PRODUTO=0");
                  
    
                    // Ship the order...
                      
                    if($produtoCaixaZero==TRUE){

                        $destinatario = auth()->user()->email; // e-mail do usuario logado 
            
                        Mail::to($destinatario)->send(new ProdutoZero($produtoCaixaZero));
                    }

                    $produtoUnidade=DB::select("select * from produto_famarcia_unidades, users
                     WHERE users.id=produto_famarcia_unidades.USER_ID AND 
                    users.id='$usuario_autentificado' AND
                    produto_famarcia_unidades.QTD_PRODUTO_UNIDADE=0");

                    if ($produtoUnidade==TRUE) {
                        $destinatario=auth()->user()->email; //e-mail do usuario logado

                        Mail::to($destinatario)->send(new ProdutoUnidadeEstoque($produtoUnidade));
                    }

                    $produtoCartela=DB::select("select * from produto_famarcia_cartela, users WHERE
                    users.id=produto_famarcia_cartela.USER_ID AND
                    users.id='$usuario_autentificado' AND
                    produto_famarcia_cartela.QTD_PRODUTO_CARTELA=0");

                    if ($produtoCartela==TRUE) {
                        $destinatario=auth()->user()->email; //e-mail do usuario logado

                        Mail::to($destinatario)->send(new ProdutoCartelaEstoque($produtoCartela));
                    }
    
                }
            }

            if (isset($venda['itens_unidade'])) {
                foreach ($venda['itens_unidade'] as $i) {
                    ItemvendasUnidade::create([
                        'venda_id' => $result->id,
                        'produtofarmaciaUnidade_id' => $i['id'],
                        'quantidadeUnidade' => $i['quantidadeUnidade'],
                        'valor' => str_replace(",", ".", $i['valor']),
                        'user_id' => $venda['user_id']

                    ]);
                }
                
            }
            if (isset($venda['item_cartela'])) {

                foreach ($venda['item_cartela'] as $i) {

                    ItemvendasCartela::create([
                        'venda_id' => $result->id,
                        'produtofarmaciaCartela_id' => $i['id'],
                        'quantidadecartela' => $i['quantidadeCartela'],
                        'valor' => str_replace(",", ".", $i['valorCartela']),
                        'user_id' => $venda['user_id']

                    ]);
                }
            }
            foreach ($venda['fatura'] as $f) {
                 
                $user_id=auth()->user()->id;

              

                if ($f['forma_pagamento'] == 01) {

                    $dinheiro = "Dinheiro";

                    FaturaVenda::create([

                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $dinheiro,
                        'user_id' => auth()->user()->id 
                    ]);
                }

                if ($f['forma_pagamento'] == 02) {
                    $cheque = "Cheque";

                    FaturaVenda::create([

                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $cheque,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 03) {
                    $cartaoCredito = "Cartão de Crédito";

                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $cartaoCredito,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 04) {
                    $cartaoDebito = "Cartão de Débito";

                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $cartaoDebito,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 05) {
                    $cartaoLoja = "Crédito Loja";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $cartaoLoja,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 10) {
                    $valeAlimentacao = "Vale Alimentação";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $valeAlimentacao,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 11) {
                    $valeRefeicao = "Vale Refeição";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $valeRefeicao,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 12) {
                    $valePresente = "Vale Presente";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $valePresente,
                        'user_id' => $venda['user_id']
                    ]);

                }

                if ($f['forma_pagamento'] == 13) {
                    $valeCombustivel = "Vale Combustível";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $valeCombustivel,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 14) {
                    $DuplicataMercantil = "Duplicata Mercantil";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $DuplicataMercantil,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 15) {
                    $BoletoBancário = "Boleto Bancário";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $BoletoBancário,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 16) {
                    $DepositoBancario = "Depósito Bancário";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $DepositoBancario,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 17) {
                    $PagamentoInstantâneoPIX = "Pagamento Instantâneo (PIX)";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $PagamentoInstantâneoPIX,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 90) {
                    $Fiado = "Fiado";

                   

                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $Fiado,
                        'user_id' => $venda['user_id']
                    ]);
                }

                if ($f['forma_pagamento'] == 99) {
                    $Outros = "Outros";


                    FaturaVenda::create([
                        'valor' => $venda['total'],
                        'venda_id' => $result->id,
                        'vencimento' => \Carbon\Carbon::parse(str_replace("/", "-", $f['data']))
                            ->format('Y-m-d'),
                        'forma_pagamento' => $Outros,
                        'user_id' => $venda['user_id']
                    ]);
                }


            }
            return response()->json($venda, 200);

        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }

    public function show($id)
    {
        try {
            $vendacartela1 = User::Join('cidades', 'cidades.user_id', '=', 'users.id')
                ->Join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
                ->Join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
                ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
                ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
                ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
                ->where('users.id', auth()->user()->id)
                ->whereDay('item_vendas.created_at', now())
                ->orderBy('created_at', 'desc')
                ->select(
                    'item_vendas.id',
                    'vendas.valor as valortotalvenda',
                    'vendas.id as venda_id',
                    'produto_famarcia.produto',
                    'item_vendas.quantidade',
                    'vendas.created_at',
                    'fat.forma_pagamento',
                    'vendas.estado',
                    'clientes.nomeCliente'
                )->orderBy('venda_id', 'DESC')->get();
            // dd($vendacartela1);

            $vendaCartela = $vendacartela1->find($id);
            $titulo = 'Visualizando venda';
            return view('vendas/show', compact('titulo', 'vendaCartela', 'vendacartela1'));
        } catch (\Exception $e) {
            session()->flash('erro', $e->getMessage());
            return redirect()->back();
        }
    }

    public function delete($id)
    {

        ItemVenda::find($id)->delete();
        session()->flash('sucesso', 'venda devolvida com sucesso!');
        return redirect('/vendas');

    }

    public function deleteCartela($id)
    {

        Venda::find($id)->delete();
        session()->flash('sucesso', 'venda devolvida com sucesso!');
        return redirect('/vendas');

    }

    public function deleteUnidade($id)
    {

        ItemVenda::find($id)->delete();
        session()->flash('sucesso', 'venda devolvida com sucesso!');
        return redirect('/vendas');

    }

    public function pesquisarCaixaCliente(Request $request)
    {

        $searchClienteCaixa = Input::get('searchCaixaCliente');

        if ($searchClienteCaixa) {
            $cliente = User::Join('cidades', 'cidades.user_id', '=', 'users.id')
                ->Join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
                ->Join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
                ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
                ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
                ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
                ->where('users.id', auth()->user()->id)
                ->whereDay('item_vendas.created_at', now())
                ->whereAnd([
                    ['nomeCliente', 'like', '%' . $searchClienteCaixa . '%']
                ])
                ->orderBy('created_at', 'desc')->paginate(2);
        } else {
            User::Join('cidades', 'cidades.user_id', '=', 'users.id')
                ->Join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
                ->Join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
                ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
                ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
                ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
                ->where('users.id', auth()->user()->id)
                ->whereDay('item_vendas.created_at', now())
                ->orderBy('created_at', 'desc')
                ->select(
                    'vendas.valor as valortotalvenda',
                    'vendas.id as venda_id',
                    'produto_famarcia.produto',
                    'item_vendas.quantidade',
                    'vendas.created_at',
                    'fat.forma_pagamento',
                    'vendas.estado',
                    'clientes.nomeCliente'
                )->orderBy('venda_id', 'DESC')
                ->paginate(2);
        }

        return view('vendas/list', compact('searchClienteCaixa', 'cliente'));

    }

    public function pesquisarCaixaSemCliente(Request $request)
    {

    }

    public function pesquisarUnidadeCliente(Request $request)
    {

    }

    public function pesquisarUnidadeSemCliente(Request $request)
    {

    }

    public function pesquisarCartelaCliente(Request $request)
    {

    }
    public function pesquisarCartelaSemCliente(Request $request)
    {

    }

    // Gerar PDF
    public function gerarPdf(Request $request)
    {
        $VendaCartelaClientePerimetroManha =
            User::join('cidades', 'cidades.user_id', '=', 'users.id')
                ->join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
                ->join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
                ->join('itemvendas_cartela', 'itemvendas_cartela.venda_id', '=', 'vendas.id')
                ->join('produto_famarcia_cartela', 'produto_famarcia_cartela.id', '=', 'itemvendas_cartela.produtofarmaciaCartela_id')
                ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
                ->select(
                    'itemvendas_cartela.id',
                    'vendas.valor as valortotalvenda',
                    'vendas.id as venda_id',
                    'produto_famarcia_cartela.produto',
                    'itemvendas_cartela.quantidadecartela',
                    'vendas.created_at',
                    'fat.forma_pagamento',
                    'vendas.estado',
                    'clientes.nomeCliente'
                )
                ->where('users.id', auth()->user()->id)
                ->whereDay('itemvendas_cartela.created_at', now())
                ->orderBy('venda_id', 'DESC')
                ->get();

        $VendaCartelaSemClientePerimetroManha = User::join('vendas', 'vendas.user_id', '=', 'users.id')
            ->join('itemvendas_cartela', 'itemvendas_cartela.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia_cartela', 'produto_famarcia_cartela.id', '=', 'itemvendas_cartela.produtofarmaciaCartela_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia_cartela.produto',
                'itemvendas_cartela.quantidadecartela',
                'itemvendas_cartela.id',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('itemvendas_cartela.created_at', now())
            ->orderBy('venda_id', 'DESC')
            ->get();

        // Recuperar os registros do banco dados
        $vendasClienteCaixa = User::Join('cidades', 'cidades.user_id', '=', 'users.id')
            ->Join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
            ->Join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
            ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->where('users.id', auth()->user()->id)
            ->whereDay('item_vendas.created_at', now())
            ->orderBy('created_at', 'desc')
            ->select(
                'item_vendas.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado',
                'clientes.nomeCliente'
            )->orderBy('venda_id', 'DESC')->get();

        // Venda com caixa sem clientes 
        $VendaCaixaPerimetroManhaSemCliente = User::Join('vendas', 'vendas.user_id', '=', 'users.id')
            ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('item_vendas.created_at', now())
            ->select(
                'item_vendas.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia.produto',
                'item_vendas.quantidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->orderBy('venda_id', 'DESC')
            ->get();

        //venda por unidade 
        $VendaUnidadeClientePerimetroManha = User::join('cidades', 'cidades.user_id', '=', 'users.id')
            ->join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
            ->join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
            ->join('itemvendas_unidade', 'itemvendas_unidade.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia_unidades', 'produtofarmaciaUnidade_id', '=', 'produto_famarcia_unidades.id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia_unidades.produto',
                'itemvendas_unidade.quantidadeUnidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado',
                'clientes.nomeCliente'
            )
            ->where('users.id', auth()->user()->id)->whereDay('itemvendas_unidade.created_at', now())
            ->orderBy('venda_id', 'DESC')
            ->get();

        $VendaUnidadeSemClientePerimetroManha = User::join('vendas', 'vendas.user_id', '=', 'users.id')
            ->join('itemvendas_unidade', 'itemvendas_unidade.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia_unidades', 'produtofarmaciaUnidade_id', '=', 'produto_famarcia_unidades.id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->select(
                'itemvendas_unidade.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia_unidades.produto',
                'itemvendas_unidade.quantidadeUnidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado'
            )
            ->where('users.id', auth()->user()->id)->whereDay('itemvendas_unidade.created_at', now())
            ->orderBy('venda_id', 'DESC')
            ->get();
        $titulo = "pdf";

        $usuario_autentificado = auth()->user()->id;
        $totalvenda = DB::select("select users.id, users.name, vendas.id as venda_id, vendas.created_at, vendas.valor, 
             fatura_vendas.forma_pagamento,
            vendas.estado, time(vendas.created_at) 
            from vendas,
              users,
                 fatura_vendas
            where 
            users.id=vendas.user_id and
             fatura_vendas.venda_id=vendas.id and users.id='$usuario_autentificado'");
        // Carregar a string com o HTML/conteúdo e determinar a orientação e o tamanho do arquivo
        $pdf = PDF::loadView('vendas.gerar-pdf', [
            'vendasClienteCaixa'
            => $vendasClienteCaixa,
            'VendaCaixaPerimetroManhaSemCliente'
            =>$VendaCaixaPerimetroManhaSemCliente,
            'titulo'
            => $titulo,
            'VendaUnidadeSemClientePerimetroManha' => $VendaUnidadeSemClientePerimetroManha,
            'VendaUnidadeClientePerimetroManha' => $VendaUnidadeClientePerimetroManha,
            'VendaCartelaClientePerimetroManha'=>$VendaCartelaClientePerimetroManha,
            'VendaCartelaSemClientePerimetroManha'=>$VendaCartelaSemClientePerimetroManha,
            'totalvenda' => $totalvenda
        ])->setPaper('a4', 'portrait')->setOptions(['defaultFont' => 'sans-serif']);
        ;

        // Fazer o download do arquivo
        return $pdf->download('vendas_realizadas.pdf');

    }

    public function showpdf($id){

        $relatorioCliente=User::Join('cidades', 'cidades.user_id', '=', 'users.id')
        ->Join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
        ->Join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
        ->Join('item_vendas', 'item_vendas.venda_id', '=', 'vendas.id')
        ->join('produto_famarcia', 'produto_famarcia.id', 'item_vendas.produto_id')
        ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
        ->where('users.id', auth()->user()->id)
        ->select(
            'item_vendas.id',
            'vendas.valor as valortotalvenda',
            'vendas.id as venda_id',
            'produto_famarcia.produto',
            'item_vendas.quantidade',
            'vendas.created_at',
            'fat.forma_pagamento',
            'vendas.estado',
            'clientes.nomeCliente'
        )->get()->find($id);
        // dd($relatorioCliente);
         $titulo="relatorio de venda de cliente";

        // Carregar a string com o HTML/conteúdo e determinar a orientação e o tamanho do arquivo
        $pdf = PDF::loadView('vendas.gerar-cliente-caixa-pdf', [
            'relatorioCliente'
            => $relatorioCliente,
            'titulo'
            => $titulo,
        ])->setPaper('a4', 'portrait')->setOptions(['defaultFont' => 'sans-serif']);
        ;

        // Fazer o download do arquivo
        return $pdf->download('vendas_realizadas.pdf');

    }

    
    public function showpdf_unidade($id){
        $titulo="relatorio de venda por unidade cliente";
        $VendaUnidadeClientePerimetroManha = User::join('cidades', 'cidades.user_id', '=', 'users.id')
            ->join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
            ->join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
            ->join('itemvendas_unidade', 'itemvendas_unidade.venda_id', '=', 'vendas.id')
            ->join('produto_famarcia_unidades', 'produtofarmaciaUnidade_id', '=', 'produto_famarcia_unidades.id')
            ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
            ->where('users.id', auth()->user()->id)
            ->select(
                'itemvendas_unidade.id',
                'vendas.valor as valortotalvenda',
                'vendas.id as venda_id',
                'produto_famarcia_unidades.produto',
                'itemvendas_unidade.quantidadeUnidade',
                'vendas.created_at',
                'fat.forma_pagamento',
                'vendas.estado',
                'clientes.nomeCliente'
            )->get()
            ->find($id);

            $pdf = PDF::loadView('vendas.gerar-cliente-unidade-pdf', [
                'VendaUnidadeClientePerimetroManha' =>$VendaUnidadeClientePerimetroManha,
                'titulo'=>$titulo
            ])->setOptions(['defaultFont' => 'sans-serif']);

            return $pdf->download('vendas realizadas com unidade.pdf');


    }

    public function showpdf_cartela($id){
        $VendaCartelaClientePerimetroManha =
            User::join('cidades', 'cidades.user_id', '=', 'users.id')
                ->join('clientes', 'clientes.cidade_id', '=', 'cidades.id')
                ->join('vendas', 'vendas.cliente_id', '=', 'clientes.id')
                ->join('itemvendas_cartela', 'itemvendas_cartela.venda_id', '=', 'vendas.id')
                ->join('produto_famarcia_cartela', 'produto_famarcia_cartela.id', '=', 'itemvendas_cartela.produtofarmaciaCartela_id')
                ->join('fatura_vendas as fat', 'fat.venda_id', '=', 'vendas.id')
                ->where('users.id', auth()->user()->id)->whereDay('itemvendas_cartela.created_at', now())
                ->select(
                    'itemvendas_cartela.id',
                    'vendas.valor as valortotalvenda',
                    'vendas.id as venda_id',
                    'produto_famarcia_cartela.produto',
                    'itemvendas_cartela.quantidadecartela',
                    'vendas.created_at',
                    'fat.forma_pagamento',
                    'vendas.estado',
                    'clientes.nomeCliente'
                )->get()->find($id);

                $titulo = "relatorio de venda com cartela";

                $pdf= PDF::loadView('vendas.gerar-cliente-cartela-pdf', ['VendaCartelaClientePerimetroManha'=>$VendaCartelaClientePerimetroManha,
                'titulo' => $VendaCartelaClientePerimetroManha])->setPaper('a4', 'portrait')->setOptions(['defaultFont' => 'sans-serif']);

                // Fazer o download do arquivo
        return $pdf->download('vendas realizadas com produto de cartela com cliente.pdf');
    }


    public function pesquisarCartela(){

    }
}
