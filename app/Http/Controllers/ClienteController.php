<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create() {
        return view('cliente.create');
    }

    public function store(Request $request) {
        //dump($request->all()); 
        $cliente = new Cliente();
        $cliente->Nome = $request->nome;
        $cliente->Telefone = $request->telefone;
        $cliente->Rua = $request->rua;
        $cliente->Bairro = $request->bairro;
        $cliente->Cidade = $request->cidade;
        $cliente->Estado = $request->estado;
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function show($id) {
        return redirect()->route('clientes.index');
    }

    public function edit($id) {
        $cliente = Cliente::find($id);
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id) {
        $cliente = Cliente::find($id);
        $cliente->Nome = $request->nome;
        $cliente->Telefone = $request->telefone;
        $cliente->Rua = $request->rua;
        $cliente->Bairro = $request->bairro;
        $cliente->Cidade = $request->cidade;
        $cliente->Estado = $request->estado;
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function destroy($id) {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
