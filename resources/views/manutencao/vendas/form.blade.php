@extends('default')
@section('body')

<style type="text/css">
	table {
		height: 200px;
		overflow-y: scroll;
		display: block;
	}

	th {
		width: 100%;
	}

	.bl-info {
		border-left: 3px solid #3F3E91;
	}

	.bl-danger {
		border-left: 3px solid #FF2121;
	}
</style>
<div class="col-xl-8">
	<input type="hidden" value="{{csrf_token()}}" id="token">
	<div class="card">
		<div class="card-body">
			<div class="row">

				<div class="form-group col-xl-8">
					<label for="exampleInputUsername1">Cliente</label>
					<select id="cliente" class="form-control">
						<option value="">Selecione o cliente</option>
						@foreach($clientes as $c)
							<option value="{{$c->id}}">{{$c->nomeCliente}} | {{$c->cpf_cnpj}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-xl-6" style="margin-top: 10px;">
	<div class="card bl-info">
		<div class="card-body">
			<div class="row">
				<!-- é pela aqui que e setado os valores da quantidade de produto ou unidade de produto  -->
				<input type="hidden" id="total_geralUnidade" value="0">
				<input type="hidden" id="total_geralQuantidade" value="0">
				<input type="hidden" id="total_geralCartela" class="total_geralCartela">


				<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">

				<label for="">venda por caixa ou unidade ou cartela?</label>
				<select id="opcaoquantidade" class="form-control select2">
					<option value="">Selecione</option>
					<option value="optionquantidade">Caixa</option>
					<option value="optionquantidadeUnidade">Unidade</option>
					<option value="optionCartela">Cartela</option>
				</select>
				<div class="alert alert-danger" id="error-opcao-quantidade" style="display: none">
					<label for="">Escolhar uma opção valida</label>
				</div>

				<div id="produto-quantidade" class="form-group col-xs-8" style="display: none">
					<label for=""><strong id="estoque"></strong></label><br>
					<label for=""><b>Estoque de produto com quantidade:
						<div class="" id="produto-estoque"></div>
					</b></label>
					
					<div class="form-group col-xs-4" id="selectquantidade">
						<!-- produto com caixa -->
						<label for="exampleInputUsername1"><b>Produto com caixa:</b></label>
						<select id="produto" class="form-control select2" placeholder="Selecione código de barras">
							<option value="">Selecione o produto com caixa</option>
							@foreach($produtos as $p)
								<option value="{{$p}}">{{$p->COD_BARRA}}</option>
							@endforeach
						</select>
						<script>
							$(document).ready(function () {
								$('#produto').select2();
							});
						</script>
					</div>
					<div class="form-group col-xs-8">
						<label for="exampleInputUsername1">Valor</label>
						<input type="text" id="valor" class="valor form-control money">
					</div>
					<div class="form-group col-xs-8" id="divQuantidade">
						<label for="exampleInputUsername1">Quantidade</label>
						<input type="text" id="quantidade" class="quantidade form-control">
					</div>

				</div>



				<!-- produto com unidade -->
				<div id="produto-unidade" class="form-group col-xs-6" style="display: none;">
					<div class="form-group col-xl-12" id="selectprodutounidade">
						<!-- produto com unidade -->
						<label for="exampleInputUsername1"><b>Produto com unidade:</b> </label>
						<div id="produtoUnidadeNome"></div>
						<div id="produtoQtdCaixa"></div>
						<label for="">Unidade no estoque:</label>
						<div id="produtoQtdUnidade"></div>
						<select id="produtoUnidade" class="form-control select2">
							<option value="">Selecione o produto com unidade</option>
							@foreach($produtosUnidade as $p)
								<option value="{{$p}}">{{$p->produto}}</option>
							@endforeach
						</select>

					</div>
					<div class="form-group col-xl-6">
						<label for="exampleInputUsername1">Valor</label>
						<input type="text" id="valorUnidade" class="valor form-control money">
					</div>

					<div class="form-group col-xl-6" id="divQuantidadeUnidade">
						<label for="exampleInputUsername1">Quantidade de unidade?</label>
						<input type="text" id="optionquantidadeUnidade" name="quantidadeUnidade"
							class="quantidadeUnidade form-control">
					</div>

				</div>

				<!-- produto com cartela -->
				<div id="produto-cartela" class="form-group col-xs-6" style="display: none">



					<label for="exampleInputUsername1"><b>Produto com Cartela:</b>
						<div id="produtocartelaNome"></div>
					</label>
					<label for="">Cartela no Estoque:</label>
					<div id="produtoQtdcartela"></div>
					<div id="produtoQtdCaixacartela"></div>

					<select id="produtocartela" class="form-control select2">
						<option value="">Selecione o produto com cartela</option>
						@foreach($produtoCartela as $p)
							<option value="{{$p}}">{{$p->produto}}</option>
						@endforeach
					</select>


					<div class="form-group col-xl-8">
						<label for="exampleInputUsername1">Valor da Cartela</label>
						<input type="text" id="valorCartela" class="valor form-control money">
					</div>

					<div class="form-group col-xl-8" id="divQuantidadeUnidade">
						<label for="exampleInputUsername1">Quantidade de cartela?</label>
						<input type="text" id="optionquantidadecartela" name="quantidadeCartela"
							class="quantidadeUnidade form-control">
					</div>
				</div>

				<div class="">

				</div>
				<div class="form-group col-xl-12">
					<button id="adicionar-produto" class="btn btn-primary w-100">
						Adicionar
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-xl-6" style="margin-top:0px;">
	<div class="card bl-info">
		<div class="card-body">
			<div class="row" style="height: 235px;">
				<div class="form-group col-xl-12">
					<div class="table-responsive">
						<h5>Soma produtos com caixa: <strong class="total" id="total">0.00</strong></h5>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										Produto
									</th>
									<th>
										Quantidade
									</th>

									<th>
										Subtotal
									</th>
									<th>
										Ações
									</th>
								</tr>
							</thead>
							<tbody id="tbl-produtos">


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- produto com cartela -->
<div class="col-xl-6" style="margin-top:0px;">
	<div class="card bl-info">
		<div class="card-body">
			<div class="row" style="height: 235px;">
				<div class="form-group col-xl-12">
					<div class="table-responsive">
						<div class="" id="totalvalorcartela">

						</div>
						</h5>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										Produto
									</th>
									<th>
										Quantidade
									</th>

									<th>
										Subtotal
									</th>
									<th>
										Ações
									</th>
								</tr>
							</thead>
							<tbody id="tbl-produtos-cartela">


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="col-xl-6" style="margin-top: 10px;">
	<div class="card bl-info">
		<div class="card-body">
			<div class="row" style="height: 235px;">
				<div class="form-group col-xl-12">
					<div class="table-responsive">
						<h5>Soma produtos por unidade na caixa: <strong class="total_unidade"
								id="total_unidade">0.00</strong></h5>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										Produto
									</th>
									<th>
										unidade
									</th>

									<th>
										Subtotal
									</th>
									<th>
										Ações
									</th>
								</tr>
							</thead>
							<tbody id="tbl-produtos_unidade">


							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="col-xl-6" style="margin-top: 10px;">
	<div class="card bl-danger">
		<div class="card-body">
			<div class="row">
				<div class="form-group col-xl-12">
					<label for="exampleInputUsername1">Forma pagamento</label>
					<select id="forma_pagamento" class="form-control">
						<option value="">Selecione a forma de pagamento</option>
						@foreach(App\Models\Venda::formasPagamento() as $key => $f)
							<option value="{{$key}}">{{$f}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group col-xl-6">
					<label for="exampleInputUsername1">Data</label>
					<input type="text" id="data" class="form-control date" readonly/>
				</div>
				<div class="form-group col-xl-6">
					<label for="exampleInputUsername1">Valor</label>
					<input type="text" id="valor_pag" class="form-control money" readonly/>
				</div>

				<!--readonly impedir que o usuario modifique valor -->

				<div class="form-group col-xl-12">
					<button id="adicionar-pagamento" class="btn btn-danger w-100">
						Adicionar
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-xl-6" style="margin-top: 10px;">
	<div class="card bl-danger">
		<div class="card-body">
			<div class="row" style="height: 255px;">
				<div class="form-group col-xl-12">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
										Forma de pagamento
									</th>
									<th>
										Valor
									</th>
									<th>
										Data
									</th>
									<th>
										Ações
									</th>
								</tr>
							</thead>
							<tbody id="tbl-pagamentos">


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-xl-4 offset-xl-2" style="margin-top: 10px;">
	<a href="/vendas" class="btn btn-danger w-100">
		<i class="la la-close"></i>
		Cancelar
	</a>
</div>
<div class="col-xl-4" style="margin-top: 10px;">
	<button id="btn-salvar" class="btn btn-success w-100">
		<i class="la la-check"></i>
		Salvar
	</button>
</div>

@section('javascript')
<!-- <script type="text/javascript" src="{{ asset('public/js/vendagerenciadaunidade.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('public/js/vendagerenciada.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('public/js/vendagerenciadaunidade.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ asset('public/js/formapagamento.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('public/js/venda2.js') }}"></script>
<!-- o que faz os campos de unidade e quantidade aparece -->

<!-- <script type="text/javascript" src="{{ asset('public/js/vendaCartela.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('public/js/vendaUnidade.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('public/js/iteracaoOpcaoQuantidadeUnidadeCartela.js') }}"></script> -->
 <script type="text/javascript" src="{{asset('public/js/ValidacaoNovaVenda.js')}}"></script>
@endsection
@endsection


