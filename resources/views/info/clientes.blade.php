@extends('info.main')

@section('content')

<table class="table table-hover text-nowrap">
        <thead>
            <td>Nome</td>
            <td>Imagem do Cliente</td>
            
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Cliente' width='100' height='100'></td>" .
                        "</tr>";

                }
            ?>
        </tbody>
    </table>

@endsection