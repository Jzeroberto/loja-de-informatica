@extends('layouts.main')

@section('content')
    <div class="form-group">
        <form method='get' action='/comentario/pesquisa'>
        <input type="text" 
                class="form-control"
                placeholder="Pesquisar" 
                name="valor"/>
        <input type="submit" class="btn btn-warning">
        </form>
    </div>
    <div>
        <a href='/comentario/novo_comentario' class='btn btn-success'>
            Novo
        </a> 
    </div>

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
                            "<td>
                                <a href='/comentario/editar/" . $linha['id']. "' class='btn btn-default'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </a>

                                <a href='/comentario/excluir/" . $linha['id']. "' class='btn btn-danger'>
                                    <i class='fas fa-trash'></i>
                                    <span>Excluir</span>
                                </a>
                            </td>" .
                        "</tr>";

                }
            ?>
        </tbody>
    </table>
@endsection