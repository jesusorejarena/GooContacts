<?php

	require("../../tema.php");

	$titulo = "Iniciar Sesión - GooContacs";
	$dir1 	= "../../img/logo.png";
	$dir1 	= "../../css/Bootstrap-4.4.1/css/bootstrap.min.css";
	$dir1 	= "../../css/estilos.css";
	$dir1 	= "../../js/JQuery-3.4.1/jquery-3.4.1.min.js";
	$dir1 	= "../../js/popper.min.js";

	encabezado($titulo, $dir1, $dir2, $dir3);

?>

	<form action="" method="">
		
		<input class="" type="email" placeholder="Correo" name="cor_usu" id="cor_usu" minlength="5" maxlength="80" required="">

		<input class="" type="password" placeholder="Contraseña" name="cla_usu" id="cla_usu" minlength="8" maxlength="20" required="">

		<button class="" type="submit">Iniciar Sesión</button>

	</form>


	<form action="../contacto/lista.php" method="POST">
		
		<input class="" type="text" placeholder="Numero de usuario" name="fky_usuario" id="fky_usuario" required="">

		<button class="" type="submit" name="ejecutar" value="listar">Lista de Contactos</button>

	</form>

<?php 

	pie($dir4, $dir5);

?>