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

							<h4>Vendas realizadas de produto com cartela Pelo Dia</h4>
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
											Quantidade de cartela
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
										<tr>
											<td class="cliente">
												{{$VendaCartelaClientePerimetroManha->nomeCliente}}
											</td>
											<td class="produto">
												{{$VendaCartelaClientePerimetroManha->produto}}
											</td>

											<td class="valor">
												{{number_format($VendaCartelaClientePerimetroManha->valortotalvenda, 2, ',', '.')}}
											</td>
											<td class="quantidade">
												{{number_format($VendaCartelaClientePerimetroManha->quantidadecartela, 2, ',', '.')}}
											</td>
											<td class="data">
												{{ date('d/m/Y', strtotime($VendaCartelaClientePerimetroManha->created_at))}}
											</td>
											<td class="horario">
												{{ date('H:i:s', strtotime($VendaCartelaClientePerimetroManha->created_at))}}
											</td>
											<td>
												{{$VendaCartelaClientePerimetroManha->forma_pagamento}}
											</td>


											<td class="py-1">
												@if($VendaCartelaClientePerimetroManha->estado == 'Novo')
													<label class="badge badge-info">Novo</label>
												@elseif($VendaCartelaClientePerimetroManha->estado == 'Rejeitado')
													<label class="badge badge-warning">Rejeitado</label>
												@elseif($VendaCartelaClientePerimetroManha->estado == 'Cancelado')
													<label class="badge badge-danger">Cancelado</label>
												@else
													<label class="badge badge-success">Aprovado</label>
												@endif
											</td>
										</tr>
								</tbody>
							</table>
						
						</div>
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