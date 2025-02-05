<?php 
use Microblog\Categoria;
require_once "../inc/cabecalho-admin.php";

$sessao->verificaAcessoAdmin();

$categoria = new Categoria;
$listaCategoria = $categoria->ler();
?>


<div class="row">
	<article class="col-12  my-1 py-4">
		
		<div class="text-category">
			<h4>
			Categorias 
			</h4>

			<h4>
			Total: <?= count($listaCategoria)?>
			</h4>

			<a class="btn bg-gray" href="categoria-insere.php">
			<i class="bi bi bi-tags"></i>	
			Adicionar</a>
		</div>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
						<th>Nome</th>
						<th class="text-center"></th>
					</tr>
				</thead>

				<tbody>
				<?php foreach($listaCategoria as $categ){ ?>
					<tr>
						<td> <?=$categ["nome"]?> </td>

						<td class="text-center">
							<a class="btn  btn-operations" 
							href="categoria-atualiza.php?id=<?=$categ["id"]?>">
							<i class="bi bi-pencil"></i>
							</a>
						
							<a class="btn btn-operations" 
							href="categoria-exclui.php?id=<?=$categ["id"]?>">
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

