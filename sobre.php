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



<section class="parallax" id="section1">
    <div class="message">
      <h1 style="color: white; margin-bottom: 30px;">Sobre Nós</h1>
      <p style="color: white; padding: 10px">A Associação Acadêmica Juvenil Angolana de São Paulo (AAJASP) é uma organização sem fins lucrativos que oferece apoio aos estudantes angolanos e à comunidade em geral na cidade de São Paulo.</p>
    </div>
</section>

<section class="block" style="height: 50vh; "> 
    <div class="message">
      <h1>Missão </h1>
      <p>Ser uma referência no suporte aos estudantes angolanos no Brasil, criando um ambiente de acolhimento, inclusão e incentivo ao crescimento acadêmico e social da comunidade.</p>
    </div>
</section>

<section class="parallax" id="section2">
    <div class="message">
      <h1>Vissão</h1>
      <p>Ser uma referência no suporte aos estudantes angolanos no Brasil, criando um ambiente de acolhimento, inclusão e incentivo ao crescimento acadêmico e social da comunidade.</p>
    </div>
</section>

<section class="block">
    <div class="message">
        <h1 style=" margin-top: 60px">Valores</h1>
        <p>✔ Solidariedade – Apoiar estudantes em situações de vulnerabilidade.</p>
        <p>✔ Educação – Incentivar o desenvolvimento intelectual e profissional.</p>
        <p>✔ União – Fortalecer os laços entre os estudantes angolanos.</p>
        <p>✔ Cultura – Preservar e promover a identidade angolana no Brasil.</p>
        <p  >✔ Responsabilidade Social – Contribuir para ações sociais e filantrópicas.</p>
    </div>
</section>

<section class="our-team"> 
    <div class="team">
        <div class="div-nosso-team">
            <p class="p-nosso-team">Nosso Team</p>
        </div>

        <h3 class="h1-nosso-team"><span style="color: red;">Membros</span> do Team</h3>
        <p class="p-membros">A AAJASP é composta por estudantes angolanos residentes em São Paulo, que se unem para promover a integração, apoio acadêmico e cultural entre seus membros.</p>
    </div>

    
    <div class="container container-cards-members" style="margin: 20px; padding: 30px;">
        <div class="row g-4">
            
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <article class="card small-card border-0 rounded shadow-sm position-relative">
                    <img src="./imagens/cabral1.jpg" class="card-img-top" alt="Imagem 1">
                    
                    <!-- Div sobreposta -->
                    <div class="overlay-circle">
                        <h5 class="title-card-members">João Cabral</h5>
                        <p class="text-card-members">Presidente</p>
                    </div>
                    
                    <div class="card-bod d-flex justify-content-center">
                        <a href="https://www.facebook.com/joaoluis.joao.56"><i class="bi bi-facebook me-3"></i></a>
                        <a href="https://www.instagram.com/cabral.ysn?igsh=MWlsM3NiZGNicjUwbA%3D%3D"><i class="bi bi-instagram"></i></a>
                        
                        
                    </div>
                </article>
            </div>
    
            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <article class="card small-card border-0 rounded shadow-sm position-relative">
                    <img src="./imagens/lukenia1.jpg" class="card-img-top img-members" alt="Imagem 1">
                    
                    <!-- Div sobreposta -->
                    <div class="overlay-circle">
                        <h5 class="title-card-members">Lukénia Gonçalves</h5>
                        <p class="text-card-members">Vice Presidente</p>
                    </div>
                    
                    <div class="card-bod d-flex justify-content-center">
                        <a href="https://www.facebook.com/luquenia.vaz"><i class="bi bi-facebook me-3"></i></a>
                        <a href="https://www.instagram.com/luqueniagoncalves?igsh=MWFlYXRjMG9zcWlqMQ%3D%3D"><i class="bi bi-instagram"></i></a>
                    </div>
                </article>
            </div>
    
            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-3">
                <article class="card small-card border-0 rounded shadow-sm position-relative">
                    <img src="./imagens/felix1.jpg" class="card-img-top" alt="Imagem 1">
                    
                    <!-- Div sobreposta -->
                    <div class="overlay-circle">
                        <h5 class="title-card-members">Félix Sukuayela</h5>
                        <p class="text-card-members">Secretário</p>
                    </div>
                    
                    <div class="card-bod d-flex justify-content-center">
                        <a href="https://www.instagram.com/sakuayelafelix?igsh=YnVnZjl3NzkxeWF2 "><i class="bi bi-facebook me-3"></i></a>
                        <a href="https://www.instagram.com/sakuayelafelix?igsh=YnVnZjl3NzkxeWF2 "><i class="bi bi-instagram"></i></a>      
                    </div>
                </article>
            </div>
    
            <!-- Card 4 -->
            <div class="col-12 col-md-6 col-lg-3">
                <article class="card small-card border-0 rounded shadow-sm position-relative">
                    <img src="./imagens/vela1.jpg" class="card-img-top" alt="Imagem 1">
                    
                    <!-- Div sobreposta -->
                    <div class="overlay-circle">
                        <h5 class="title-card-members">Vela Eduardo</h5>
                        <p class="text-card-members">Tesoreira</p>
                    </div>
                    
                    <div class="card-bod d-flex justify-content-center">
                        <a href="https://www.instagram.com/vela_sofia_nestor_eduardo?igsh=bDd3d2Z3N2w3enU5"><i class="bi bi-facebook me-3"></i></a>
                        <a href="https://www.instagram.com/vela_sofia_nestor_eduardo?igsh=bDd3d2Z3N2w3enU5"><i class="bi bi-instagram"></i></a>
                        
                        
                    </div>
                </article>
            </div>
    
        </div>
    </div>
</section>



       
        



<?php 
require_once "inc/rodape.php";
?>

