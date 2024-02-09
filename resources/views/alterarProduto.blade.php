@extends('padrao')
@section('content')

<div class="container">
    <form class="row g-3" method="post" action="{{route('alterarBanco-produto',$produto->id)}}">
    @method('put')
    @csrf
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" value="{{$produto->nomeProduto}}" name =nomeProduto id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Valor do Produto</label>
            <input type="text" class="form-control" value="{{$produto->valorProduto}}" name =valorProduto id="inputValor">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>

@endsection