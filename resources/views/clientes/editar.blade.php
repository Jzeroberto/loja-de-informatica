@extends('layouts.main')

@section('title','Alteração de produto')

@section('content')

<div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">Alterar um cliente</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/cliente/salvar_alteracao" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $cliente['id'] }}" />
    <div class="card-body">
        <div class="form-group">
            <label>Nome do cliente</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Pedro"
                    name="nome"
                    value='{{ $cliente["nome"] }}'
                >
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="99999999"
                    name="telefone"
                    value='{{ $cliente["telefone"] }}'
                >
        </div>
        
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="Rua Band"
                    name="endereço"
                    value='{{ $cliente["endereço"] }}'
                >
        </div>       
        
        <div class="form-group">
            <label>CPF</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="99999999999"
                    name="cpf"
                    value='{{ $cliente["cpf"] }}'
                >

        <div class="form-group">
            <label>RG</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="999999999"
                    name="rg"
                    value='{{ $cliente["rg"] }}'
                >
      
                >
        </div>
        
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" 
                    class="form-control" 
                    placeholder="00/00/0000"
                    name="data"
                    value='{{ $cliente["data"] }}'
                >
      
                >
        </div> 

        <div class="form-group">
            <label>Imagem</label>
            <input type="text" 
                    class="form-control" 
                    placeholder="link da imagem"
                    name="imagem"
                    value='{{ $cliente["imagem"] }}'
                >
      
                >
        </div> 
       
        </div> 
        
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        <a href='/produto' class='btn btn-default'>
            Voltar
        </a>
    </div>
    </form>
</div>

@endsection