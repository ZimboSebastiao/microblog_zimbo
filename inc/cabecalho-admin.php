<?php 
use Microblog\ControleDeAcesso;
require_once "../vendor/autoload.php";

// Criando um objeto para acesso os recursos da class ControleDeAcesso
$sessao = new ControleDeAcesso;

// Executando o método que verifica se tem alguém logado
$sessao->verificaAcesso();

// se parametro sair existir (algo que acontece quando o usuário clica no link "sair"), então faça o logout do sistema
if (isset($_GET['sair'])) $sessao->logout();

?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AAJA-SP | ADMIN</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
<link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon-adm.png">
<link rel="stylesheet" href="../css/style.css">

</head>
<body id="admin" class="d-flex flex-column h-100  bg-gradient">
    
<header id="topo" class="border-bottom sticky-top">

<nav class="navbar navbar-expand-lg  justify-content-between">
  <div class="container">
    <h1><a class="navbar-brand" href="index.php"><i class="bi bi-unlock"></i> Admin | AAJA-SP</a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="meu-perfil.php">Meu perfil</a>
            </li>
            <?php  if($_SESSION["tipo"] === "admin"){?>
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">Categorias</a>
            </li>
            <?php }?>
            <li class="nav-item">
                <a class="nav-link" href="noticias.php">Notícias</a>
            </li>

            <?php  if($_SESSION["tipo"] === "admin"){?>

            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuários</a>
            </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link" href="../index.php" target="_blank">Área pública</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?sair"> <i class="bi bi-box-arrow-left"></i> Logout</a>
            </li>
        </ul>

    </div>
  </div>
</nav>

</header>

<main class="flex-shrink-0">
    <div class="container">

    