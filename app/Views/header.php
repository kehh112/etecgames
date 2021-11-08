<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Area Administrativa</title>
</head>
<body>
    <header>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GameEtec</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionário
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php  echo base_url('../FuncionarioController/listaCodFuncionario') ?>">Cadastro</a></li>
            <li><a class="dropdown-item" href="<?php  echo base_url('../FuncionarioController/listaCodFuncionario') ?>">Pesquisar por Código</a></li>
            <li><a class="dropdown-item" href="<?php  echo base_url('../FuncionarioController/listaCodFuncionario') ?>">Pesquisar por Nome</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jogos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Cadastro</a></li>
            <li><a class="dropdown-item" href="#">Pesquisar</a></li>
            <li><a class="dropdown-item" href="#">Alterar/Deletar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php  echo base_url('../UsuarioController/inserirUsuario') ?>">Cadastro</a></li>
            <li><a class="dropdown-item" href="<?php  echo base_url('../UsuarioController/todosUsuarios') ?>">Pesquisar todos</a></li>
            <li><a class="dropdown-item" href="<?php  echo base_url('../UsuarioController/listaCodUsuario') ?>">Pesquisar por código</a></li>
            <li><a class="dropdown-item" href="<?php  echo base_url('../UsuarioController/deletarCodUsuario') ?>">Alterar/Deletar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fornecedor
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo base_url('./FornecedorController/inserirFornecedor')?>">Cadastro</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('./FornecedorController/todosFornecedores')?>">Pesquisar</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('./FornecedorController/listaCodForn')?>">Alterar/Deletar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>




    