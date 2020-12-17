<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_titulo']) && isset($_POST['_descripcion']) && isset($_POST['_imagen1']) && isset($_POST['_imagen2']) && isset($_POST['_T1Titulo']) && isset($_POST['_T1Descripcion']) && isset($_POST['_T2Titulo']) && isset($_POST['_T2Descripcion']) && isset($_POST['_T3Titulo']) && isset($_POST['_T3Descripcion'])){
    
    $titulo = $_POST['_titulo'];
    $descripcion = $_POST['_descripcion'];
    $imagen1 = $_POST['_imagen1'];
    $imagen2 = $_POST['_imagen2'];
    $T1Titulo = $_POST['_T1Titulo'];
    $T1Descripcion = $_POST['_T1Descripcion'];
    $T2Titulo = $_POST['_T2Titulo'];
    $T2Descripcion = $_POST['_T2Descripcion'];
    $T3Titulo = $_POST['_T3Titulo'];
    $T3Descripcion = $_POST['_T3Descripcion'];

    
    if($Model_CMS->actualizarDatosComponente2($titulo,$descripcion,$imagen1,$imagen2,$T1Titulo,$T1Descripcion,$T2Titulo,$T2Descripcion,$T3Titulo,$T3Descripcion)){
        
        $data = $Model_CMS->actualizarDatosComponente2($titulo,$descripcion,$imagen1,$imagen2,$T1Titulo,$T1Descripcion,$T2Titulo,$T2Descripcion,$T3Titulo,$T3Descripcion);
        
    }else{
        
        $data = array(
            "response" => 0,
            "message" => "Información no encontrada"                      
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