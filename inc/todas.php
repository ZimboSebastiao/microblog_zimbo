<?php
use Microblog\Utilitarios;
// Utilitarios::dump($noticia);
$todasNoticias = $noticia->listarTodas();
?>

<hr class="my-5 w-50 mx-auto">

        <div class="row my-1" style="margin-left: 0px; margin-right: 0px;">
            <div class="col-12 px-md-1" style="padding-left: 0px;padding-right: 0px;">
                <div class="list-group">
                    <h2 class="fs-6 text-center text-muted">Todas as notícias</h2>
                    <?php foreach ($todasNoticias as $todas) {?>
                    <a href="noticia.php?id=<?=$todas["id"]?>" class="list-group-item list-group-item-action">
                         <h3 class="fs-6" style="color:rgb(64, 51, 255)"><time><?=Utilitarios::formataData($todas["data"])?></time> - <?=$todas["titulo"]?></h3>
                        <p><?=$todas["resumo"]?></p>
                    </a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
