@extends('layout')

@section('titulo')
    Novo cliente
@endsection

@section('conteudo')

    <form method="post" name="cliente" id="cliente" action="{{ route('clientes.store') }}">
        @csrf
        <label>Nome do cliente</label>
        <input type="text" name="nome" id="nome"/>
        <br/><br/>

        <label>Telefone</label>
        <input type="text" name="telefone" id="telefone"/>
        <br/><br/>

        <label>Rua</label>
        <input type="text" name="rua" id="rua"/>
        <br/><br/>

        <label>Bairro</label>
        <input type="text" name="bairro" id="bairro"/>
        <br/><br/>

        <label>Cidade</label>
        <input type="text" name="cidade" id="cidade"/>
        <br/><br/>

        <label>Estado</label>
        <input type="text" name="estado" id="estado"/>
        <br/><br/>

        <button type="submit">Salvar</button>
    </form>

@endsection