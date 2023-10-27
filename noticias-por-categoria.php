<?php

use Microblog\Utilitarios;

require_once "inc/cabecalho.php";
$noticia->categoria->setId($_GET["id"]);
$dados = $noticia->listarPorCategoria();
// Utilitarios::dump($dados)
?>


<div class="row my-1 mx-md-n1">

    <article class="col-12">
        <h2 class=" ">Notícias sobre <span class="badge bg-primary">  </span> </h2>
        
        <div class="row my-1">
            <div class="col-12 px-md-1">
                <div class="list-group">
                    <?php foreach ($dados as $itemNotica) {?>
                    <a href="noticia.php?id=<?=$itemNotica["id"]?>" class="list-group-item list-group-item-action">
                        <h3 class="fs-6"><?= $itemNotica["titulo"]?></h3>
                        <p><time><?= $itemNotica["data"]?></time> - <?= $itemNotica["autor"]?></p>
                        <p><?= $itemNotica["resumo"]?></p>
                    </a>
                   <?php }?>
                    
                </div>
            </div>
        </div>


    </article>
    

</div>        
        

<?php 
require_once "inc/todas.php";
require_once "inc/rodape.php";
?>

