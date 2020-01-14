<?php

	require_once("../../tema.php");

	encabezado("Registrate - GooContacs");

?>

	<h2>Registrate</h2>

	<form action="../../../backend/controlador/usuario.php" method="POST">
		
		<input class="" type="text" placeholder="Nombre" name="nom_usu" id="nom_usu" minlength="3" maxlength="30" required="">

		<input class="" type="email" placeholder="Correo" name="cor_usu" id="cor_usu" minlength="5" maxlength="80" required="">

		<input class="" type="password" placeholder="Contraseña" name="cla_usu" id="cla_usu" minlength="8" maxlength="20" required="">

		<button class="" type="submit" name="ejecutar" value="insertar">Registrar usuario</button>


	</form>

<?php

	pie();

?>