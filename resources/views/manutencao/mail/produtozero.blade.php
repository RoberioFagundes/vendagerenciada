<div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col ">Produto</th>
                <th scope="col mx-3">Quantidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $produtoCaixaZero as $p )
            <tr>  
                
                <td>
                {{$p->produto}}
                </td>
                <td>
                    {{$p->QTD_PRODUTO}}
                </td>                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>