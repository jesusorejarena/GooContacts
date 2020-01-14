<?php 

	require("frontend/tema.php");

	//header
	$titulo = "GooContacs";

	$dir1	= "frontend/img/logo.png";

	$dir2 	= "frontend/css/estilos.css";
	$dir3	= "frontend/css/Bootstrap-4.4.1/css/bootstrap.min.css";
	$dir4	= "frontend/css/ionicons/css/ionicons.min.css";
	$dir5	= "frontend/css/animate/animate.min.css";
	$dir6	= "frontend/css/wow/animate.css";

	//body
	$dir7	= "frontend/css/Bootstrap-4.4.1/js/jquery-3.4.1.min.js";
	$dir8	= "frontend/css/Bootstrap-4.4.1/js/popper.min.js";
	$dir9	= "frontend/css/Bootstrap-4.4.1/js/bootstrap.min.js";
	$dir10	= "frontend/css/wow/wow.min.js";

	$dir11	= "index.php";
	$dir12	= "frontend/vista/acerca-de.php";
	$dir13	= "frontend/vista/usuario/iniciar.php";
	$dir14	= "frontend/vista/usuario/registrar.php";

	encabezado($titulo, $dir1, $dir2, $dir3, $dir4, $dir5, $dir6, $dir11, $dir12, $dir13, $dir14);

?>

	<br>
	<br>
	<br>
	
	<button class="btn btn-lg">Holas</button>

	<label for='nom_con' class='text-color-white text-left'><p class='h5'>Nombre: </p></label>

<?php 

	pie($dir7, $dir8, $dir9, $dir10);

?>