<?php
		
	require("tema.php");
	require("../../backend/clase/contacto.class.php");

	encabezado("Inicio - GooContacts");

	$obj_con = new contacto;
	$obj_con->estandar();
	$obj_con->fky_usuario=$_SESSION['codigo'];
	$obj_con->asignar_valor();
	$obj_con->puntero=$obj_con->listar();

?>

	<div class="<?php echo $obj_con->container3;?>">
		<div class="row">
			<div class="col-12 mb-4">
				<button class="<?php echo $obj_con->btn_enviar;?> wow animated bounceInLeft m-4" data-toggle="modal" data-target="#ventana1"><i class="icon ion-md-contacts" style="font-size: 20px"></i> Crear nuevo contacto</button>
				<div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="ventana1" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content bg-light">
							<div class="modal-header">
								<h5 class="modal-title h2 text-dark text-center mb-1" id=""><i class="icon ion-md-contact" style="font-size: 32px"></i> Crear contacto</h5>
								<button class="close text-white" data-dismiss="modal" aria-lavel="Cerrar">
									<span aria-hidden="true">&times;</span>
								</button>									
							</div>
							<div class="modal-body">
								<form action="../../backend/controlador/contacto.php" method="POST">
									<div class="form-group">
										<div class="row">
											<div class="col-12 col-md-6">
												
												<input type="hidden" name="fky_usuario" value="<?php echo $_SESSION['codigo']; ?>">

												<label for="nom_con" class="<?php echo $obj_con->for; ?>">Nombre: </label>
												<input class="<?php echo $obj_con->input_normal; ?>" type="text" placeholder="Nombre" name="nom_con" id="nom_con" minlength="3" maxlength="30" required=""><br>

												<label for="nom_con" class="<?php echo $obj_con->for; ?>">Apellido: </label>
												<input class="<?php echo $obj_con->input_normal; ?>" type="text" placeholder="Apellido" name="ape_con" id="ape_con" minlength="3" maxlength="30"><br>

												<label for="nom_con" class="<?php echo $obj_con->for; ?>">Empresa: </label>
												<input class="<?php echo $obj_con->input_normal; ?>" type="text" placeholder="Empresa" name="emp_con" id="emp_con" minlength="2" maxlength="50"><br>

											</div>
											<div class="col-12 col-md-6">

												<label for="nom_con" class="<?php echo $obj_con->for; ?>">Correo: </label>
												<input class="<?php echo $obj_con->input_normal; ?>" type="email" placeholder="Correo" name="cor_con" id="cor_con" minlength="5" maxlength="80"><br>

												<label for="nom_con" class="<?php echo $obj_con->for; ?>">Usuario: </label>
												<input class="<?php echo $obj_con->input_normal; ?>" type="text" placeholder="Usuario" name="usu_con" id="usu_con" minlength="1" maxlength="30"><br>

												<label for="nom_con" class="<?php echo $obj_con->for; ?>">Teléfono: </label>
												<input class="<?php echo $obj_con->input_normal; ?>" type="text" placeholder="Teléfono" name="tel_con" id="tel_con" minlength="11" maxlength="14"><br>

											</div>
										</div>
									</div>
									<div class="form-group text-center">
										<div class="row">
											<div class="col-12">
												<button class="<?php echo $obj_con->btn_enviar;?>" type="submit" name="ejecutar" value="insertar">Crear contacto</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h1 class="h1 pb-5 mb-5 text-center wow animated bounceInDown">Lista de contactos</h1>	
	

	
	
<?php

    echo "	
    
    	<div class='row'>
			
						
    ";

	while (($contacto=$obj_con->extraer_dato())>0)
	{
		echo "				
				<div class='col-6'>
					<div class='$obj_con->card pb-5 mb-5' style='width: 90%'>
						<h2 class='$obj_con->titulocard'>Contacto N° $contacto[cod_con]</h2>
						<div class='card-body'>
							<div class='row'>
								<div class='col-12'>
									<form action='../../backend/controlador/contacto.php' method='POST'>
										<div class='form-group'>
											<div class='row p-3 m-3'>
												<div class='col-12 col-md-6'>

													<input type='hidden' name='cod_con' value='$contacto[cod_con]'>

													<label for='nom_con' class='$obj_con->for'>Nombre: </label>
													<input class='$obj_con->input_normal' type='text' placeholder='Nombre' name='nom_con' id='nom_con' minlength='3' maxlength='30' required='' value='$contacto[nom_con]'><br>

													<label for='ape_con' class='$obj_con->for'>Apellido: </label>
													<input class='$obj_con->input_normal' type='text' placeholder='Apellido' name='ape_con' id='ape_con' minlength='3' maxlength='30' value='$contacto[ape_con]'><br>
																
													<label for='emp_con' class='$obj_con->for'>Empresa: </label>
													<input class='$obj_con->input_normal' type='text' placeholder='Empresa' name='emp_con' id='emp_con' minlength='2' maxlength='50' value='$contacto[emp_con]'><br>
															
												</div>
												<div class='col-12 col-md-6'>

													<label for='cor_con' class='$obj_con->for'>Correo: </label>
													<input class='$obj_con->input_normal' type='email' placeholder='Correo' name='cor_con' id='cor_con' minlength='5' maxlength='80' value='$contacto[cor_con]'><br>

													<label for='usu_con' class='$obj_con->for'>Usuario: </label>
													<input class='$obj_con->input_normal' type='text' placeholder='Usuario' name='usu_con' id='usu_con' minlength='1' maxlength='30' value='$contacto[usu_con]'><br>

													<label for='tel_con' class='$obj_con->for'>Teléfono: </label>
													<input class='$obj_con->input_normal' type='text' placeholder='Teléfono' name='tel_con' id='tel_con' minlength='11' maxlength='14' value='$contacto[tel_con]'><br>

												</div>
											</div>
										</div>
										<div class='form-group text-center'>
											<div class='row p-3 m-3'>
												<div class='col-6'>
															<button class='$obj_con->btn_editar' type='submit' name='ejecutar' value='modificar'>Modificar</button>
												</div>
												<div class='col-6'>
															<button class='$obj_con->btn_eliminar' type='submit' name='ejecutar' value='eliminar'>Eliminar</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

							
		";
	}

	echo "	
				
			</div>
		</div>
	";

	pie();

 ?>

