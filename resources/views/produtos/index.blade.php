@extends('layouts.main')

@section('content')
    <div class="form-group">
        <form method='get' action='/produto/pesquisa'>
        <input type="text" 
                class="form-control"
                placeholder="Pesquisar" 
                name="valor"/>
        <input type="submit" class="btn btn-warning">
        </form>
    </div>
    <div>
        <a href='produto/novo_produto' class='btn btn-success'>
            Novo
        </a> 
    </div>

    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Preço</td>
            <td>Peso</td>
            <td>Estoque</td>
            <td>Detalhe</td>
            <td>Imagem do Produto</td>
            
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['preco'] . "</td>" .
                            "<td>" .$linha['peso'] . "</td>" .
                            "<td>" .$linha['estoque'] . "</td>" .
                            "<td>" .$linha['detalhe'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Produto' width='100' height='100'></td>" .
                            "<td>
                                <a href='/produto/editar/" . $linha['id']. "' class='btn btn-default'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </a>

                                <a href='/produto/excluir/" . $linha['id']. "' class='btn btn-danger'>
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