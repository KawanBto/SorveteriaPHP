<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <title>Sorveteria</title>
</head>
<body>
<!--Inicio Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cadastrarCliente">Cadastro de Cliente</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/todoscliente">Buscar Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cadastrarProduto">Cadastro de Produto</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/todosproduto">Buscar Produto</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/cadastrarPagamento">Cadastro de Compra</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/todospagamento">Buscar Compra</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<!-- fim Navbar -->

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>