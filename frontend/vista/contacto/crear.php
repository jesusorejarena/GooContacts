<?php
		
		require("../../tema.php");

		//header
		$titulo = "GooContacs";

		$dir1	= "../../img/logo.png";

		$dir2 	= "../../css/estilos.css";
		$dir3	= "../../css/Bootstrap-4.4.1/css/bootstrap.min.css";
		$dir4	= "../../css/ionicons/css/ionicons.min.css";
		$dir5	= "../../css/animate/animate.min.css";
		$dir6	= "../../css/wow/animate.css";

		//body
		$dir7	= "../../css/Bootstrap-4.4.1/js/jquery-3.4.1.min.js";
		$dir8	= "../../css/Bootstrap-4.4.1/js/popper.min.js";
		$dir9	= "../../css/Bootstrap-4.4.1/js/bootstrap.min.js";
		$dir10	= "../../css/wow/wow.min.js";

		$dir11	= "../../../index.php";
		$dir12	= "../cerca-de.php";
		$dir13	= "../usuario/iniciar.php";
		$dir14	= "../usuario/registrar.php";

		encabezado($titulo, $dir1, $dir2, $dir3, $dir4, $dir5, $dir6, $dir11, $dir12, $dir13, $dir14);
		
?>

	<div class="container my-5 py-5">
		<div class="row">
			<div class="col-12">

				<h1>Crear contacto</h1>

				<form action="../../../backend/controlador/contacto.php" method="POST">

					<div class="row">
						<div class="col-12">
							
							<input class="form-control m-2 p-2" type="text" name="fky_usuario" placeholder="Codigo del Usuario" name="fky_usuario" id="fky_usuario" minlength="1" maxlength="11" required="">

						</div>
					</div>

					<div class="row">
						<div class="col-6">
					
							<input class="form-control m-2 p-2" type="text" placeholder="Nombre" name="nom_con" id="nom_con" minlength="3" maxlength="30" required="">

							<input class="form-control m-2 p-2" type="text" placeholder="Apellido" name="ape_con" id="ape_con" minlength="3" maxlength="30">

							<input class="form-control m-2 p-2" type="text" placeholder="Empresa" name="emp_con" id="emp_con" minlength="2" maxlength="50">

						</div>

						<div class="col-6">

							<input class="form-control m-2 p-2" type="text" placeholder="Correo" name="cor_con" id="cor_con" minlength="5" maxlength="80">

							<input class="form-control m-2 p-2" type="text" placeholder="Usuario" name="usu_con" id="usu_con" minlength="1" maxlength="30">

							<input class="form-control m-2 p-2" type="text" placeholder="Telefono" name="tel_con" id="tel_con" minlength="11" maxlength="14">
							
						</div>
					</div>	

					<button class="btn btn-success m-2 p-2" type="submit" name="ejecutar" value="insertar">Crear contacto</button>

				</form>

			</div>
		</div>
	</div>

<?php
	
	pie($dir7, $dir8, $dir9, $dir10);
	
?>