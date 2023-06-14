@extends('layouts.main')

@section('title','Cadastro de Cliente')

@section('content')

<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Cadastro de um novo cliente</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/cliente/salvar_novo" method="post">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nome do cliente</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Pedro"
                    name="nome"
                >
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="99999999"
                    name="telefone"
                >
        </div>

        <div class="form-group">
            <label>Endereço</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Rua"
                    name="endereço"
                >
        </div>

        <div class="form-group">
            <label>CPF</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="99999999999"
                    name="cpf"
                >
        </div> 

        <div class="form-group">
            <label>RG</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="999999999"
                    name="rg"
                >
        </div> 

        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" 
                    class="form-control" 
                    placeholder="00/00/0000"
                    name="data"
                >
        </div>
        
        <div class="form-group">
            <label>Imagem do Cliente</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="link da imagem"
                    name="imagem"
                >
        </div> 

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        <a href='/cliente' class='btn btn-default'>
            Voltar
        </a>
    </div>
    </form>
</div>

@endsection