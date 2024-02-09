@extends('padrao')
@section('content')
<div class="container">    
    <form class="row g-3" Method="Post" action="{{route('cadastrar-cliente')}}">
    @csrf        
    <div class="col-md-4">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name=nomeCliente id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control" name=foneCliente id="inputFone">
        </div>

        <div class="col-md-4">
            <label for="inputEmail" class="form-label">CEP</label>
            <input type="text" class="form-control" name=cepCliente id="inputCep">
        </div>

        <div class="col-md-4">
            <label for="inputEmail" class="form-label">CPF</label>
            <input type="text" class="form-control" name=cpfCliente id="inputCpf">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection