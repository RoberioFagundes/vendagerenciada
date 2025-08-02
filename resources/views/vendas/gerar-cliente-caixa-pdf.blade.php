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
                        

                            <tr>
                                <td class="cliente" name="nome">
                                    {{$relatorioCliente->nomeCliente}}
                                </td>
                                <td class="produto">
                                    {{$relatorioCliente->produto}}
                                </td>

                                <td class="valor">
                                    {{number_format($relatorioCliente->valortotalvenda, 2, ',', '.')}}
                                </td>
                                <td class="quantidade">
                                    {{number_format($relatorioCliente->quantidade, 2, ',', '.')}}
                                </td>
                                <td class="data">
                                    {{ date('d/m/Y', strtotime($relatorioCliente->created_at))}}
                                </td>
                                <td class="horario">
                                    {{ date('H:i:s', strtotime($relatorioCliente->created_at))}}
                                </td>
                                <td>
                                    {{$relatorioCliente->forma_pagamento}}
                                </td>


                                <td class="py-1">
                                    @if($relatorioCliente->estado == 'Novo')
                                        <label class="badge badge-info">Novo</label>
                                    @elseif($relatorioCliente->estado == 'Rejeitado')
                                        <label class="badge badge-warning">Rejeitado</label>
                                    @elseif($relatorioCliente->estado == 'Cancelado')
                                        <label class="badge badge-danger">Cancelado</label>
                                    @else
                                        <label class="badge badge-success">Aprovado</label>
                                    @endif
                                </td>

                            </tr>

                   

                        </tbody>
                    </table>

                    <div class="col-lg-12">


                    </div>

                </div>
            </div>



            <!-- fim da tabela de venda realizada periodo de dia -->

        </div>
    </div>
   
    </div>
    </div>
</body>

</html>