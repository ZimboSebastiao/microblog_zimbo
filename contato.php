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

<section class="parallax" id="section-contact">
    <div class="message">
      <h1 style="color: white; margin-bottom: 30px;">Contate-nos</h1>
      
    </div>
</section>


<?php 
require_once "inc/rodape.php";
?>

