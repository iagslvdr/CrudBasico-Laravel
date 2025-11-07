@extends('layout')

@section('titulo')
   CRUD de Clientes
@endsection

@section('conteudo')
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Novo Cliente</a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Rua</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Ações</th>
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
                        <a href="{{ route('clientes.edit', $cliente->Id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('clientes.destroy', $cliente->Id) }}" method="post" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
