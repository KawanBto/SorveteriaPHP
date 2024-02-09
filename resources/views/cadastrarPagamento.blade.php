@extends('padrao')
@section('content')
<div class="container">    
    <form class="row g-3" Method="Post" action="{{route('cadastrar-pagamento')}}">
    @csrf       
    <div class="col-md-3">
            <label for="inputClienteFK" class="form-label">Código do Cliente</label>
            <input type="text" class="form-control" name=idClienteFK id="inputClienteFK">
        </div> 
    <div class="col-md-3">
            <label for="inputProdutosFK" class="form-label">Código do Produto</label>
            <input type="text" class="form-control" name=idProdutosFK id="inputProdutosFK">
        </div>

        <div class="col-md-3">
            <label for="inputQtd" class="form-label">Quantidade de Produtos</label>
            <input type="text" class="form-control" name=qtdPagamentos id="inputQtd">
        </div>

        <div class="col-md-3">
            <label for="inputTotal" class="form-label">Valor Total</label>
            <input type="text" class="form-control" name=valorTotalPagamentos id="inputTotal">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection 