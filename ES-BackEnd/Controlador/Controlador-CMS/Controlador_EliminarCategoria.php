<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_codigo'])){
    
    $nombre = $_POST['_codigo'];
    
    if($Model_CMS->eliminarCategoria($codigo)){
        
        $data = array(
            "response" => 1,
            "message" => "Se ha podido ejecutar la consulta."                      
            );  
        
    }else{
        
        $data = array(
            "response" => 0,
            "message" => "No se ha podido ejecutar la consulta."                      
            );  
    }
}else{
    
    $data = array(
            "response" => 0,
            "message" => "Parametros no encontrados"                      
            );
}

header('Content-type: application/json; charset=utf-8');

echo json_encode($data);   

?>