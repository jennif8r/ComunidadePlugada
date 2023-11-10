<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hardware;

class EquipamentosController extends Controller
{
    public function index()
    {
            return view('welcome');
        
    }
    public function create()
    {
      
            return view('equipamentos.create');
        
    }
    public function edit()
    {
      
            return view('equipamentos.editar');
        
    }

    public function delete () 
    {
        return view('equipamentos.excluir');
    }

    public function stock () 
    {
        $hardware = Hardware::all();
        return view('equipamentos.estoque',['hardware' => $hardware]);
    }
    
    public function store(Request $request)
{
    $hardware = new Hardware;

    
    $hardware->nome = $request->nome;
    $hardware->marca = $request->marca;
    $hardware->quantidade = $request->quantidade;
    $hardware->data_cadastro = $request->data_cadastro;
    $hardware->descricao = $request->descricao;

    // Upload de imagem
    if ($request->hasFile('imagem')) {
        $imagem = $request->file('imagem');
        $caminhoImagem = $imagem->storeAs('', $imagem->getClientOriginalName(), 'public');
        $hardware->imagem = $caminhoImagem;
    }

    $hardware->save();

    return redirect('/');
}


}