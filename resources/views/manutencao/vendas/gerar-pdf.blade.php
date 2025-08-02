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
                                <td class="cliente" name="nome">
                                    {{$VendasClienteCaixaManha->nomeCliente}}
                                </td>
                                <td class="produto">
                                    {{$VendasClienteCaixaManha->produto}}
                                </td>

                                <td class="valor">
                                    {{number_format($VendasClienteCaixaManha->valortotalvenda, 2, ',', '.')}}
                                </td>
                                <td class="quantidade">
                                    {{number_format($VendasClienteCaixaManha->quantidade, 2, ',', '.')}}
                                </td>
                                <td class="data">
                                    {{ date('d/m/Y', strtotime($VendasClienteCaixaManha->created_at))}}
                                </td>
                                <td class="horario">
                                    {{ date('H:i:s', strtotime($VendasClienteCaixaManha->created_at))}}
                                </td>
                                <td>
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
                <!-- <div class="row">
							<div class="col-4">
								<a class="btn btn-primary" href="{{route('venda_nova')}}">Nova venda</a>
							</div>
							<div class="col-8">
								<form class="d-flex">
									<input class="form-control me-2" type="text" placeholder="Pesquisar">
									<button class="btn btn-primary mx-2" type="button">Pesquisar</button>
								</form>
							</div>
						</div> -->

                <div class="table-responsive">

                    <h4>Vendas realizadas de produto com Unidade com Cliente pelo Dia</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Cliente
                                </th>
                                <th>
                                    Produto
                                </th>
                                <th>
                                    Valor
                                </th>
                                <th>
                                    Unidade
                                </th>
                                <th>
                                    Data
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
                            @foreach ($VendaUnidadeClientePerimetroManha as $vendaUnidadeClientePerimetroManha)
                                <tr>
                                    <td class="cliente">
                                        {{$vendaUnidadeClientePerimetroManha->nomeCliente}}
                                    </td>
                                    <td class="produto">
                                        {{$vendaUnidadeClientePerimetroManha->produto}}
                                    </td>

                                    <td class="valor">
                                        {{number_format($vendaUnidadeClientePerimetroManha->valortotalvenda, 2, ',', '.')}}
                                    </td>
                                    <td class="quantidade">
                                        {{number_format($vendaUnidadeClientePerimetroManha->quantidadeUnidade, 2, ',', '.')}}
                                    </td>
                                    <td class="data">
                                        {{ date('d/m/Y', strtotime($vendaUnidadeClientePerimetroManha->created_at))}}
                                    </td>
                                    <td class="horario">
                                        {{ date('H:i:s', strtotime($vendaUnidadeClientePerimetroManha->created_at))}}
                                    </td>
                                    <td>
                                        {{$vendaUnidadeClientePerimetroManha->forma_pagamento}}
                                    </td>


                                    <td class="py-1">
                                        @if($vendaUnidadeClientePerimetroManha->estado == 'Novo')
                                            <label class="badge badge-info">Novo</label>
                                        @elseif($vendaUnidadeClientePerimetroManha->estado == 'Rejeitado')
                                            <label class="badge badge-warning">Rejeitado</label>
                                        @elseif($vendaUnidadeClientePerimetroManha->estado == 'Cancelado')
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
    </div>
    </div>
</body>

</html>