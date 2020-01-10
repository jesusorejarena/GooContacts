<?php
    
    class utilidad
    {

        private $nom_ser;
        private $nom_usu;
        private $con_usu;
        private $nom_bda;
        private $con_bda;
        public  $que_bda;
        
        function __construct()
        {
           $this->nom_ser = "localhost";
           $this->nom_usu = "root";
           $this->con_usu = "";
           $this->nom_bda = "GooContacs";
           $this->conectar();
        }
        
        function conectar()
        {
           $this->con_bda = new mysqli($this->nom_ser, $this->nom_usu, $this->con_usu, $this->nom_bda);
        }
        
        function ejecutar()
        {
           echo $this->que_dba;
           return $this->con_bda->query($this->que_bda);
        }

        function asignar_valor()
        {
           foreach ($_REQUEST as $atributo => $valor)
           {
              $this->atributo=$valor;
           }
        }
        
    }
    
?>