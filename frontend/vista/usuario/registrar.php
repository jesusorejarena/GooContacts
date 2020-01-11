<?php

	require_once("../../tema.php");

	encabezado("Registrate - GooContacs");

?>

	<h1>Registrate</h1>

	<form action="../../../backend/controlador/usuario.php" method="POST">
		
		<input type="text" placeholder="Nombre" name="nom_usu" id="" minlength="3" maxlength="30" required="">

		<input type="email" placeholder="Correo" name="cor_usu" id="" minlength="5" maxlength="80" required="">

		<input type="password" placeholder="Contraseña" name="cla_usu" id="" minlength="8" maxlength="20" required="">

		<button class="" name="ejecutar" type="submit" value="insertar">Registrar usuario</button>


	</form>

<?php

	pie();

?>