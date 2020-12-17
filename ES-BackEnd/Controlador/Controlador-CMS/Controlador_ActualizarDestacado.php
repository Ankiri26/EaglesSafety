<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_codigo']) && isset($_POST['_destacado'])){
    
    $codigo = $_POST['_codigo'];
    $destacado = $_POST['_destacado'];
    
    if($Model_CMS->actualizarDestacado($codigo,$destacado)){

        $data = array(
            "response" => 1,
            "message" => "Informacion ingresada"                      
            );  

    }else{
        $data = array(
            "response" => 0,
            "message" => "Informacion no encontrada"                      
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