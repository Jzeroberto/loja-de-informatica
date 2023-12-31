@extends('layouts.main')

@section('content')
    <div class="form-group">
        <form method='get' action='/cliente/pesquisa'>
        <input type="text" 
                class="form-control"
                placeholder="Pesquisar" 
                name="valor"/>
        <input type="submit" class="btn btn-warning">
        </form>
    </div>
    <div>
        <a href='/cliente/novo_cliente' class='btn btn-success'>
            Novo
        </a> 
    </div>

    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>Cpf</td>
            <td>RG</td>
            <td>Data de Nascimento</td>
            <td>Imagem do Cliente</td>
            
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha)
                {
                    echo "<tr>" .
                            "<td>" .$linha['id'] . "</td>" .
                            "<td>" .$linha['nome'] . "</td>" .
                            "<td>" .$linha['telefone'] . "</td>" .
                            "<td>" .$linha['endereço'] . "</td>" .
                            "<td>" .$linha['cpf'] . "</td>" .
                            "<td>" .$linha['rg'] . "</td>" .
                            "<td>" .$linha['data'] . "</td>" .
                            "<td><img src='" .$linha['imagem'] . "' alt='Imagem do Cliente' width='100' height='100'></td>" .
                            "<td>
                                <a href='/cliente/editar/" . $linha['id']. "' class='btn btn-default'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </a>

                                <a href='/cliente/excluir/" . $linha['id']. "' class='btn btn-danger'>
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