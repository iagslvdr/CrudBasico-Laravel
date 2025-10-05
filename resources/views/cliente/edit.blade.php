@extends('layout')

@section('titulo')
    Novo cliente
@endsection

@section('conteudo')

    <form method="post" name="cliente" id="cliente" action="{{ route('clientes.update', $cliente->Id) }}">
        {{ method_field('PATCH') }}
        @csrf
        <label>Nome do cliente</label>
        <input type="text" value="{{ $cliente->Nome }}" name="nome" id="nome"/>
        <br/><br/>

        <label>Telefone</label>
        <input type="text" value="{{ $cliente->Telefone }}" name="telefone" id="telefone"/>
        <br/><br/>

        <label>Rua</label>
        <input type="text" value="{{ $cliente->Rua }}" name="rua" id="rua"/>
        <br/><br/>

        <label>Bairro</label>
        <input type="text" value="{{ $cliente->Bairro }}" name="bairro" id="bairro"/>
        <br/><br/>

        <label>Cidade</label>
        <input type="text" value="{{ $cliente->Cidade }}" name="cidade" id="cidade"/>
        <br/><br/>

        <label>Estado</label>
        <input type="text" value="{{ $cliente->Estado }}" name="estado" id="estado"/>
        <br/><br/>

        <button type="submit">Salvar</button>
    </form>

@endsection