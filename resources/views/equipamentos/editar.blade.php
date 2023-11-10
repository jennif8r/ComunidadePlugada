@extends('layouts.main')

@section('title', 'Editar Equipamento')

@section('content')
<style>
        label,h1{
            color: #007bff; 
            font-weight: bold;
        }
        
</style>
<div class="container mt-4">

    <form action="{{ route('equipamentos.atualizar', ['id' => $equipamento->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-center" >Editar equipamento - {{ $equipamento->nome }} </h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome do Equipamento:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $equipamento->nome }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $equipamento->marca }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <br>
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $equipamento->quantidade }}">
                    <br>
                    <label for="data_cadastro">Data de Cadastro:</label>
                    <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" value="{{ $equipamento->data_cadastro }}" readonly>
       
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <br>
                    <label for="imagem">Imagem Atual:</label><br>
                    <img src="{{ url('storage/' . $equipamento->imagem) }}" alt="Imagem do Equipamento" class="img-thumbnail" style="width: 100px; height: 120px">
                </div>

                <div>
                    <label for="nova_imagem">Nova Imagem:</label>
                    <input type="file" name="nova_imagem" class="form-control-file">
                </div>
            </div>
        </div>
        

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $equipamento->descricao }}</textarea>
        </div>  
        <br>
        <div class="text-center">
            <a href="/equipamentos/estoque/" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success">Editar</button>
        </div>
    </form>
</div>

@endsection
