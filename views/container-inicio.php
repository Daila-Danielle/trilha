<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body >

<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
    <a class="navbar-brand est" href="?pagina=home">Home</a>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown" id="myDropdown">
          <a class="nav-link est dropdown-toggle" href="#" data-bs-toggle="dropdown">  Beneficiarios </a>
          <ul class="dropdown-menu">
            <li> <a class="dropdown-item" href="? pagina=cadastro_beneficiario"> Cadastrar </a></li>
            <li> <a class="dropdown-item" href="? pagina=consulta_beneficiario"> Consultar  </a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown" id="myDropdown">
          <a class="nav-link est dropdown-toggle" href="#" data-bs-toggle="dropdown">  Veiculos </a>
          <ul class="dropdown-menu">
            <li> <a class="dropdown-item " href="? pagina=cadastro_veiculo"> Cadastrar </a></li>
            <li> <a class="dropdown-item" href="? pagina=consulta_veiculo"> Consultar  </a></li>
          </ul>
        </li>
      </ul>
    </div>
    </div>
  </nav>
<div class="container">