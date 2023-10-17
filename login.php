<?php 
use Microblog\ControleDeAcesso;
use Microblog\Usuario;
use Microblog\Utilitarios;

require_once "inc/cabecalho.php";


// Programação das mensagens de feedback

if (isset($_GET["campos_obrigatorios"])) {
	$feedback = "Preencha e-mail e senha!";
}
?>


<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
        <h2 class="text-center fw-light">Acesso à área administrativa</h2>

        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50">

                <?php 
				if (isset($feedback)) { ?>

					<p class="my-2 alert alert-warning text-center"><?=$feedback?></p>
				<?php
				}
				?>

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input class="form-control" type="password" id="senha" name="senha">
				</div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>

			<?php

				if(isset($_POST['entrar'])){
					// verificar se os campos foram preenchidos

					if(empty($_POST['email']) || empty($_POST['senha'])){
						header("location:login.php?campos_obrigatorios");
					} else {
						// Captuara o email
						$usuario = new Usuario;
						$usuario->setEmail($_POST['email']);

						// Buscar o usuário/email, no Banco de dados
						$dados = $usuario->buscar();
						Utilitarios::dump($dados);
						// Se não existir o usuário/email continuará em login.php

						// Se existir:
							// - Verificar a senha
							// - está correta? iniciar processo de login
							// - não está? continuará em login.php
					}




				}
			
			?>
    </div>
    
    
</div>        
        
        
    



<?php 
require_once "inc/rodape.php";
?>

