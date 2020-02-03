<?php 

	require("tema_normal.php");
	require("../../backend/clase/usuario.class.php");

	$obj_usu = new usuario;
	$obj_usu->estandar();

	encabezado("GooContacts");

?>

		<div class="<?php echo $obj_usu->container;?>">
			<div class="row">
				<div class="col-12 m-0 p-0">
					<div class="carousel slide" id="id-principal" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#id-principal" data-slide-to="0"></li>
							<li data-target="#id-principal" data-slide-to="1"></li>
							<li data-target="#id-principal" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../img/banner1.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner1.jpg" alt="" class="img-fluid" width="100%">
							</div>
							<div class="carousel-item">
								<img src="../img/banner1.jpg" alt="" class="img-fluid" width="100%">
							</div>
						</div>


						<a href="#id-principal" data-slide="prev" class="carousel-control-prev">
							<spam class="carousel-control-prev-icon"></spam>
						</a>

						<a href="#id-principal" data-slide="next" class="carousel-control-next">
							<spam class="carousel-control-next-icon"></spam>
						</a>
					</div>
				</div>
			</div>
			<div class="row mt-4 pt-4">
				<div class="col-12">
					<div class="text-dark text-center">
						<h2><b>Registrate y empieza a guardar todos tus contactos en <br>
						un solo lugar gracias a la nube.</b></h2>
					</div>
				</div>
			</div>
			<div class="row mt-5 py-4">
				<div class="col-12 col-md-6 my-2 my-md-0">
					<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
						<i class="icon ion-md-contact" style="font-size: 128px"></i>
						<h3 class="h3">Guarda la información de tus seres queridos en una sola App.</h3>
					</div>
				</div>
				<div class="col-12 col-md-6 my-2 my-md-0">
					<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
						<i class="icon ion-md-globe" style="font-size: 128px;"></i>
						<h3 class="h3">La información siempre estara disponible en cualquier plataforma.</h3>
					</div>
				</div>
			</div>
		</div>
		
<?php 

	pie();

?>