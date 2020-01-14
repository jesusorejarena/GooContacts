<?php
    
    require("../clase/contacto.class.php");

    $obj_con = new contacto;

    $obj_con->asignar_valor();

    switch ($_REQUEST["ejecutar"])
    {
    	case 'insertar':	$obj_con->insertar();
    	break;

    	case 'modificar':	$obj_con->modificar();
    	break;

    	case 'eliminar':	$obj_con->eliminar();
    	break;
        
    }
    
?>