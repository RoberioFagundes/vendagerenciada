@extends('default')
@section('body')
<div class="col-xl-12">

	<div class="card">
		<div class="card-body">
			<a class="btn btn-primary" href="{{route('produto_unidade_novo')}}">Novo produto</a>

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
								{{$p->QTD_PRODUTO_UNIDADE}}
							</td>
							<td>
								<form id="form-delete" action="{{route('produto_unidade_delete', ['id'=>$p->id])}}" method="post">
									@csrf
									@method('delete')
									
									<a class="btn btn-sm btn-warning"
									href="{{route('produto__unidade_edit', ['id' => $p->id])}}">
                                    
										<i class="la la-edit"></i>
									</a>
                                  

                                        <input type="submit" class="btn btn-danger" value="Apagar">
                                  
								
									
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