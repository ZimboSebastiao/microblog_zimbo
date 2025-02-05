<?php 
require_once "../inc/cabecalho-admin.php";

?>



    <div class=" py-1 bg-admin">        
        
        <div class="d-flex justify-content-between flex-wrap gap-3">
             <a class="btn btn-dark bg-gradient btn-lg custom-btn" href="meu-perfil.php">
                 <i class="bi bi-person"></i> <br> 
                Meu perfil
            </a>
            <?php  if($_SESSION["tipo"] === "admin"){?>
            <a class="btn btn-dark bg-gradient btn-lg custom-btn" href="categorias.php">
                <i class="bi bi-tags"></i> <br>
                Categorias
            </a>
            <?php } ?>
            <a class="btn btn-dark bg-gradient btn-lg custom-btn" href="noticias.php">
                <i class="bi bi-newspaper"></i> <br>
                Notícias
            </a>
            <?php  if($_SESSION["tipo"] === "admin"){?>
            <a class="btn btn-dark  bg-gradient btn-lg custom-btn" href="usuarios.php">
                <i class="bi bi-people"></i> <br>
                Usuários
            </a>
            <?php } ?>
        </div>

        <div class="welcome">
            <div class="text-welcome text-center">

                <p class="text-admin">Olá, <?=$_SESSION["nome"]?>!</p>
        
                <?php
                if (isset($_GET["perfil_atualizado"])) { ?>
                    <p class="alert alert-primary">Dados atualizado com sucesso</p>
                <?php } ?>
        
                <p class="fs-5">Você está no <b>painel de controle e administração</b> do
                site AAJA-SP.</p>
                <p class="fs-5">Seu <b>nível de acesso</b> é <span class="badge bg-light acess"> <?=$_SESSION["tipo"]?> </span>.</p>
            </div>

        </div>
        
      

    </div>


<?php 
require_once "../inc/rodape-admin.php";
?>

