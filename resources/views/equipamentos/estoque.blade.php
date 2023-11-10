@extends('layouts.main')

@section('title', 'Estoque')

@section('content')

<div class="container mt-4">
    <a class="btn btn-primary" href="/equipamentos/create">Cadastrar um novo equipamento</a>
    <br><br>
    <div class="input-group mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar por nome do produto">
        <button class="btn btn-outline-secondary" type="button">Pesquisar</button>
    </div>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Marca</th>
                <th>Descricao</th>
                <th>Data de Cadastro</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hardware as $Equipamento)
            <tr>    
            <td><img src="{{ url('storage/' . $Equipamento->imagem) }}" alt="Imagem do Equipamento" class="img-thumbnail" style="width: 50px; height: 60px"></td>
                    <td>{{ $Equipamento->nome }}</td>
                <td>{{ $Equipamento->quantidade }}</td>
                <td>{{ $Equipamento->marca }}</td>
                <td>{{ $Equipamento->descricao }}</td>
                <td>{{ $Equipamento->data_cadastro }}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="/equipamentos/editar">
                        <ion-icon name="create"></ion-icon> Editar
                    </a>
                    <a class="btn btn-danger btn-sm" href="/equipamentos/excluir">
                        <ion-icon name="trash"></ion-icon> Excluir
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
