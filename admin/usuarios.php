<?php 
use Microblog\Usuario;
require_once "../inc/cabecalho-admin.php";

// Verificando se que está acessando a página pode acessar
$sessao->verificaAcessoAdmin();

$usuario = new Usuario;
$listaUsuario = $usuario->listar();

?>


<div class="row">
	<article class="col-12  my-1 py-4">
		<div class="text-category">
			<h4 class="text-center">
			Usuários 
			</h4>

			<h4 class="text-center">
			Total: <?=count($listaUsuario)?>
			</h4>

			
				<a class="btn  bg-gray" href="usuario-insere.php">
				<i class="bi bi-person"></i>	
				Adicionar</a>
			
		</div>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Tipo</th>
						<th class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach($listaUsuario as $user){ ?>
					<tr>
						<td> <?=$user["nome"]?> </td>
						<td> <?=$user["email"]?> </td>
						<td> <?=$user["tipo"]?> </td>

						<td class="text-center">
							<a class="btn btn-operations" 
							href="usuario-atualiza.php?id=<?=$user["id"]?>">
							<i class="bi bi-pencil"></i> 
							</a>
						
							<a class="btn btn-operations excluir-btn" 
							href="usuario-exclui.php?id=<?=$user["id"]?>">
							<i class="bi bi-trash"></i> 
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>                
			</table>
	</div>
		
	</article>
</div>


<?php 
require_once "../inc/rodape-admin.php";
?>

