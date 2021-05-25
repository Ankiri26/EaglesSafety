<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO GET

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();
   
if($Model_CMS->mostrarProductosDestacados()){                        
    
        $array = $Model_CMS->mostrarProductosDestacados();  

}else{                        
    $array = array(
        "response" => 0,
        "message" => "Informacion no encontrada"                    
        );                        
}

header('Content-type: application/json; charset=utf-8');

echo json_encode($array);   

?>