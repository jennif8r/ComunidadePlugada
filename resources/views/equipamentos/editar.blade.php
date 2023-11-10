@extends('layouts.main')

@section('title', 'Editar Equipamento')

@section('content')

<div class="container mt-4">
<h2 class="text-center"> Editar equipamento</h2>

    <form >
        @csrf


        <div class="form-group">
            <label for="nome">Nome do Equipamento:</label>
            <input type="text" class="form-control" id="nome" name="nome" >
        </div>

       
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca">
        </div>

       
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" >
        </div>

      
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" >
        </div>

   
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>
        <br>
        <div class="text-center">
            <a href="\equipamentos\estoque" class="btn btn-primary">Voltar</a>
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        </div>
        
    </form>
</div>

@endsection
