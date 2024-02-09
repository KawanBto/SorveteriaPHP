@extends('padrao')
@section('content')
<!-- inicio formulario -->
<div class="container m-4">
  <form method="get" action="{{route('todos-pagamento')}}">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputcodigo" class="col-form-label">Digite o Código</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputcodigo" name="id" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
</form>
<!--fim formulario -->
 
<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código de Compra</th>
      <th scope="col">Código do Cliente</th>
      <th scope="col">Código do Produto</th>
      <th scope="col">Quantidade de Produtos</th>
      <th scope="col">Valor Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pagamento as $pagamentoArray)
    <tr>
      <th scope="row">{{$pagamentoArray->id}}</th>
      <td>{{$pagamentoArray->cliente->nomeCliente}}</td>
      <td>{{$pagamentoArray->produto->nomeProduto}}</td>
      <td>{{$pagamentoArray->qtdPagamentos}}</td>
      <td>{{$pagamentoArray->valorTotalPagamentos}}</td>
      <td>
        <a href="{{route('alterar-pagamento',$pagamentoArray->id)}}">
          <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg></button>
</a>
      </td>
      <td>
        <form method="POST" action="{{route('delete-pagamento',$pagamentoArray->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
        </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
<!--fim tabela-->
</div>
@endsection