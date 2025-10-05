@extends('layout')

@section('titulo')
    Novo produto
@endsection

@section('conteudo')

    <form method="post" name="produto" id="produto" action="{{ route('produtos.update', $produto->codigo) }}">
        {{ method_field('PATCH') }}
        @csrf
        <label>Nome do produto</label>
        <input type="text" value="{{ $produto->nome }}" name="nome" id="nome"/>
        <br/><br/>

        <label>Preço</label>
        <input type="text" value="{{ $produto->preco }}" name="preco" id="preco"/>
        <br/><br/>

        <button type="submit">Salvar</button>
    </form>

@endsection