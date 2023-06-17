@extends('index')
@section('content')
<form class="form" method="POST" action="{{ route('produto.update', $selectedProduct->id) }}">
    @csrf
    @method('PUT')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar produto</h1>
    </div>
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control @error('nome') is-invalid @enderror" value="{{ isset($selectedProduct->nome) ? $selectedProduct->nome : old('nome') }}" name="nome">
        @if($errors->has('nome'))
            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label">Valor</label>
        <input id="valor" class="form-control @error('valor') is-invalid @enderror" value="{{ isset($selectedProduct->valor) ? $selectedProduct->valor : old('valor') }}" name="valor">
        @if($errors->has('valor'))
            <div class="invalid-feedback">{{ $errors->first('valor') }}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Salvar alterações</button>
</form>
@endsection