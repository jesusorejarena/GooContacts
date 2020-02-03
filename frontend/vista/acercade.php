 <?php 

	require("tema_normal.php");
	require("../../backend/clase/usuario.class.php");

	$obj_usu = new usuario;
	$obj_usu->estandar();

	encabezado("GooContacts");

?>

		<div class="<?php echo $obj_usu->container;?>">
			<div class="row mt-5 pt-5">
				<div class="col-12">
					<div class="text-dark text-center">
						<h2><b>Desarroladores y diseñadores de GooContacts</b></h2>
					</div>
				</div>
			</div>
			<div class="row py-4">
				<div class="col-12 col-md-6">
					<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
						<i class="icon ion-md-contact" style="font-size: 128px"></i>
						<h3 class="text-center">Jesús A. Orejarena S.</h3>
						<h5 class="text-center">V-29.545.545</h5>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
						<i class="icon ion-md-contact" style="font-size: 128px"></i>
						<h3 class="text-center">David A. Lozada P.</h3>
						<h5 class="text-center">V-27.422.826</h5>
					</div>
				</div>
			</div>
			<div class="row py-4">
				<div class="col-12 col-md-6">
					<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
						<i class="icon ion-md-contact" style="font-size: 128px"></i>
						<h3 class="text-center">Angie Y. Marquez A.</h3>
						<h5 class="text-center">V-26.888.182</h5>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="text-dark text-center mx-5 px-5 animated wow jackInTheBox">
						<i class="icon ion-md-contact" style="font-size: 128px"></i>
						<h3 class="text-center">Cleivic Y. Amaya C.</h3>
						<h5 class="text-center">V-28.640.459</h5>
					</div>
				</div>
			</div>
		</div>

<?php 

	pie();

?>