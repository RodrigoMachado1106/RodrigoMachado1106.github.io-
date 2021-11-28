<div class="row p-2 p-lg-5" id="banner">
	<img src="assets/capas/<?php echo $serie['imagem'];?>" style="300px" width="100%">
</div>

<div>
	
	<div class="container d-flex align-items-center justify-content-center">

	  	<div>

			<h1 class="m-0 p-0">
				<?php echo $serie['nome'];?>
			</h1>
		</div>

	</div>

</div>

<div class="container">

	<div class="row my-5">

		<div class="col-lg-8">

		<div class="embed-responsive embed-responsive-16by9 mb-3">
  			<iframe class="embed-responsive-item" src="<?php echo $serie['trailer'];?>"></iframe>
		</div>
		
			<p class="mb-0">
				<strong>Diretor:</strong> <?php echo $serie['diretor'];?>
			</p>

			<p class="mb-0">
				<strong>Lançamento:</strong> <?php echo $serie['lancamento'];?>
			</p>

			<p class="mb-0">
				<strong>Duração:</strong> <?php echo $serie['duracao'];?>
			</p>

			<p>
				<strong>Categoria:</strong> <?php echo $serie['categoria'];?>
			</p>	
			
			<p>
				<?php echo $serie['descricao'];?>
			</p>

			<div>
				
				<button type="button" class="btn botao" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Avaliar
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title text-white" id="exampleModalLabel">Avalie a série</h5>
								<button type="button" class="close" aria-label="Close" data-bs-dismiss="modal">
  									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="Main/avaliacao">

									<input type="hidden" name="serie_id" value="<?php echo $serie['id'];?>">

									<input type="text" class="form-control" name="nome" placeholder="Digite seu nome">

									<select class="form-control mt-3" name="nota">

										<option selected disabled>Selecione uma nota</option>

										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>

									<textarea class="form-control mt-3" name="mensagem" rows="3" placeholder="Digite uma mensagem"></textarea>

									<button type="submit" class="btn botao mt-3">
										Enviar avaliação								
									</button>

								</form>
							</div>
						</div>
					</div>
				</div>


					<?php foreach($avaliacoes as $item):?>

						
					<hr>

						<div class="pl-5">
							<p class="mb-0 font-weight-bold">
								<?php echo $item['nome'];?>
							</p>		

							<?php 

								$nota = $item['nota'];
								for($i = 1; $i <= $nota; $i++){
									echo '<i class="fas fa-star cor_4"></i>';
								}

								$sobra = 5 - $nota;
								if($sobra > 0){
									for($i = 1; $i <= $sobra; $i++){
										echo '<i class="far fa-star"></i>';
									}
								}
							
							?>						
	
							<p class="h6">
								<?php echo date("d/m/Y", strtotime($item['data']));?>
							</p>
							<p class="h6">
								<?php echo $item['mensagem'];?>
							</p>

						</div>
					
					<?php endforeach;?>


			</div>

		</div><!-- FECHAMENTO COL-LG-8-->
 
		<div class="col-lg-4 d-flex justify-content-end">
			<div>
				<?php
				if(!empty($recomendacao)) { ?>
					<p class="mb-0"><strong>você também pode gostar:</strong></p>
				<?php } else { ?>
					<p class="mb-0"><strong>Não temos recomendação para essa categoria!</strong></p>
				<?php } ?>

				<?php
					foreach($recomendacao as $item):?>			

						<div class="card col-lg-10 px-0 mt-4" id="cardRecomendacao">
							<div class="card-body p-3">
							<img src="assets/capas/<?php echo $item['imagem'];?>" class="card-img-top" alt="...">
								<h5 class="card-title">
									<?php echo $item['nome'];?>
								</h5>
								<p class="card-text">
									<strong>Diretor: </strong> <?php echo $item['diretor'];?>
									<br>
									<strong>Categoria: </strong> <?php echo $item['categoria'];?>
									<br>
									<strong>Lançamento: </strong> <?php echo $item['lancamento'];?>
								</p>
								<a href="detalhes/<?php echo $item['slug'];?>" class="btn  botao">Veja mais</a>
							</div>
						</div>
					<?php endforeach;?>
				
			</div>		
		</div>


	</div>

</div>