@extends(
    'layout'
)

@section('titulo')
    Novo cliente
@endsection

@section('conteudo')

    <form method="post" name="cliente" id="cliente" action="{{ route('clientes.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do cliente</label>
            <input type="text" class="form-control" name="nome" id="nome" required />
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" />
        </div>

        <div class="mb-3">
            <label for="rua" class="form-label">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua" />
        </div>

        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" />
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" />
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" />
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </form>

@endsection

