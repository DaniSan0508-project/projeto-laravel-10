@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>

    <form action="{{ route('venda.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="pesquisa" placeholder="Digite o termo de pesquisa">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Pesquisar</button>
                <a type="button" href="{{ route('venda.create') }}" class="btn btn-success">Incluir venda(s)</a>
            </div>
        </div>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Número da venda</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Cliente</th>
                </tr>
              </thead>
              <tbody>
                @if (count($vendas) > 0)
                    @foreach ($vendas as $venda)
                        <tr>
                            <td>{{ $venda->numero_da_venda }}</td>
                            <td>{{ $venda->produto->nome }}</td>
                            <td>{{ $venda->cliente->nome }}</td>
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
            @if ($vendas->currentPage() > 1)
                <a href="{{ $vendas->previousPageUrl() }}" class="btn btn-primary">Voltar</a>
            @endif
            
            @if ($vendas->currentPage() < $vendas->lastPage())
                <a href="{{ $vendas->nextPageUrl() }}" class="btn btn-primary">Próxima</a>
            @endif
        </div>
    </form>
@endsection