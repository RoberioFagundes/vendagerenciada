@extends('default')
@section('body')

<div class="card w-75  mt-3 mb-4 border-light shadow">
	<div class="card-header d-flex justify-content-between">
		<span>Pesquisar</span>
	</div>

	<div class="card-body">
		<form action="{{ route('cliente_index') }}">
			<div class="row">

				<div class="col-md-8 col-sm-8">
					<label class="form-label" for="nome">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control" value="{{ $nome }}"
						placeholder="Pesquisar com nome do produto" />
				</div>

				<div class="col-md-8 col-sm-8 mt-3 pt-4">
					<button type="submit" class="btn btn-info btn-sm">Pesquisar</button>
					<a href="{{ route('cliente_index') }}" class="btn btn-warning btn-sm">Limpar</a>
				</div>

			</div>

		</form>
	</div>
</div>

<div class="col-xl-12">
	<div class="card">
		<div class="card-body">
			<a class="btn btn-primary" href="/clientes/new">Novo cliente</a>

			<div class="table-responsive">
				<table class="table-responsive table-sm">
					<thead>
						<tr>
							<th scope="col">
								id
							</th>

							<th scope="col">
								Nome
							</th>
							<th scope="col">
								CPF/CNPJ
							</th>
							<th scope="col">
								Rua
							</th>
							<th scope="col">
								Número
							</th>
							<th scope="col">
								Bairro
							</th>
							<th scope="col">
								Cidade
							</th>
							<th scope="col">
								Ações
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($clientes as $c)
							<tr>
								<td class="py-1">
									{{$c->id}}
								</td>

								<td class="py-1">
									{{$c->nomeCliente}}
								</td>
								<td class="py-1">
									{{$c->cpf_cnpj}}
								</td>
								<td class="py-1">
									{{$c->rua}}
								</td>
								<td class="py-1">
									{{$c->numero}}
								</td>
								<td class="py-1">
									{{$c->bairro}}
								</td>
								<td class="py-1">
									{{$c->nome}}-{{$c->uf}}
								</td>
								<td>

									<form action="/clientes/edit/{{$c->id}}" method="post">
										<a class="btn btn-sm btn-warning" href="/clientes/edit/{{$c->id}}">
											<i class="la la-edit"></i>
										</a>
									</form>

									<form id="form-delete" action="/clientes/delete/{{$c->id}}" method="post">
										@csrf
										@method('delete')
										<a class="btn btn-sm btn-danger" href="/clientes/delete/{{$c->id}}">
											<i class="la la-trash"></i>
										</a>
									</form>


								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				{{$clientes->links()}}
			</div>
		</div>
	</div>

</div>
@endsection