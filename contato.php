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
            <h2 style="max-width: 380px; margin: auto; padding-bottom: 20px;">Entre Em Contato Conosco Para Mais Informações.</h2>

            <p style=" max-width: 380px; margin: auto; padding-bottom: 35px;">Juntos, construímos oportunidades e fortalecemos laços para um futuro acadêmico e profissional de sucesso!</p>

            <form class="contact-form" id="my-form" action="https://formspree.io/f/xanqbbbz" method="POST">
                <input type="text" id="name" name="name" placeholder="Nome completo" required>

                <input type="email" id="email" name="email" placeholder="E-mail" required>
                <input type="tel" name="telefone" id="telefone" placeholder="Celular" required>

                <textarea id="message" name="message" rows="4" placeholder="Sua mensagem" required></textarea>



                <button id="my-form-button"  class="bg-warning" type="submit">Enviar</button>
                <p id="my-form-status"></p>
            </form>


        </div>

        <!-- <p>
            <img class="img-contact " src="./imagens/man.jpg" alt="">
        </p> -->
    </div>
</section>

<section class="text-center mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7315.348160502485!2d-46.641274!3d-23.544222!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5851da32a1f3%3A0x7e5e9b3895996aac!2sR.%20Br.%20de%20Itapetininga%2C%20255%20-%20Rep%C3%BAblica%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001042-001!5e0!3m2!1spt-PT!2sbr!4v1738861563961!5m2!1spt-PT!2sbr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

 <!-- Importação da Biblioteca JQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Importação do plugin JQuery Mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="js/contato.js"></script>


<?php 
require_once "inc/rodape.php";
?>

