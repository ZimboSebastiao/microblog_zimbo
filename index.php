<?php 
use Microblog\Utilitarios;
require_once "inc/cabecalho.php";

$noticia->setDestaque("sim");
$destaques = $noticia->listarDestaques();

// Utilitarios::dump($noticia);
$todasNoticias = $noticia->listarTodas();
// Utilitarios::dump($destaques);
setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'Portuguese_Brazil', 'Brazil');



?>



<div class="row g-3 box-index">
        <?php foreach ($destaques as $itemDestaque) {?>
        <!-- INÍCIO Card -->
         
		<div class="col-12 col-md-6 col-lg-3 card-index">
        <article class="card border-0 rounded-0 shadow-sm h-100 ">
            <a href="noticia.php?id=<?= $itemDestaque["id"]?>" class="card-link">
                <img src="imagens/<?= $itemDestaque["imagem"]?>" class="card-img-top rounded-0" alt="...">
                <div class="card-body d-flex flex-column">
                    <p class="text-title"><?= $itemDestaque["titulo"]?></p>
                    <div class="div-category">
                        <p class="text-category-destaque text-category-color"> <?= $itemDestaque["categoria"] ?></p>
                        <p class="text-category-destaque">
                            <?= strftime("%B, %Y", strtotime($itemDestaque["data"])) ?>
                        </p>
                    </div>
                    
                    
                   
                    <div class="mt-auto">
                        <hr class="my-4 border-danger">
                        <p class="d-flex align-items-center">
                            <img src="./imagens/escritor.png" class="icon-destaque" style="margin-right: 6px;" alt="">
                            BY <span style="font-weight: bold; margin-left: 6px;"> <?= $itemDestaque["autor"]?> </span>
                        </p>
                    </div>
                </div>
            </a>
        </article>
        </div>

        <?php } ?>
		<!-- FIM Card -->


        

        

</div>        
        



<?php 
require_once "inc/todas.php";
require_once "inc/rodape.php";
?>

