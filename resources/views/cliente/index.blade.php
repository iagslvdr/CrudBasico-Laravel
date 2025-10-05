@extends('layout')

@section('titulo')
    Clientes
@endsection

@section('conteudo')
    <a href="{{ route('clientes.create') }}">Novo Cliente</a>
    <br/><br/>

    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Rua</td>
                <td>Bairro</td>
                <td>Cidade</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->Id}}</td>
                    <td>{{$cliente->Nome}}</td>
                    <td>{{$cliente->Telefone}}</td>
                    <td>{{$cliente->Rua}}</td>
                    <td>{{$cliente->Bairro}}</td>
                    <td>{{$cliente->Cidade}}</td>
                    <td>{{$cliente->Estado}}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente->Id) }}">Editar</a>

                        <form action="{{ route('clientes.destroy', $cliente->Id) }}" method="post">
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