@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
    </div>

    <form action="{{ route('cliente.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="pesquisa" placeholder="Digite o termo de pesquisa">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Pesquisar</button>
                <a type="button" href="{{ route('cliente.create') }}" class="btn btn-success">Incluir produto</a>
            </div>
        </div>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Logradouro</th>
                  <th scope="col">Cep</th>
                  <th scope="col">Bairro</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @if (count($clientes) > 0)
                    @foreach ($produtos as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->endereco }}</td>
                            <td>{{ $cliente->logradouro }}</td>
                            <td>{{ $cliente->cep }}</td>
                            <td>{{ $cliente->bairro }}</td>
                            <td>
                                <a href="{{ route('cliente.update', $produto->id) }}" class="btn btn-light btn-sm">Editar</a>
                                <meta name="csrf-token" content=" {{ csrf_token() }}"/>
                                <a class="btn btn-danger btn-sm" onclick="handleDeleteProduct( {{$cliente->id}} ,'{{ route('produto.delete') }}')">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">Nenhum cliente encontrado...</td>
                    </tr>
                @endif
            </tbody>
            </table>
        </div>
        <div class="pagination">
            @if ($clientes->currentPage() > 1)
                <a href="{{ $clientes->previousPageUrl() }}" class="btn btn-primary">Voltar</a>
            @endif
            
            @if ($clientes->currentPage() < $clientes->lastPage())
                <a href="{{ $clientes->nextPageUrl() }}" class="btn btn-primary">Próxima</a>
            @endif
        </div>
    </form>
@endsection