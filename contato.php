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

<section class="section-form">
    <div class="div-form">
        <div>
            <h3 style="max-width: 380px; margin: auto; padding-bottom: 10px;">Entre Em Contato Conosco Para Mais Informações.</h3>

            <p style="font-size: 13px;  max-width: 380px; margin: auto; padding-bottom: 15px;">Juntos, construímos oportunidades e fortalecemos laços para um futuro acadêmico e profissional de sucesso!</p>

            <form class="contact-form">
                <input type="text" id="name" name="name" placeholder="Nome completo" required>

                <input type="email" id="email" name="email" placeholder="E-mail" required>

                <textarea id="message" name="message" rows="4" placeholder="Sua mensagem" required></textarea>

                <button class="bg-warning" type="submit">Enviar</button>
            </form>


        </div>

        <p>
            <img class="img-contact" src="./imagens/man.jpg" alt="">
        </p>
    </div>
</section>


<?php 
require_once "inc/rodape.php";
?>

