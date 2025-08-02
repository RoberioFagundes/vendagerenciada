@extends('default')

@section('body')
<div class="col-xl-12">

	<div class="card">
		<div class="card-body">
			<form method="post" @isset($produto) action="{{route('produto_update')}}" @else
				action="{{route('produto_save')}}" @endif>
				@csrf
				<input type="hidden" name="id" value="{{isset($produto) ? $produto->id : 0}}">
				<div class="row">
					<div class="form-group col-xl-4">
						<label>Código de Barras</label>
						<input type="text" class="form-control" id="inputCOD_BARRA"
							placeholder="Campo de preenchimento Obrigátorio" name="inputCOD_BARRA"
							value="{{isset($produto) ? $produto->COD_BARRA : old('inputCOD_BARRA')}}">
						<label id="label-codigo-de-barras" class="alert alert-danger" style="display:none;">O código de
							barras é obrigatório.</label>
					</div>
					<div class="form-group col-xl-4">
						<label for="exampleInputUsername1">Registro</label>
						<input type="text" class="form-control @if($errors->has('registro')) is-invalid @endif"
							value="{{isset($produto) ? $produto->registro_ms : old('registro')}}" id="registro"
							placeholder="Registro do medicamento" name="registro">
						@if($errors->has('registro'))
						<span class="text-danger">
							{{ $errors->first('registro') }}
						</span>
						@endif
					</div>
					<div class="form-group col-xl-4">
						<label for="exampleInputUsername1">Nome</label>
						<input type="text" class="form-control @if($errors->has('nome')) is-invalid @endif"
							value="{{isset($produto) ? $produto->produto : old('nome')}}" id="nome" placeholder="Nome"
							name="nome">
						@if($errors->has('nome'))
						<span class="text-danger">
							{{ $errors->first('nome') }}
						</span>
						@endif
					</div>

					<div class="form-group col-xl-4">
						<label for="exampleInputUsername1">Categoria</label>
						<select name="categoria_id"
							class="form-control @if($errors->has('categoria_id')) is-invalid @endif">
							<option value="">Selecione</option>
							@foreach($categorias as $c)
							<option @isset($produto)@if($produto->categoria_id == $c->id)
								selected
								@endif
								@else
								@if(old('categoria_id') == $c->id)
								selected
								@endif
								@endif
								value="{{$c->id}}">
								{{$c->nome}}
							</option>
							@endforeach
						</select>
						@if($errors->has('categoria_id'))
						<span class="text-danger">
							{{ $errors->first('categoria_id') }}
						</span>
						@endif
					</div>
					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">Valor</label>
						<input type="text" class="form-control @if($errors->has('valor')) is-invalid @endif money"
							value="{{isset($produto) ? $produto->valor_venda : old('valor')}}" id="valor" placeholder="Valor"
							name="valor">
						@if($errors->has('valor'))
						<span class="text-danger">
							{{ $errors->first('valor') }}
						</span>
						@endif
					</div>

					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">Quantidade</label>
						<input type="text" class="form-control @if($errors->has('qtdProduto')) is-invalid @endif money"
							value="{{isset($produto) ? $produto->QTD_PRODUTO : old('qtdProduto')}}" id="qtdProduto"
							placeholder="Quantidade de Produto" name="qtdProduto">
						@if($errors->has('qtdProduto'))
						<span class="text-danger">
							{{ $errors->first('qtdProduto') }}
						</span>
						@endif
					</div>

					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">Quantidade de unidade contêm caixa desse produto?</label>
						<input type="text" class="form-control @if($errors->has('qtd_Unidade')) is-invalid @endif money"
							value="{{isset($produto) ? $produto->QTD_PRODUTO_UNIDADE : old('qtd_Unidade')}}" id="qtd_Unidade"
							placeholder="Quantidade de unidade tem caixa desse produto?" name="qtd_Unidade">
						@if($errors->has('qtd_Unidade'))
						<span class="text-danger">
							{{ $errors->first('qtd_Unidade') }}
						</span>
						@endif
					</div>

					<!-- <div class="form-group col-xl-2">
						<label for="exampleInputUsername1">Validade</label>
						<input type="date" class="form-control"
							value="{{isset($produto) ? $produto->validade : old('validade')}}" id="validade"
							placeholder="Validade desse produto?" name="validade">
						@if($errors->has('validade'))
						<span class="text-danger">
							{{ $errors->first('validade') }}
						</span>
						@endif
					</div> -->

					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">CFOP interno</label>
						<input type="text" class="form-control @if($errors->has('cfop_interno')) is-invalid @endif cfop"
							value="{{isset($produto) ? $produto->cfop_interno : old('cfop_interno')}}" id="cfop_interno"
							placeholder="CFOP interno" name="cfop_interno">
						@if($errors->has('cfop_interno'))
						<span class="text-danger">
							{{ $errors->first('cfop_interno') }}
						</span>
						@endif
					</div>
					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">CFOP externo</label>
						<input type="text" class="form-control @if($errors->has('cfop_externo')) is-invalid @endif cfop"
							value="{{isset($produto) ? $produto->cfop_externo : old('cfop_externo')}}" id="cfop_externo"
							placeholder="CFOP interno" name="cfop_externo">
						@if($errors->has('cfop_externo'))
						<span class="text-danger">
							{{ $errors->first('cfop_externo') }}
						</span>
						@endif
					</div>


					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">NCM</label>
						<input type="text" class="form-control @if($errors->has('ncm')) is-invalid @endif ncm"
							value="{{isset($produto) ? $produto->ncm : old('ncm')}}" id="ncm" placeholder="NCM"
							name="ncm">
						@if($errors->has('ncm'))
						<span class="text-danger">
							{{ $errors->first('ncm') }}
						</span>
						@endif
					</div>

					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">Unidade</label>
						<select name="unidade_venda"
							class="form-control @if($errors->has('unidade_venda')) is-invalid @endif">
							<option value="">Selecione</option>
							@foreach(App\Models\Produto::unidadesMedida() as $u)
							<option @isset($produto)@if($produto->unidade_venda == $u)
								selected
								@endif
								@else
								@if(old('unidade_venda') == $u)
								selected
								@endif
								@endif
								value="{{$u}}">
								{{$u}}
							</option>
							@endforeach
						</select>
						@if($errors->has('unidade_venda'))
						<span class="text-danger">
							{{ $errors->first('unidade_venda') }}
						</span>
						@endif
					</div>
					<hr>

					<div class="form-group col-xl-4">
						<label for="exampleInputUsername1">CST/CSOSN</label>
						<select name="cst_csosn" class="form-control @if($errors->has('cst_csosn')) is-invalid @endif">
							<option value="">Selecione</option>
							@foreach(App\Models\Produto::listaCSTCSOSN() as $key => $u)
							<option @isset($produto)@if($produto->cst_csosn == $key)
								selected
								@endif
								@else
								@if(old('cst_csosn') == $key)
								selected
								@endif
								@endif
								value="{{$key}}">
								{{$key}} - {{$u}}
							</option>
							@endforeach
						</select>
						@if($errors->has('cst_csosn'))
						<span class="text-danger">
							{{ $errors->first('cst_csosn') }}
						</span>
						@endif
					</div>
					<div class="form-group col-xl-6">
						<label for="exampleInputUsername1">CST PIS</label>
						<select name="cst_pis" class="form-control @if($errors->has('cst_pis')) is-invalid @endif">
							<option value="">Selecione</option>
							@foreach(App\Models\Produto::listaCST_PIS_COFINS() as $key => $u)
							<option @isset($produto)@if($produto->cst_pis == $key)
								selected
								@endif
								@else
								@if(old('cst_pis') == $key)
								selected
								@endif
								@endif
								value="{{$key}}">
								{{$key}} - {{$u}}
							</option>
							@endforeach
						</select>
						@if($errors->has('cst_pis'))
						<span class="text-danger">
							{{ $errors->first('cst_pis') }}
						</span>
						@endif
					</div>
					<div class="form-group col-xl-6">
						<label for="exampleInputUsername1">CST COFINS</label>
						<select name="cst_cofins"
							class="form-control @if($errors->has('cst_cofins')) is-invalid @endif">
							<option value="">Selecione</option>
							@foreach(App\Models\Produto::listaCST_PIS_COFINS() as $key => $u)
							<option @isset($produto)@if($produto->cst_cofins == $key)
								selected
								@endif
								@else
								@if(old('cst_cofins') == $key)
								selected
								@endif
								@endif
								value="{{$key}}">
								{{$key}} - {{$u}}
							</option>
							@endforeach
						</select>
						@if($errors->has('cst_cofins'))
						<span class="text-danger">
							{{ $errors->first('cst_cofins') }}
						</span>
						@endif
					</div>

					<div class="form-group col-xl-6">
						<label for="exampleInputUsername1">CST COFINS</label>
						<select name="cst_ipi" class="form-control @if($errors->has('cst_ipi')) is-invalid @endif">
							<option value="">Selecione</option>
							@foreach(App\Models\Produto::listaCST_IPI() as $key => $u)
							<option @isset($produto)@if($produto->cst_ipi == $key)
								selected
								@endif
								@else
								@if(old('cst_ipi') == $key)
								selected
								@endif
								@endif
								value="{{$key}}">
								{{$key}} - {{$u}}
							</option>
							@endforeach
						</select>
						@if($errors->has('cst_ipi'))
						<span class="text-danger">
							{{ $errors->first('cst_ipi') }}
						</span>
						@endif
					</div>

					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">%ICMS</label>
						<input type="text"
							class="form-control @if($errors->has('perc_icms')) is-invalid @endif perc_icms"
							value="{{isset($produto) ? $produto->perc_icms : old('perc_icms')}}" id="perc_icms"
							placeholder="%ICMS" name="perc_icms">
						@if($errors->has('perc_icms'))
						<span class="text-danger">
							{{ $errors->first('perc_icms') }}
						</span>
						@endif
					</div>
					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">%PIS</label>
						<input type="text" class="form-control @if($errors->has('perc_pis')) is-invalid @endif perc_pis"
							value="{{isset($produto) ? $produto->perc_pis : old('perc_pis')}}" id="perc_pis"
							placeholder="%PIS" name="perc_pis">
						@if($errors->has('perc_pis'))
						<span class="text-danger">
							{{ $errors->first('perc_pis') }}
						</span>
						@endif
					</div>

					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">%COFINS</label>
						<input type="text"
							class="form-control @if($errors->has('perc_cofins')) is-invalid @endif perc_cofins"
							value="{{isset($produto) ? $produto->perc_cofins : old('perc_cofins')}}" id="perc_cofins"
							placeholder="%COFINS" name="perc_cofins">
						@if($errors->has('perc_cofins'))
						<span class="text-danger">
							{{ $errors->first('perc_cofins') }}
						</span>
						@endif
					</div>
					<div class="form-group col-xl-2">
						<label for="exampleInputUsername1">%IPI</label>
						<input type="text" class="form-control @if($errors->has('perc_ipi')) is-invalid @endif perc_ipi"
							value="{{isset($produto) ? $produto->perc_ipi : old('perc_ipi')}}" id="perc_ipi"
							placeholder="%IPI" name="perc_ipi">
						@if($errors->has('perc_ipi'))
						<span class="text-danger">
							{{ $errors->first('perc_ipi') }}
						</span>
						@endif
					</div>
				</div>

				<div class="col-12">
					<a class="btn btn-danger" href="/produtos">Cancelar</a>
					<button type="submit" class="btn btn-success mr-2">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	crossorigin="anonymous"></script>
<script>

	// $("#registro").bind("input", function(){
	//     var numregistro = $("#registro").val();
	//     var url = "https://vendagerenciada.com.br/apimedicamentoshow/"+numregistro+"/json";
	//     $.ajax({
	//         url: url,
	//         type: "get",
	//         dataType: "json",
	//          console.log(data);
	//         success:function(dados){
	// 			var nome =  $("#nome").val(dados.id);

	//             var vlnome=nome;

	// 			Object.values(substancia)

	// 			console.log(vlObject);



	//             // $("#cidade").val(dados.localidade);
	//             // $("#logradouro").val(dados.logradouro);
	//             // $("#bairro").val(dados.bairro);
	//         }
	//     })


	// })

	//   // preencher dados do endereço
	//   document.getElementById('registro').addEventListener("input", function () {
	//         let registro = document.getElementById("registro").value.replace(/\D/g, '');
	//         let nome = document.getElementById("nome");
	//         // let bairro = document.getElementById("bairro_responsavel");
	//         // let rua = document.getElementById("rua_responsavel");

	//         fetch(`https://vendagerenciada.com.br/apimedicamentoshow/${registro}/json`)
	//             .then(response => response.json())
	//             .then(json => {
	// 				json.values(produto)
	// 			    console.log(json);
	//                 //  var valorArray = Object.entries(database);//transformando em array
	// 				//  console.log(valorArray.length);

	// 				//  for(let i = 0; i < valorArray.length; i++){
	// 				// 	console.log(valorArray[0].values());
	// 				// }



	//             })



	//     })

	(function () {

		const registro = document.querySelector("input[name=registro]");

		registro.addEventListener('blur', e => {
			const value = registro.value.replace(/[^0-9]+/, '');
			const url = `https://vendagerenciada.com.br/apimedicamentoshow/${value}/json/`;

			fetch(url)

				.then(response => response.json())

				.then(json => {
					var valorJson = json;
					console.log(valorJson)
					console.log(valorJson.data.substancia)
					document.getElementById('nome').value = valorJson.data.substancia
					if (json.registro) {
						document.querySelector('input[name=rua]').value = json.logradouro;
						document.querySelector('input[name=bairro]').value = json.bairro;
						document.querySelector('input[name=cidade]').value = json.localidade;
						document.querySelector('input[name=estado]').value = json.uf;
					}

				});


		});







	})();
</script>
@endsection