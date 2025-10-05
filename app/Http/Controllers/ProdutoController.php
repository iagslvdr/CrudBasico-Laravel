<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index() {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    public function create() {
        return view('produto.create');
    }

    public function store(Request $request) {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->save();

        return redirect()->route('produtos.index');
    }

    public function show($id) {
        return redirect()->route('produtos.index');
    }

    public function edit($id) {
        $produto = Produto::find($id);
        return view('produto.edit', compact('produto'));
    }

    public function update(Request $request, $id) {
        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->save();

        return redirect()->route('produtos.index');
    }

    public function destroy($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index');
    }

}
