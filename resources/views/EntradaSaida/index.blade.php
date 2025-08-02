@extends('default')

@section('body')


    <div class="card mt-4 mb-6 border-light shadow">

        <div class="card-header d-flex justify-content-between">

            <span>
                <a href="{{route('saque_novo')}}" class="btn btn-success btn-sm">Saque</a>
            </span>
        </div>

        <div class="card-header d-flex justify-content-between">
            <span>Caixa</span>

            <span>Montante:<br>
            R$ {{ $SomarEntradaSaida }}
            </span>
            <span>
                <a href="{{ route('deposito_novo') }}" class="btn btn-success btn-sm">Deposito</a>
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
                        <th scope="col">Capital</th>
                        <th scope="col">Data</th>
                        <th scope="col">Horario</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($EntradaSaida as $entradaSaida)
                            <tr>
                                <td class="py-1">
                                    R$ {{ $entradaSaida->valortotalvenda}}
                                </td>
                                <td class="py-1">
                                    {{ date('d/m/Y', strtotime($entradaSaida->created_at))}}
                                </td>
                                <td>
                                            {{ date('H:i:s', strtotime($entradaSaida->created_at))}}
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>



        </div>
    </div>

    <div class="card mt-4 mb-6 border-light shadow mx-4">

        {{-- Verificar se existe a sessão success e imprimir o valor --}}
        @if (session('success'))
            <div class="alert alert-success m-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <span>Montante de Saque: <br>
        R$ {{$somarSaque}}

        </span>
        <div class="card-header d-flex justify-content-between">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Saque</th>
                        <th scope="col">Data</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($saque as $s)
                        <tr>
                            <td class="py-1">
                                R$ {{ $s->valor }}
                            </td>
                             <td class="py-1">
                                {{ date('d/m/Y', strtotime($s->created_at))}}
                            </td>
                            <td>
                                {{ date('H:i:s', strtotime($s->created_at))}}
                            </td>
                            <td class="py-1">
                                {{ $s->descricao }}
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>



        </div>
    </div>


    <div class="card mt-4 mb-6 border-light shadow">

        <div class="card-header d-flex justify-content-between">
            <span>Deposito
            </span>

            <span>
                Montante de Deposito: <br>
                R$ {{ $somarDeposito }}
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
                        <th scope="col">Deposito</th>
                        <th scope="col">Data</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deposito as $d)
                        <tr>
                            <td class="py-1">
                                R$ {{ $d->valor }}
                            </td>
                            <td class="py-1">
                                {{ date('d/m/Y', strtotime($d->created_at))}}
                            </td>
                            <td>
                                {{ date('H:i:s', strtotime($d->created_at))}}
                            </td>

                            <td class="py-1">
                                {{ $d->descricao }}
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>



        </div>
    </div>
@endsection