<?php 
require_once "../inc/cabecalho-admin.php";

use Microblog\Noticia;
use Microblog\Utilitarios;
$noticia = new Noticia;

/* Capturando o id e o tipo do usuário logado
e associando estes valores às propriedades do objeto */
$noticia->usuario->setId($_SESSION['id']);
$noticia->usuario->setTipo($_SESSION['tipo']);

$listaDeNoticias = $noticia->listar();

?>


<div class="row">
	<article class="col-12  my-1 py-4">
		<div class="text-category" >

			<h4>
			Notícias 
			</h4>

			<h4>
			Total:		
				<?=count($listaDeNoticias)?>
			</h4>
	
			<p>
				<a class="btn bg-gray" href="noticia-insere.php">
				<i class="bi bi-newspaper"></i>	
				Adicionar</a>
			</p>
		</div>
		
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
                        <th>Título</th>
                        <th>Data</th>
					
						<?php if($_SESSION["tipo"] === "admin"){ ?>
						<th>Autor</th>
						<?php } ?>

						<th class="text-center">Destaque</th>
						<th class="text-center" colspan="2">Operações</th>
					</tr>
				</thead>

				<tbody>

<?php foreach($listaDeNoticias as $itemNoticia) { ?>
					<tr>
                        <td> <?=$itemNoticia['titulo']?> </td>
                        <td> <?=Utilitarios::formataData($itemNoticia["data"])?> </td>

                        <?php if($_SESSION["tipo"] === "admin"){ ?>
						<td> <?=$itemNoticia['autor']?> </td>
						<?php } ?>

						<td><?=$itemNoticia['destaque']?></td>

						<td class="text-center">
							<a class="btn btn-operations" 
							href="noticia-atualiza.php?id=<?=$itemNoticia['id']?>">
							<i class="bi bi-pencil"></i> 
							</a>
						
							<a class="btn btn-operations" 
							href="noticia-exclui.php?id=<?=$itemNoticia['id']?>">
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