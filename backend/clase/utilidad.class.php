<?php 

	class utilidad
	{

		private $nom_ser;
		private $usu_ser;
		private $cla_ser;
		private $nom_bda;
		private $con_bda;
		public  $que_bda;
		public 	$puntero;


		function __construct()
		{
			$this->nom_ser = "localhost";
			$this->usu_ser = "root";
			$this->cla_ser = "";
			$this->nom_bda = "GooContacts";
			$this->conectar();
		}

		public function conectar()
		{
			$this->con_bda = new mysqli($this->nom_ser, $this->usu_ser, $this->cla_ser, $this->nom_bda);
		}

		public function ejecutar()
		{
			return $this->con_bda->query($this->que_bda);
		}

		public function asignar_valor()
		{
			foreach ($_REQUEST as $atributo => $valor)
			{
				$this->$atributo = $valor;
			}
		}

		public function extraer_dato()
		{
			return $this->puntero->fetch_assoc();
		}

		public function estandar()
		{
			// Clases para el Bootstrap 4

			// Inicio Clases Generales
			$this->container		="container-fluid pt-4 mt-4 bg-light";
			$this->container2		="container-fluid pb-5 px-5 mt-1 bg-light";
			$this->container3		="container-fluid p-5 mt-5 bg-light";
			// Fin Clases Generales

			// Inicio Cards Generales
			$this->card				="card mx-auto bg-light border border-success shadow-lg animated pulse";
			$this->titulocard		="card-title text-dark text-center pt-3";
			$this->subtitulocard	="card-subtitle text-muted px-5 text-right";
			$this->footercard		="card-footer text-right";
			// Fin Cards Generales

			// Inicio Inputs Generales
			$this->for 				="text-dark text-left h5";
			$this->small 			="form-text text-muted";
			$this->input_normal		="text-dark form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success";
			$this->input_text		="text-white form-control bg-transparent border border-top-0 border-left-0 border-right-0 border-success";
			// Fin Inputs Generales

			// Inicio Botones Normales Generales
			$this->btn_limpiar		="btn btn-outline-info btn-lg";
			$this->btn_enviar		="btn btn-success btn-lg";
			$this->btn_editar		="btn btn-warning btn-lg";
			$this->btn_restaurar	="btn btn-success btn-lg";
			$this->btn_eliminar		="btn btn-danger btn-lg";
			$this->btn_atras		="btn btn-dark btn-lg";
			// Fin Botones Normales Generales
		}

	}

 ?>