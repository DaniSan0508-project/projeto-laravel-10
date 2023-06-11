@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <form action="{{ route('produto.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="pesquisa" placeholder="Digite o termo de pesquisa">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Pesquisar</button>
                <a type="button" href="{{ route('produto.create') }}" class="btn btn-success">Incluir produto</a>
            </div>
        </div>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Valor</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @if (count($produtos) > 0)
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>R$ {{ number_format($produto->valor, 2, ',', '.') }}</td>
                            <td>
                                <a href="" class="btn btn-light btn-sm">Editar</a>
                                <meta name="csrf-token" content=" {{ csrf_token() }}"/>
                                <a class="btn btn-danger btn-sm" onclick="handleDeleteProduct( {{$produto->id}} ,'{{ route('produto.delete') }}')">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Nenhum produto encontrado ...</td>
                    </tr>
                @endif
            </tbody>
            </table>
        </div>
        <div class="pagination">
            @if ($produtos->currentPage() > 1)
                <a href="{{ $produtos->previousPageUrl() }}" class="btn btn-primary">Voltar</a>
            @endif
            
            @if ($produtos->currentPage() < $produtos->lastPage())
                <a href="{{ $produtos->nextPageUrl() }}" class="btn btn-primary">Próxima</a>
            @endif
        </div>
    </form>
@endsection