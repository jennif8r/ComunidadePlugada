@extends('layouts.main')

@section('title', 'Cadastrar Equipamento')

@section('content')
<style>
        label,h1{
            color: #007bff; 
            font-weight: bold;
        }
        
</style>
<div class="container mt-4">
    <form action="/equipamentos" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center">Cadastrar novo equipamento</h1>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label type="hide" for="nome">Nome do Equipamento</label>
                    <input type="text" class="form-control" id="nome" name="nome"  required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="imagem">Escolha seu arquivo:</label>
                    <br>
                    <input type="file" name="imagem" class="form-control-file" required>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro</label>
            <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" value="{{ now() }}" readonly>
        </div>
        <input type="hidden" name="id" value="">
        <br>
        <div class="text-center">
            <a href="\equipamentos\estoque\" class="btn btn-primary ">Voltar</a>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>

@endsection
