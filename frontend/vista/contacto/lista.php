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

	require("../../../backend/clase/contacto.class.php");

	$obj_con = new contacto;
	$obj_con->asignar_valor();	// otra forma de hacerlo seria $obj_con->fky_usuario=$_POST['fky_usuario'];
	$obj_con->puntero=$obj_con->listar();

	$error = 1;

?>

	<div class="container mt-5 ">
		<div class="row">
			<div class="col-12">
				<form action="" method="POST">
					<input class="form-control m-2 p-2 border border-info border-top-0 border-left-0 border-right-0" type="text" name="fky_usuario" placeholder="Codigo del Usuario" name="fky_usuario" id="fky_usuario" minlength="1" maxlength="11" required="">
					<input class="btn btn-success m-2 p-2" type="submit" name="ejecutar">
				</form>
			</div>
		</div>
	</div>

	<h1 class="h1 p-2 m-2 text-center">Lista de contactos</h1 class="h1 p-5 m-5 text-center">

<?php
		
	if($_POST['ejecutar'])
    {

		while (($contacto=$obj_con->extraer_dato())>0)
		{
			echo "
					
				<div class='container bg-dark border border-danger rounded my-5 py-5'>
					<div class='row'>
						<div class='col-12'>

							<h2 class='h2 text-white'>Contacto N° $contacto[cod_con]</h2>

							<form action='../../../backend/controlador/contacto.php' method='POST'>

								<div class='row'>
									<div class='col-6'>
								
										<input class='form-control p-4' type='hidden' name='cod_con' value='$contacto[cod_con]'>
										
										<label for='nom_con' class='text-white text-left'><p class='h6'>Nombre: </p></label>
										<input class='form-control p-4' type='text' placeholder='Nombre' name='nom_con' id='nom_con' minlength='3' maxlength='30' required='' value='$contacto[nom_con]'><br>
										
										<label for='ape_con' class='text-white text-left'><p class='h6'>Apellido: </p></label>
										<input class='form-control p-4' type='text' placeholder='Apellido' name='ape_con' id='ape_con' minlength='3' maxlength='30' value='$contacto[ape_con]'><br>
										
										<label for='emp_con' class='text-white text-left'><p class='h6'>Empresa: </p></label>
										<input class='form-control p-4' type='text' placeholder='Empresa' name='emp_con' id='emp_con' minlength='2' maxlength='50' value='$contacto[emp_con]'><br>

									</div>

									<div class='col-6'>

										<label for='cor_con' class='text-white text-left'><p class='h6'>Correo: </p></label>
										<input class='form-control p-4' type='text' placeholder='Correo' name='cor_con' id='cor_con' minlength='5' maxlength='80' value='$contacto[cor_con]'><br>

										<label for='usu_con' class='text-white text-left'><p class='h6'>Usuario: </p></label>
										<input class='form-control p-4' type='text' placeholder='Usuario' name='usu_con' id='usu_con' minlength='1' maxlength='30' value='$contacto[usu_con]'><br>

										<label for='tel_con' class='text-white text-left'><p class='h6'>Telefono: </p></label>
										<input class='form-control p-4' type='text' placeholder='Telefono' name='tel_con' id='tel_con' minlength='11' maxlength='14' value='$contacto[tel_con]'><br>
										
									</div>
								</div>	

								<button class='btn btn-primary m-2 p-2' type='submit' name='ejecutar' value='modificar'>Modificar</button>

								<button class='btn btn-danger m-2 p-2' type='submit' name='ejecutar' value='eliminar'>Eliminar</button>

							</form>

						</div>
					</div>
				</div>
			";
		}

	}

	pie($dir7, $dir8, $dir9, $dir10);

 ?>