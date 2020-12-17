<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_rutaMision']) && isset($_POST['_rutaVision']) && isset($_POST['_descripcion']) && isset($_POST['_vision']) && isset($_POST['_mision'])){
    
    $rutaMision = $_POST['_rutaMision'];
    $rutaVision = $_POST['_rutaVision'];
    $descripcion = $_POST['_descripcion'];
    $vision = $_POST['_vision'];
    $mision = $_POST['_mision'];
    
    if($Model_CMS->actualizarNosotros($rutaMision,$rutaVision,$descripcion,$vision,$mision)){

        $data = array(
            "response" => 1,
            "message" => "Actualización correcta"                      
            ); 
        
        
    }else{
        
        $data = array(
            "response" => 0,
            "message" => "No se actualizó"                      
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