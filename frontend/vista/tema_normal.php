<?php 

	function encabezado($titulo)
	{

		echo "
		<!DOCTYPE html>
		<html lang='es'>

			<head>
			
				<meta charset='UTF-8'>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'>
				<link rel='icon' href='../img/logo.png'>
				<link rel='stylesheet' href='../css/Bootstrap-4.4.1/css/bootstrap.min.css'>
				<link rel='stylesheet' href='../css/ionicons/css/ionicons.min.css'>
				<link rel='stylesheet' href='../css/animate/animate.min.css'>
				<link rel='stylesheet' href='../css/wow/animate.css'>
				<link rel='stylesheet' href='../css/estilos.css'>
				<title>$titulo</title>
				
			</head>
			
			<body class='bg-dark m-0 p-0'>

				<!--Comienzo del nav-->
				<div class='container-fluid'>
					<div class='row'>
						<div class='col-12 m-0 p-0'>
							<header class='header'>
								<nav class='navbar navbar-expand-md bg-dark navbar-dark form-control-static fixed-top'>

									<!--Nombre de la app-->
									<a href='index.php' class='navbar-brand animated bounceInLeft px-5'>GooContacts</a>

									<!--Menu de hamburguesa-->
									<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
											<span class='navbar-toggler-icon'></span>
									</button>

									<!--Botones de las secciones-->
									<div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
										<ul class='navbar-nav'>
											<li class='nav-item btn btn-sm'>
												<a href='index.php' class='nav-link'>Inicio</a>
											</li>
											<li class='nav-item btn btn-sm'>
												<a href='acercade.php' class='nav-link'>Acerca de</a>
											</li>
											<li class='nav-item btn btn-sm'>
												<a href='iniciarsesion.php' class='nav-link'>Iniciar Sesión</a>
											</li>
											<li class='nav-item btn btn-sm btn-dark'>
												<a href='registrarse.php' class='nav-link'>Registrate</a>
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

	function pie()
	{

		echo "

				<footer class='bg-dark'>
					<div class='container pt-5 bg-dark text-white justify-content-around'>
						<div class='row'>
							<div class='col-12 text-center h1 animated bounceInLeft px-5'>GooContacts</div>
						</div>
						<div class='row'>
							<div class='col-4'></div>
							<div class='col-4 text-center'>
								<p>Una aplicación de SevenTeen Corporation</p>
								</div>
							<div class='col-4 text-right'>
								<a href='https://www.facebook.com' target='_blank' class='btn btn-dark'><i class='icon ion-logo-facebook' style='font-size: 32px;'></i></a>
								<a href='https://www.instagram.com' target='_blank' class='btn btn-dark'><i class='icon ion-logo-instagram' style='font-size: 32px;'></i></a>
								<a href='https://www.twitter.com' target='_blank' class='btn btn-dark'><i class='icon ion-logo-twitter' style='font-size: 32px;'></i></a>
								<a href='https://www.youtube.com' target='_blank' class='btn btn-dark'><i class='icon ion-logo-youtube' style='font-size: 32px;'></i></a>
								<a href='https://github.com' target='_blank' class='btn btn-dark'><i class='icon ion-logo-github' style='font-size: 32px;'></i></a>
								<a href='https://www.linkedin.com' target='_blank' class='btn btn-dark'><i class='icon ion-logo-linkedin' style='font-size: 32px;'></i></a>
							</div>
						</div>
					</div>
				</footer>
				
				<script src='../css/Bootstrap-4.4.1/js/jquery-3.4.1.min.js'></script>
				<script src='../css/Bootstrap-4.4.1/js/popper.min.js'></script>
				<script src='../css/Bootstrap-4.4.1/js/bootstrap.min.js'></script>
				<script src='../css/wow/wow.min.js'></script>
				<script>new WOW().init();</script>

			</body>
				
		</html>
		";

	}

?>