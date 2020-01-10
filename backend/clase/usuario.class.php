<?php
    
    /*

        cod_usu, nom_usu, cor_usu, cla_usu

        cod_usu     INT(11)             AUTO_INCREMENT      PRIMARY_KEY     -> Codigo del Usuario
        nom_usu     VARCHAR(30)                                             -> Nombre del Usuario
        cor_usu     VARCHAR(80)                             UNIQUE          -> Correo del Usuario
        cla_usu     VARCHAR(20)                                             -> Clave del Usuario

    */

    require_once("utilidad.class.php");

    class usuario extends utilidad
    {

        public function insertar()
        {

            $this->que_dba = "insert into usuario
                                (nom_usu,
                                cor_usu,
                                cla_usu)
                            values
                                ('$this->nom_usu',
                                '$this->cor_usu',
                                '$this->cla_usu');";

            return $this->ejecutar();

        }// fin de insertar

        public function modificar()
        {

            $this->que_dba = "update usuario
                                nom_usu='$this->nom_usu',
                                cla_usu='$this->cla_usu'
                            where
                                cod_usu='$this->cod_usu';";

            $this->ejecutar();

        }// fin de modificar

        public function eliminar()
        {

            $this->que_dba = "delete from usuario
                            where
                                cod_usu='$this->cod_usu';";

            $this->ejecutar();

        }// fin de eliminar

    }
    
?>