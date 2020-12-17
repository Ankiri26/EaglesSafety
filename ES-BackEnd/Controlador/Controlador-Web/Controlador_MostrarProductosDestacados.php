<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO GET

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_Web.php");

$Model_Web = new Model_Web();
   
if($Model_Web->mostrarProductosDestacados()){                        
    
        $array = $Model_Web->mostrarProductosDestacados();  

}else{                        
    $array = array(
        "response" => 0,
        "message" => "Informacion no encontrada"                    
        );                        
}

header('Content-type: application/json; charset=utf-8');

echo json_encode($array);   

?>