<div class="row background_webdev p-2 p-lg-5" >

</div>

<div class="container mb-5">
	<div class="row d-flex justify-content-between">

		<?php
		
			foreach($series as $item):?>

				<div class="card col-lg-3 mx-2 mt-5 p-0" id="cardBody">
					<div class="card-body">
						
						<img src="assets/capas/<?php echo $item['imagem'];?>" class="card-img-top" alt="...">
						
						<h5 class="card-title mt-3">
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
	<!--
	<div class="row d-flex justify-content-between mt-5">	

		<?php for($i = 1; $i <= 3; $i++):?>

			<div class="card col-lg-3">
				<img src="..." class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the card's content.
					</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>

		<?php endfor;?>

	</div>
	-->

</div>

	
