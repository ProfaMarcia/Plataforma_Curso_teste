<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniCursos</title>
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="assetes/css/all.min.css" rel="stylesheet">
  <style>
    /* Estilos personalizados */
    /* Adicione seus estilos personalizados aqui */
  </style>
</head>
<body>


<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="index.php">UniCursos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cursos.php">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
      </ul>
    </div>
    <!-- Botões Login e Cadastre-se -->
    <div class="text-end">
    <a href="login.php"><button href="login.php" type="button" class="btn btn-outline-success me-2">Login</button></a>
    <a href="cadastro.php"><button type="button" class="btn btn-warning">Cadastro</button></a>
        </div>
  </div>
</nav>