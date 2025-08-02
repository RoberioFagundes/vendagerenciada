produtoCartela

<div>
    <table>
        <thead>
            <th>
                Produto com Cartela
            </th>
            <th>
                Quantidade de Cartela
            </th>
        </thead>
        <tbody>
            @foreach ($produtoCartela as $pc)
                <tr>
                    <td>
                        {{$pc->produto}}
                    </td>
                    <td>
                        {{$pc->QTD_PRODUTO_CARTELA}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>