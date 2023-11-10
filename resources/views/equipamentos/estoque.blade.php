@extends('layouts.main')

@section('title', 'Estoque')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="container mt-4">
    <a class="btn btn-primary" href="/equipamentos/create">Novo equipamento</a>
    <br><br>
    <div class="input-group mb-3">
    <input id="searchInput" type="text" class="form-control" placeholder="Pesquisar por nome do produto">
    <button id="searchButton" class="btn btn-outline-primary" type="button">
        <ion-icon name="search"></ion-icon> Pesquisar
    </button>
</div>  
    
    <table id="equipamentosTable" class="table table-hover">
        <thead>
            <tr >
                <th style="background-color: #007bff; color: white;">Imagem</th>
                <th style="background-color: #007bff; color: white;">Nome</th>
                <th style="background-color: #007bff; color: white;">Quantidade</th>
                <th style="background-color: #007bff; color: white;">Marca</th>
                <th style="background-color: #007bff; color: white;">Descricao</th>
                <th style="background-color: #007bff; color: white;">Data de Cadastro</th>
                <th style="background-color: #007bff; color: white;">Ações</th>
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
                <a class="btn btn-warning btn-sm" href="{{ route('equipamentos.editar', ['id' => $Equipamento->id]) }}">
                    <ion-icon name="create"></ion-icon> Editar
                </a>

                <a class="btn btn-danger btn-sm" href="{{ route('equipamentos.confirmarExclusao', ['id' => $Equipamento->id]) }}">
                    <ion-icon name="trash"></ion-icon> Excluir
                </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $hardware->links() }}
    </div>  
</div>
<script>
    $(document).ready(function () {
        $('#searchButton').click(function () {
            performSearch();
        });

        $('#searchInput').keypress(function (e) {
            if (e.which === 13) {
                performSearch();
            }
        });

        function performSearch() {
            var searchText = $('#searchInput').val().toLowerCase();
            var resultsFound = false;

            $('#equipamentosTable tbody tr').each(function () {
                var nomeText = $(this).find('td:nth-child(2)').text().toLowerCase(); 
                var marcaText = $(this).find('td:nth-child(4)').text().toLowerCase(); 

                if (nomeText.includes(searchText) || marcaText.includes(searchText)) {
                    $(this).show();
                    resultsFound = true;
                } else {
                    $(this).hide();
                }
            });

            if (!resultsFound) {
                
                alert('Nenhum resultado encontrado.');
            }
        }
    });
</script>




@endsection
