@extends('default')

@section('body')


<div class="card mt-4 mb-6 border-light shadow">

    <div class="card-header d-flex justify-content-between">
        <span>Conta do Cliente</span>
        <span>
            <a href="{{ route('venda_nova') }}" class="btn btn-success btn-sm">Fazer Venda</a>
        </span>
    </div>

    {{-- Verificar se existe a sessão success e imprimir o valor --}}
    @if (session('success'))
        <div class="alert alert-success m-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-body">

    <form action="{{ route('update_fiado', ['id',$notaexistente->id])}}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{isset($notaexistente) ? $notaexistente->id : 0}}">
        <label for="">Nome:</label>
        <select class="form-control" name="cliente_id">
            <option value="{{ $notaexistente->cliente_id}}">{{ $notaexistente->nomeCliente }}</option> 
        </select>
        <br>
        <label for="">Valor total da Nota</label>
        <input  class="form-control" type="text" name="valorTotal" id="valorTotal"
         value="{{number_format($notaexistente->valortotalvenda, 2, '.', '.') }}">
       
         <label for="">Data da Nota</label><br>
        <input class="form-control" type="text" name="dataNota" 
        value="{{ \Carbon\Carbon::parse($notaexistente->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}">
        <br>
        <label for="">Quantos vai ser descontado na nota?</label><br>
        <input  class="form-control" type="text" name="descontaNota" id="descontaNota" oninput="calcularNota()">

        <label for="">Forma de Pagamento?</label>
        <select class="form-control" name="formaPagamento" id="">
            <option value="">Selecione</option>
            <option value="Dinheiro">Dinheiro</option>
            <option value="Cartão de Credito">Cartão de Credito</option>
            <option value="PIX">PIX</option>
            <option value="Cartão de Debito">Cartão de Debito</option>
        </select> 
        <br>
        <label for="">Prazo</label><br>
        <input  class="form-control" type="number" name="prazo" id="prazo" oninput="Vencimento()"><br>
        <label for="">Vencimento</label>
        <input class="form-control" type="date" name="vencimento" id="vencimento" readonly><br>


        <input type="submit" class="btn btn-success" value="Salvar">

    </form>
        
    </div>
</div>

@endsection

<script type="text/javascript">

    function calcularNota(){
        var descontarNota=document.getElementById("descontaNota").value;

        if (descontarNota!="") {
          
            var valorTotal = document.getElementById("valorTotal").value;
            var retirarR$ = valorTotal.replace("R$","");
            var retiraVirgula =retirarR$.replace(",","."); 
    
            var resultado =parseFloat(retiraVirgula)-parseFloat(descontarNota);
    
            document.getElementById("valorTotal").value=resultado;
    
            console.log("valor do resultado", resultado);
        }
    }

    function Vencimento() {

        

        var prazo = document.getElementById("prazo").value;
        var valorprazo=parseInt(prazo);

        var dataAtual = new Date();//saber a data atual 
        dataAtual.setDate(dataAtual.getDate() + valorprazo); 


        
       document.getElementById("vencimento").value=dataAtual.toLocaleDateString('en-CA');



       
        console.log("Data Atual",(dataAtual.toLocaleDateString('en-CA')));
        
        
    }

var descontarNota =document.getElementById("descontaNota").value;

    descontarNota.addEventListener("input",function() {
      
      
    })
</script>