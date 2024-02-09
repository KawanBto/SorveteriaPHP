@extends('padrao')
@section('content')
<div class="container">    
    <form class="row g-3" Method="Post" action="{{route('cadastrar-produto')}}">
    @csrf        
    <div class="col-md-4">
            <label for="inputProduto" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" name=nomeProduto id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputValor" class="form-label">Valor do Produto</label>
            <input type="text" class="form-control" name=valorProduto id="inputValor">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection