@extends('info.main')


@section('content')

<table class="table table-hover text-nowrap">
        <thead>
            <td>Nome</td>
            <td>Preço</td>
            <td>Peso</td>
            <td>Estoque</td>
            <td>Detalhe</td>
            <td>Imagem</td>
</thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['preco'] . "</td>" .
                            "<td>" .$linha['peso'] . "</td>" .
                            "<td>" .$linha['estoque'] . "</td>" .
                            "<td>" .$linha['detalhe'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Produto' width='100' height='100'></td>" .
                        "</tr>";

                }
            ?>
        </tbody>
    </table>

@endsection