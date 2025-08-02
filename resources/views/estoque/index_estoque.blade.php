@extends('dashboard.aprovado.template')

@section('dashboard_aprovado')

	<div class="card mt-3 mb-4 border-light shadow">
		<div class="card-header d-flex justify-content-between">
			<span>Pesquisar</span>
		</div>

		<div class="card-body">
			<form action="{{ route('produto_index') }}">
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<label class="form-label" for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{ $nome }}"
							placeholder="Nome da conta" />
					</div>

					<div class="col-md-6 col-sm-6 mt-3 pt-4">
						<button type="submit" class="btn btn-info btn-sm">Pesquisar</button>
						<a href="{{ route('produto_index') }}" class="btn btn-warning btn-sm">Limpar</a>
					</div>

				</div>

			</form>
		</div>
	</div>





	<div class="card mt-4 mb-6 border-light shadow" >

		<div class="card-header d-flex justify-content-between">

			<span>
				<a class="btn btn-primary" href="{{route('create_produto_famarcia')}}">Novo produto</a>
			</span>
		</div>

		<div class="card-header d-flex justify-content-between">
			<span>Listar de produtos</span>
		</div>

		{{-- Verificar se existe a sessão success e imprimir o valor --}}
		@if (session('success'))
			<div class="alert alert-success m-3" role="alert">
				{{ session('success') }}
			</div>
		@endif

		<div class="card-body">
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Código de Barra</th>
						<th scope="col">
							Produto
						</th>
						<th scope="col">
							Valor do produto
						</th>

						<th scope="col">
							Valor de venda
						</th>

						<th scope="col">
							quantidade
						</th>
						<th scope="col">
							Quantidade de Unidade
						</th>
						<th scope="col" class="text-center">Ações</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@forelse ($produtos as $p)
						<tr>
							<td class="py-1">
								{{$p->COD_BARRA}}
							</td>
							<td class="py-1">
								{{$p->produto}}
							</td>

							<td class="py-1">
								{{$p->valor_produto}}
							</td>

							<td class="py-1">
								{{$p->valor_venda}}
							</td>
							<td class="py-1">
								{{$p->QTD_PRODUTO}}
							</td>
							<td class="py-1">
								{{$p->QTD_PRODUTO_UNIDADE}}
							</td>
							<td class="d-md-flex justify-content-center">
								<form id="form-delete" action="/produtos/delete/{{$p->id}}" method="post">
									@csrf
									@method('delete')

									<a class="btn btn-sm btn-warning" href="/produtos/edit/{{$p->id}}">
										<i class="la la-edit"></i>
									</a>

									<button type="button" class="btn btn-sm btn-danger btn-delete">
										<i class="la la-trash"></i>
									</button>
								</form>
							</td>

						</tr>
					@empty
						<span style="color: #f00;">Nenhuma produto encontrado!</span>
					@endforelse
				</tbody>
			</table>


			{{$produtos->links()}}
		</div>
	</div>

@endsection