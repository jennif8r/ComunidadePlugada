@extends('layouts.main')

@section('title', 'Confirmação de Exclusão')

@section('content')

<div class="container mt-4 text-center">
    <p class="alert alert-primary">Você tem certeza de que deseja excluir o equipamento ?</p>

    <form >
        @csrf
        @method('DELETE')
        <a href="\equipamentos\estoque\" class="btn btn-primary ">Cancelar</a>
        <button type="submit" class="btn btn-danger">Sim, Excluir</button>
       
    </form>
</div>

@endsection
