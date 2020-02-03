<?php
    
    require("../clase/contacto.class.php");

    $obj_con = new contacto;

    $obj_con->asignar_valor();

    switch ($_REQUEST["ejecutar"])
    {
        case 'insertar':	$obj_con->insertar();
                            header("Location: ../../frontend/vista/inicio.php");
        break;

        case 'modificar':	$obj_con->modificar();
                            header("Location: ../../frontend/vista/inicio.php");
        break;

        case 'eliminar':	$obj_con->eliminar();
                            header("Location: ../../frontend/vista/inicio.php");
        break;
        
    }
    
?>