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
    public function edit($id)
    {
        $equipamento = Hardware::find($id);

        return view('equipamentos.editar', ['equipamento' => $equipamento]);
    }

    public function update(Request $request, $id)
    {
        $equipamento = Hardware::find($id);

        $equipamento->nome = $request->nome;
        $equipamento->marca = $request->marca;
        $equipamento->quantidade = $request->quantidade;
        $equipamento->data_cadastro = $request->data_cadastro;
        $equipamento->descricao = $request->descricao;

       
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $caminhoImagem = $imagem->storeAs('public', $imagem->getClientOriginalName());
            $equipamento->imagem = str_replace('public/', '', $caminhoImagem);
        }

        $equipamento->save();

        return redirect('/equipamentos/estoque')->with('msg', 'Equipamento atualizado com sucesso');
    }

    public function confirmDelete($id)
{
    $equipamento = Hardware::find($id);

    return view('equipamentos.excluir', ['equipamento' => $equipamento]);
}

public function destroy($id)
{
    $equipamento = Hardware::find($id);

    if (!$equipamento) {
        return redirect('/equipamentos/estoque')->with('error', 'Equipamento não encontrado');
    }

   
    if ($equipamento->imagem) {
        Storage::delete('public/' . $equipamento->imagem);
    }

    $equipamento->delete();

    return redirect('/equipamentos/estoque')->with('msg', 'Equipamento excluído com sucesso');
}

    public function stock () 
    {
        $hardware = Hardware::paginate(5);
        return view('equipamentos.estoque',['hardware' => $hardware]);
    }
    
    public function store(Request $request)
{
    $hardware = new Hardware;

    $hardware->nome = $request->nome;
    $hardware->marca = $request->marca;
    $hardware->quantidade = $request->quantidade;
    $hardware->data_cadastro = now();
    $hardware->descricao = $request->descricao;     


    if ($request->hasFile('imagem')) {
        $imagem = $request->file('imagem');
        $caminhoImagem = $imagem->storeAs('public', $imagem->getClientOriginalName());
        $hardware->imagem = str_replace('public/', '', $caminhoImagem);
    }

    $hardware->save();

    return redirect('/equipamentos/estoque')->with('msg', 'Evento criado com sucesso');
}

public function contato()
    {
      
        return view('contato');
        
    }

}