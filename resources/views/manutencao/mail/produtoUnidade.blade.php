<div>
    <table>
        <thead>
            <th>
                Produto com unidade
            </th>
            <th>
                Quantidade de Unidade
            </th>
        </thead>
        <tbody>
            @foreach ($produtoUnidade as $pu )
            <tr>
                <td>
                    {{$pu->produto}}
                </td>
                <td>
                    {{$pu->QTD_PRODUTO_UNIDADE}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>