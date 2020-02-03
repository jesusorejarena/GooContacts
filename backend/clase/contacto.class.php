<?php
    
    /*

        cod_con, nom_con, ape_con, emp_con, cor_con, usu_con, tel_con, fky_usuario

        cod_con         INT(11)                 AUTO_INCREMENT      PRIMARY_KEY     -> Codigo del contacto
        nom_con         VARCHAR(30)     NULL                                        -> Nombre del contacto
        ape_con         VARCHAR(30)     NULL                                        -> Apellido del contacto
        emp_con         VARCHAR(50)     NULL                                        -> Empresa del contacto
        cor_con         VARCHAR(80)     NULL                                        -> Correo del contacto
        usu_con         VARCHAR(30)     NULL                                        -> Usuario del contacto
        tel_con         VARCHAR(14)     NULL                                        -> Teléfono del contacto
        fky_usuario     INT(11)                                                     -> fky del usuario

    */

    require_once("utilidad.class.php");

    class contacto extends utilidad
    {

        public $cod_con;
        public $nom_con;
        public $ape_con;
        public $emp_con;
        public $cor_con;
        public $usu_con;
        public $tel_con;
        public $fky_usuario;


        public function insertar()
        {

            $this->que_bda = "insert into contacto
                                (nom_con, 
                                ape_con, 
                                emp_con,
                                cor_con, 
                                usu_con, 
                                tel_con,
                                fky_usuario)
                            values
                                ('$this->nom_con', 
                                '$this->ape_con', 
                                '$this->emp_con', 
                                '$this->cor_con', 
                                '$this->usu_con', 
                                '$this->tel_con',
                                '$this->fky_usuario');";
            
            return $this->ejecutar();

        }// fin de insertar

        public function modificar()
        {

            $this->que_bda = "update contacto
                                set
                                    nom_con='$this->nom_con',
                                    ape_con='$this->ape_con',
                                    emp_con='$this->emp_con',
                                    cor_con='$this->cor_con',
                                    usu_con='$this->usu_con',
                                    tel_con='$this->tel_con'
                                where
                                    cod_con='$this->cod_con';";

            return $this->ejecutar();

        }// fin de modificar

        public function listar()
        {

            $this->que_bda = "select * from contacto
                                where
                                    fky_usuario='$this->fky_usuario';";

            return $this->ejecutar();

        }// fin de listar

        public function eliminar()
        {

            $this->que_bda = "delete from contacto
                                where
                                    cod_con='$this->cod_con';";
                                    
            return $this->ejecutar();

        }// fin de eliminar


        public function filtrar()
        {

            $filto1=($this->cod_con!="")?"and cod_con like '%$this->cod_con%'":"";
            $filto2=($this->nom_con!="")?"and nom_con like '%$this->nom_con%'":"";
            $filto3=($this->ape_con!="")?"and ape_con like '%$this->ape_con%'":"";
            $filto4=($this->emp_con!="")?"and emp_con like '%$this->emp_con%'":"";
            $filto5=($this->cor_con!="")?"and cor_con like '%$this->cor_con%'":"";
            $filto6=($this->usu_con!="")?"and usu_con like '%$this->usu_con%'":"";
            $filto7=($this->tel_con!="")?"and tel_con like '%$this->tel_con%'":"";

            $this->que_bda = "select * from contacto where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7;";

            return $this->ejecutar();

        }// fin de filtrar
        
    }

?>