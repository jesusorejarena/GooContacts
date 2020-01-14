<?php 

	function encabezado($titulo, $dir1, $dir2, $dir3, $dir4, $dir5, $dir6, $dir11, $dir12, $dir13, $dir14)
	{

		echo "
		<!DOCTYPE html>
		<html lang='es'>

			<head>
			
				<meta charset='UTF-8'>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'>
				<link rel='icon' href='$dir1'>
				<link rel='stylesheet' href='$dir2'>
				<link rel='stylesheet' href='$dir3'>
				<link rel='stylesheet' href='$dir4'>
				<link rel='stylesheet' href='$dir5'>
				<link rel='stylesheet' href='$dir6'>
				<title>$titulo</title>
				
			</head>
			
			<body class='m-0 p-0'>

				<!--Comienzo del nav-->
				<div class='container-fluid'>
					<div class='row'>
						<div class='col-12 m-0 p-0'>
							<header class='header'>
								<nav class='navbar navbar-expand-md bg-info navbar-dark form-control-static fixed-top'>

									<!--Nombre de la app-->
									<a href='$dir11' class='navbar-brand animated bounceInLeft px-5'>GooContacs</a>

									<!--Menu de hamburguesa-->
									<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
											<span class='navbar-toggler-icon'></span>
									</button>

									<!--Botones de las secciones-->
									<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
										<ul class='navbar-nav'>
											<li class='nav-item btn btn-sm'>
												<a href='$dir11' class='nav-link active'>Inicio</a>
											</li>
											<li class='nav-item btn btn-sm'>
												<a href='$dir12' class='nav-link'>Acerca de</a>
											</li>
											<li class='nav-item btn btn-sm'>
												<a href='$dir13' class='nav-link'>Iniciar Sesión</a>
											</li>
											<li class='nav-item btn btn-sm btn-outline-primary'>
												<a href='$dir14' class='nav-link'>Registrate</a>
											</li>
										</ul>
									</div>
								</nav>
							</header>
						</div>
					</div>
				</div>
				<!--Termina el nav-->
		";

	}

	function pie($dir7, $dir8, $dir9, $dir10)
	{

		echo "
				
				<script src='$dir7'></script>
				<script src='$dir8'></script>
				<script src='$dir9'></script>
				<script src='$dir10'></script>
				<script>new WOW().init();</script>

			</body>
				
		</html>
		";

	}

?>