@extends('info.main')

@section('content')

<table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Comentario</td>    
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['comentario'] . "</td>" .
                        "</tr>";

                }
            ?>
        </tbody>
    </table>

@endsection