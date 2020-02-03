<?php
	
	require("../clase/usuario.class.php");

	$obj_usu = new usuario;

	$correo=$_POST['cor_usu'];
	$clave=$_POST['cla_usu'];

	$obj_usu->puntero=$obj_usu->listar_session($correo, $clave);


	switch ($_REQUEST["ejecutar"])
	{
		case 'sesion':		$usuarios=$obj_usu->extraer_dato();

							if($usuarios['cor_usu']==$correo && $usuarios['cla_usu']==$clave)
							{
								session_start();
								$_SESSION['activo'] = true;
								$_SESSION['correo'] = $correo;
								$_SESSION['codigo'] = $usuarios['cod_usu'];

								header('Location: ../../frontend/vista/inicio.php');
							}
							else
							{
								header('Location: ../../frontend/vista/index.php');
							}						
		break;
	}
?>