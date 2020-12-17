<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_titulo']) && isset($_POST['_descripcion']) && isset($_POST['_tipo']) && isset($_POST['_rutaFoto'])){
    
    $titulo = $_POST['_titulo'];
    $descripcion = $_POST['_descripcion'];
    $tipo = $_POST['_tipo'];
    $rutaFoto = $_POST['_rutaFoto'];
    
    if($tipo=="B1"){
        
        if($Model_CMS->actualizarBanner1($titulo,$descripcion,$tipo,$rutaFoto)){
            $data = $Model_CMS->actualizarBanner1($titulo,$descripcion,$tipo,$rutaFoto);
        }else{
            $data = array(
                "response" => 0,
                "message" => "Informacion no encontrada"                      
                );  
        }
        
    }else{
        
        if($Model_CMS->actualizarBanner2($titulo,$descripcion,$tipo,$rutaFoto)){
            $data = $Model_CMS->actualizarBanner2($titulo,$descripcion,$tipo,$rutaFoto);
        }else{
            $data = array(
                "response" => 0,
                "message" => "Informacion no encontrada"                      
                );  
        }
        
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
