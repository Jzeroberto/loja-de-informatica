@extends('layouts.main')

@section('title','Cadastro de Comentario')

@section('content')

<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Cadastro de um novo comentario</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/comentario/salvar_novo" method="post">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Pedro"
                    name="nome"
                >
        </div>
        <div class="form-group">
            <label>Comentario</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="99999999"
                    name="comentario"
                >
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        <a href='/comentario' class='btn btn-default'>
            Voltar
        </a>
    </div>
    </form>
</div>

@endsection