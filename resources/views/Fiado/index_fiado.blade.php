@extends('default')

@section('body')
<div class="card mt-3 mb-4 border-light shadow">
    <div class="card-header d-flex justify-content-between">
        <span>Pesquisar</span>
    </div>

    <div class="card-body">
        <form action="{{ route('index_fiado') }}">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <label class="form-label" for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{ $nome }}"
                        placeholder="Nome da conta" />
                </div>

                <div class="col-md-6 col-sm-6 mt-3 pt-4">
                    <button type="submit" class="btn btn-info btn-sm">Pesquisar</button>
                    <a href="{{ route('index_fiado') }}" class="btn btn-warning btn-sm">Limpar</a>
                </div>

            </div>

        </form>
    </div>
</div>

<div class="card mt-4 mb-6 border-light shadow">

    <div class="card-header d-flex justify-content-between">
       
        <span>
            <a href="{{route('nota_existente_fiado')}}" class="btn btn-success btn-sm">Cadastrar Nota existente</a>
        </span>
    </div>

    <div class="card-header d-flex justify-content-between">
        <span>Listar Contas</span>
        <span>
            <a href="{{ route('venda_nova') }}" class="btn btn-success btn-sm">Fazer Venda</a>
        </span>
    </div>

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    @if (session('success'))
        <div class="alert alert-success m-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data da compra</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientefiado as $Clientefiado)
                    <tr>
                        <td>{{ $Clientefiado->nomeCliente }}</td>
                        <td>{{ 'R$ ' . number_format($Clientefiado->valortotalvenda, 2, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($Clientefiado->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}
                        </td>
                        <td class="d-md-flex justify-content-center">


                            <form action="/Fiado/descontarnota/{{$Clientefiado->id}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-success" value="descontar valor da nota">
                            </form>

                            
                            <form id="form-delete" action="{{route('delete_fiado',['id'=>$Clientefiado->id])}}" method="POST">
                                @csrf
								@method('delete')
								<button type="button" class="btn btn-sm btn-danger btn-delete">
									<i class="la la-trash"></i>
								</button>
                            </form>
                           

                            <a class="d-md-flex justify-content-center btn btn-primary btn-sm me-1 mx-3">Itens
                                da Nota</a>
                        </td>


                    </tr>
                @empty
                    <span style="color: #f00;">Nenhuma conta encontrada!</span>
                @endforelse
            </tbody>
        </table>


        {{  $clientefiado->links() }}
    </div>
</div>

<div class="col-12 mt-4">
    <h4> Nota existente ante do sistema</h4>
</div>
<div class="card mt-3 mb-4 border-light shadow">
    <div class="card-header d-flex justify-content-between">
        <span>Pesquisar</span>
    </div>

    <div class="card-body">
        <form action="{{ route('index_fiado') }}">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <label class="form-label" for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{ $nome }}"
                        placeholder="Nome da conta" />
                </div>

                <div class="col-md-6 col-sm-6 mt-3 pt-4">
                    <button type="submit" class="btn btn-info btn-sm">Pesquisar</button>
                    <a href="{{ route('index_fiado') }}" class="btn btn-warning btn-sm">Limpar</a>
                </div>

            </div>

        </form>
    </div>
</div>

<div class="card mt-4 mb-6 border-light shadow">

    <div class="card-header d-flex justify-content-between">
       
        <span>
            <a href="{{route('nota_existente_fiado')}}" class="btn btn-success btn-sm">Cadastrar Nota existente</a>
        </span>
    </div>

    <div class="card-header d-flex justify-content-between">
        <span>Listar Contas</span>
        <span>
            <a href="{{ route('venda_nova') }}" class="btn btn-success btn-sm">Fazer Venda</a>
        </span>
    </div>

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    @if (session('success'))
        <div class="alert alert-success m-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data da compra</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($notaexistente as $Notaexistente)
                    <tr>
                        <td>{{ $Notaexistente->nomeCliente }}</td>
                        <td>{{ 'R$ ' . number_format($Notaexistente->valortotalvenda, 2, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($Notaexistente->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}
                        </td>
                        <td class="d-md-flex justify-content-center">


                            <form action="/Fiado/notaexistente/{{$Notaexistente->id}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-success" value="descontar valor da nota">
                            </form>

                            
                            <form id="form-delete" action="{{route('delete_fiado',['id'=>$Notaexistente->id])}}" method="POST">
                                @csrf
								@method('delete')
								<button type="button" class="btn btn-sm btn-danger btn-delete">
									<i class="la la-trash"></i>
								</button>
                            </form>
                           

                            <a class="d-md-flex justify-content-center btn btn-primary btn-sm me-1 mx-3">Itens
                                da Nota</a>
                        </td>


                    </tr>
                @empty
                    <span style="color: #f00;">Nenhuma conta encontrada!</span>
                @endforelse
            </tbody>
        </table>


        {{  $notaexistente->links() }}
    </div>
</div>
@endsection