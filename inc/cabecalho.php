<?php
// Output Buffer (Gerenciamento de memória de saída)
ob_start();
require_once "vendor/autoload.php"; 
use Microblog\Noticia;
use Microblog\Utilitarios;
header('Content-Type: text/html; charset=UTF-8');



$noticia = new Noticia;
$listaCategorias = $noticia->categoria->ler();


?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AAJA-SP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-adm.png">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column h-100">
    
<header id="topo" class="border-bottom sticky-top">

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <h1 class="ms-n1"><a class="navbar-brand" href="index.php"><img class="img-logo" src="imagens/logo-between.png" alt=""></a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="bi bi-list-nested"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach ($listaCategorias as $itemCategoria) { ?>
            <li><a class="dropdown-item" href="noticias-por-categoria.php?id=<?=$itemCategoria["id"]?>"><?= $itemCategoria["nome"]?></a></li>
            <?php }?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="sobre.php">Sobre Nós</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="ajuda.php">Ajuda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contato.php">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/index.php"><i class="bi bi-person-lock"></i> Acesso admin</a>
        </li>
        
      </ul>

      <form autocomplete="off" class="d-flex" action="resultados.php" method="GET">
        <input name="busca" class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">OK</button>
      </form>
    </div>
  </div>
</nav>

</header>

<main class="flex-shrink-0">
    <div>

    