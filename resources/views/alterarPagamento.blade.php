@extends('padrao')
@section('content')

<div class="container">
    <form class="row g-3" method="post" action="{{route('alterarBanco-pagamento',$pagamentos->id)}}">
        @method('put')
        @csrf

        <div class="col-md-8">
            <label for="inputCod" class="form-label">Código do Produto</label>
            <input type="text" class="form-control" value="{{$pagamentos->idProdutoFK}}" name =idProdutoFK id="inputCod">
        </div>

        <div class="col-md-8">
            <label for="inputQtd" class="form-label">Quantidade de Produtos</label>
            <input type="number" class="form-control" value="{{$pagamentos->qtdPagamentos}}" name =qtdPagamentos id="inputQtd">
        </div>

        <div class="col-md-4">
            <label for="inputValorTotal" class="form-label">Valor Final</label>
            <input type="number" class="form-control" value="{{$pagamentos->valorTotalPagamentos}}" name =valorTotalPagamentos id="inputValorTotal">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>

@endsection