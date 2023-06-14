@extends('layouts.main')

@section('content')
    <div class="form-group">
        <form method='get' action='/contato/pesquisa'>
        <input type="text" 
                class="form-control"
                placeholder="Pesquisar" 
                name="valor"/>
        <input type="submit" class="btn btn-warning">
        </form>
    </div>
    <div>
        <a href='/contato/novo_contato' class='btn btn-success'>
            Novo
        </a> 
    </div>

    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Assunto</td>
            <td>Conteudo</td>
            
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['email'] . "</td>" .
                            "<td>" .$linha['assunto'] . "</td>" .
                            "<td>" .$linha['conteudo'] . "</td>" .
                            "<td>
                            </td>" .
                        "</tr>";

                }
            ?>
        </tbody>
    </table>
@endsection