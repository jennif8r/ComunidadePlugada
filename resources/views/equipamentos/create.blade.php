@extends('layouts.main')

@section('title', 'Cadastrar Equipamento')

@section('content')

<div class="container mt-4">
    <form action="/equipamentos" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center"> Cadastrar novo equipamento</h2>
        <br>
        <!-- Nome do Equipamento -->
        <div class="form-group">
            <label for="nome">Nome do Equipamento:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <!-- Marca -->
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
        </div>

        <!-- Quantidade -->
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" required>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="file" name="imagem" class="form-control-file">
        </div>

        <!-- Descrição -->
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <br>
         <!-- Data de Cadastro -->
         <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" class="form-control"  id="data_cadastro" name="data_cadastro" required>
        </div>
        <!-- ID (oculto) -->
        <input type="hidden" name="id" value="">
        <div class="text-center">
            <a href="\equipamentos\estoque\" class="btn btn-primary ">Voltar</a>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
        
    </form>
</div>

@endsection
