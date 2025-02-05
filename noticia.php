<?php 
require_once "inc/cabecalho.php";
use Microblog\Utilitarios;



$noticia->setId($_GET["id"]);

$dados = $noticia->listarDetalhes();
setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'Portuguese_Brazil', 'Brazil');
// Utilitarios::dump($dados);


// $textoCorrigido = preg_replace("/&#13;&#10;/", "\n", $dados["texto"]);
$textoCorrigido = html_entity_decode($dados["texto"], ENT_QUOTES, 'UTF-8'); 
$textoCorrigido = preg_replace("/\r\n|\r|\n/", "\n", $textoCorrigido); // Normaliza todas as quebras de linha

$parsedown = new \ParsedownExtra();
$parsedown->setBreaksEnabled(true); 

$conteudoFormatado = $parsedown->text($textoCorrigido);

// $parsedown->setMarkupEscaped(true);

// echo "<pre>";
// var_dump($dados["texto"]);
// echo "</pre>";
// echo "<pre>" . nl2br(htmlspecialchars($textoCorrigido)) . "</pre>";



?>


<div class="row my-1 mx-md-n1 container">

    <article class="col-12 text-center">
        <div class="title-detalhe-div" >
            <h1 class="title-detalhe"> <?=$dados["titulo"]?> </h1>
            <div class="categoria-detalhes">
                <div class="categ-date">
                    <p> <i style="color: #43a2f0"><?= $dados["categoria"] ?></i></p>
                    <p class="pipe-detalhe">|</p>
                    <p class="text-category-destaque"> <i><?= strftime(" %d de %B, %Y", strtotime($dados["data"])) ?></i> </p>
                </div>
                <p><i>Publicado por: <?= $dados["autor"]?></i></p>
            </div>
            <div class="img-detalhes">

                <img src="imagens/<?= $dados["imagem"]?>" alt="" class="img-fluid">
            </div>
            
            
            <div class="div-textos markdown-content">
                <?= $conteudoFormatado ?> 
            </div>
            </div>
        </div>
        


    </article>
    

</div>        
                  

<?php 
require_once "inc/todas.php";
require_once "inc/rodape.php";
?>

