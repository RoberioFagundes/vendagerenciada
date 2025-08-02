<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="card-12">
        <div class="card-body">
            <!-- <div class="row">
								<div class="col-4">
									<a class="btn btn-primary" href="{{route('venda_nova')}}">Nova venda</a>
								</div>
								<div class="col-8">
									<form class="d-flex" action="{{route('venda_index')}}" method="get">
										<input class="form-control me-2" name="searchCaixaCliente" type="text" placeholder="Pesquisar">
										<input type="submit" class="btn btn-primary mx-2" value="Pesquisar">
									</form>
								</div>
							</div> -->


            <div class="card-body">
                <div class="table-responsive table-striped">
                    <h4><b>Tabela de Venda de produto com caixa com cliente cadastrado pelo dia</b>
                    </h4>
                    <!-- <h6 id="venda_dia"></h6> -->
                    <!-- table-sm mostrar a tabela mais pequena -->
                    <table class="table mb-0" id="paginator">

                        <thead>
                            <tr>
                                <th>
                                    Cliente
                                </th>
                                <th>
                                    produto
                                </th>
                                <th>
                                    Valor
                                </th>

                                <th>
                                    Quantidade
                                </th>
                                <th>
                                    Data da venda
                                </th>
                                <th>
                                    Horario
                                </th>
                                <th>
                                    Forma de Pagamento
                                </th>

                                <th>
                                    Estado
                                </th>
                            </tr>
                        </thead>
                        <tbody class="vendasClienteCaixa">
                            @forelse($vendasClienteCaixa as $VendasClienteCaixaManha)

                            <tr>
                                <td class="py-1" name="nome">
                                    {{$VendasClienteCaixaManha->nomeCliente}}
                                </td>
                                <td class="py-1">
                                    {{$VendasClienteCaixaManha->produto}}
                                </td>

                                <td class="py-1">
                                    {{number_format($VendasClienteCaixaManha->valortotalvenda, 2, ',', '.')}}
                                </td>
                                <td class="py-1">
                                    {{number_format($VendasClienteCaixaManha->quantidade, 2, ',', '.')}}
                                </td>
                                <td class="py-1">
                                    {{ date('d/m/Y', strtotime($VendasClienteCaixaManha->created_at))}}
                                </td>
                                <td class="py-1">
                                    {{ date('H:i:s', strtotime($VendasClienteCaixaManha->created_at))}}
                                </td>
                                <td class="py-1">
                                    {{$VendasClienteCaixaManha->forma_pagamento}}
                                </td>


                                <td class="py-1">
                                    @if($VendasClienteCaixaManha->estado == 'Novo')
                                        <label class="badge badge-info">Novo</label>
                                    @elseif($VendasClienteCaixaManha->estado == 'Rejeitado')
                                        <label class="badge badge-warning">Rejeitado</label>
                                    @elseif($VendasClienteCaixaManha->estado == 'Cancelado')
                                        <label class="badge badge-danger">Cancelado</label>
                                    @else
                                        <label class="badge badge-success">Aprovado</label>
                                    @endif
                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>

                    <div class="col-lg-12">


                    </div>

                </div>
            </div>



            <!-- fim da tabela de venda realizada periodo de dia -->

        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive table-striped">
                    <h4>Tabela de Vendas realizadas de produto com caixa sem cliente registrado pelo Dia</h4>
                    <table class="table-sm table-striped">
                        <thead>
                            <tr>
                                <th>
                                    medicamento
                                </th>
                                <th>
                                    Valor
                                </th>
                                <th>
                                    Quantidade
                                </th>

                                <th>
                                    Data da venda
                                </th>
                                <th>
                                    Horário
                                </th>
                                <th>
                                    Forma de Pagamento
                                </th>
                                <th>
                                    Estado
                                </th>

                                <th>
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($VendaCaixaPerimetroManhaSemCliente as $VendaCaixaSemClienteManha)
                                <tr>
                                    <td class="produto">
                                        {{$VendaCaixaSemClienteManha->produto}}
                                    </td>

                                    <td class="valor">
                                        {{number_format($VendaCaixaSemClienteManha->valortotalvenda, 2, ',', '.')}}
                                    </td>
                                    <td class="quantidade">
                                        {{number_format($VendaCaixaSemClienteManha->quantidade, 2, ',', '.')}}
                                    </td>
                                    <td class="data">
                                        {{ date('d/m/Y', strtotime($VendaCaixaSemClienteManha->created_at))}}
                                    </td>
                                    <td class="horario">
                                        {{ date('H:i:s', strtotime($VendaCaixaSemClienteManha->created_at))}}
                                    </td>
                                    <td>
                                        {{$VendaCaixaSemClienteManha->forma_pagamento}}
                                    </td>


                                    <td class="py-1">
                                        @if($VendaCaixaSemClienteManha->estado == 'Novo')
                                            <label class="badge badge-info">Novo</label>
                                        @elseif($VendaCaixaSemClienteManha->estado == 'Rejeitado')
                                            <label class="badge badge-warning">Rejeitado</label>
                                        @elseif($VendaCaixaSemClienteManha->estado == 'Cancelado')
                                            <label class="badge badge-danger">Cancelado</label>
                                        @else
                                            <label class="badge badge-success">Aprovado</label>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive table-striped">
                <h4>Tabela de Vendas realizadas de produto com caixa sem cliente registrado pelo Dia</h4>
                <table class="table-sm table-striped">
                    <thead>
                        <tr>
                            <th class="py-1">
                               nome
                            </th>
                            <th class="py-1">
                                Valor
                            </th>
                            <th class="py-1">
                                Data da venda
                            </th>
                            <th class="py-1">
                                Horário
                            </th>
                            <th class="py-1 mx-2">
                                Forma de Pagamento
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($totalvenda as $Totalvenda)
                            <tr>
                                <td class="py-1">
                                    {{$Totalvenda->name}}
                                </td>

                                <td class="py-1">
                                    {{number_format($Totalvenda->valor, 2, ',', '.')}}
                                </td>

                                <td class="py-1">
                                    {{ date('d/m/Y', strtotime($Totalvenda->created_at))}}
                                </td>
                                <td class="py-1">
                                    {{ date('H:i:s', strtotime($Totalvenda->created_at))}}
                                </td>

                                <td class="py-1 mx-2">
                                    {{$Totalvenda->forma_pagamento}}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    

    
   
</body>

</html>