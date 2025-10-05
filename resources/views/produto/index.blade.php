@extends('layout')

@section('titulo')
    Produtos
@endsection

@section('conteudo')
    <a href="{{ route('produtos.create') }}">Novo Produto</a>
    <br/><br/>

    <table>
        <thead>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Valor</td>
                <td>Opções</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{$produto->codigo}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->getPrecoFormatado('R$')}}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto->codigo) }}">Editar</a>

                        <form action="{{ route('produtos.destroy', $produto->codigo) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection