@extends('padrao')
@section('content')

<div class="container">
    <form class="row g-3" method="post" action="{{route('alterarBanco-cliente',$cliente->id)}}">
        @method('put')
        @csrf
        <div class="col-md-4">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" value ="{{$cliente->nomeCliente}}" name =nomeCliente id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control"  value ="{{$cliente->foneCliente}}" name =foneCliente id="inputFone">
        </div>

        <div class="col-md-4">
            <label for="inputCep" class="form-label">CEP</label>
            <input type="text" class="form-control" value ="{{$cliente->cepCliente}}" name =cepCliente id="inputCep">
        </div>

        <div class="col-md-4">
            <label for="inputCpf" class="form-label">CPF</label>
            <input type="text" class="form-control" value ="{{$cliente->cpfCliente}}" name =cpfCliente id="inputCpf">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>
</div>
@endsection