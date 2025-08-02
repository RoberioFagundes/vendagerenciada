@extends('default')
@section('body')

	<div class="card w-75  mt-3 mb-4 border-light shadow">
		<div class="card-header d-flex justify-content-between">
			<span>Pesquisar</span>
		</div>

		<div class="card-body">
			<form action="{{route('index_produto_cartela')}}">
				<div class="row">

					<div class="col-md-8 col-sm-8">
						<label class="form-label" for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" value="{{ $nome }}"
							placeholder="Pesquisar com código de barra ou nome do produto" />
					</div>

					<div class="col-md-8 col-sm-8 mt-3 pt-4">
						<button type="submit" class="btn btn-info btn-sm">Pesquisar</button>
						<a href="{{route('index_produto_cartela')}}" class="btn btn-warning btn-sm">Limpar</a>
					</div>

				</div>

			</form>
		</div>
	</div>





	<div class="card mt-4 mb-6 border-light shadow">

		<div class="card-header d-flex justify-content-between">

			<span>
				<a class="btn btn-primary" href="{{route('produto_cartela_novo')}}">Novo produto</a>
			</span>
		</div>

		<div class="card-header d-flex justify-content-between">
			<span>Listar de produtos com cartela</span>
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
						<th scope="col">
							Código de Barra
						</th>

						<th scope="col">
							Produto
						</th>

						<th scope="col">
							Valor do produto
						</th>
						<th scope="col">
							Valor de venda com caixa completa
						</th>

						<th scope="col">
							valor unitário da caixa
						</th>
						<th scope="col">
							Quantidade de cartela
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
								{{$p->QTD_PRODUTO_CARTELA}}
							</td>

							<td>
								<form id="form-delete" action="{{ route('produto_cartela_delete', ['id' => $p->id])}}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-outline-danger">Delete</button>
								</form>
							</td>

							<td>
								<a class="btn btn-sm btn-warning"
									href="/produtosfamarciaCartela/produtofamarciacartelaedit/{{$p->id}}">
									<i class="la la-edit"></i>
								</a>
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


