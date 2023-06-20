@extends('index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3">Vendas</h1>
                </div>
                <div class="card-body">
                    <form class="form" method="POST" action="{{ route('venda.create') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">#Número</label>
                            <input class="form-control @error('numero_da_venda') is-invalid @enderror" readonly value="{{ $saleNumber }}" name="numero_da_venda">
                            @if($errors->has('numero_da_venda'))
                                <div class="invalid-feedback">{{ $errors->first('numero_da_venda') }}</div>
                            @endif
                        </div>
                    
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Produtos</label>
                                <select class="form-select" name="produto_id">
                                    <option value="">Selecione um produto...</option>
                                    @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div class="col-md-6">
                                <label class="form-label">Clientes</label>
                                <select class="form-select" name="cliente_id">
                                    <option value="">Selecione um cliente...</option>
                                    @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
