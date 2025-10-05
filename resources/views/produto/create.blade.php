@extends('layout')

@section('titulo')
    Novo produto
@endsection

@section('conteudo')

    <form method="post" name="produto" id="produto" action="{{ route('produtos.store') }}">
        @csrf
        <label>Nome do produto</label>
        <input type="text" name="nome" id="nome"/>
        <br/><br/>

        <label>Preço</label>
        <input type="text" name="preco" id="preco"/>
        <br/><br/>

        <button type="submit">Salvar</button>
    </form>

@endsection