@extends('default')
@section('body')
<div class="col-xl-12">

	<div class="card">
		<div class="card-body">
			<a class="btn btn-primary" href="{{route('produto_cartela_novo')}}">Novo produto</a>

			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>
								Produto
							</th>
							<th>
								Valor do produto
							</th>

							<th>
								Valor de venda
							</th>

							<th>
								quantidade
							</th>
							<th>
								Quantidade de Unidade 
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($produtos as $p)
						<tr>
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
								<form id="form-delete" action="/produtosfamarciaCartela/produtofamarciacarteladelete/{{$p->id}}" method="post">
									@csrf
									@method('delete')
									
									<a class="btn btn-sm btn-warning"
									href="/produtosfamarciaCartela/produtofamarciacartelaedit/{{$p->id}}">
										<i class="la la-edit"></i>
									</a>

									<button type="button" class="btn btn-sm btn-danger btn-delete">
										<i class="la la-trash"></i>
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
@endsection