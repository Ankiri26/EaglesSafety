<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_titulo']) && isset($_POST['_subtitulo']) && isset($_POST['_descripcion']) && isset($_POST['_imagen']) && isset($_POST['_destacamos']) && isset($_POST['_caracteristica1']) && isset($_POST['_caracteristica2']) && isset($_POST['_caracteristica3']) && isset($_POST['_caracteristica4']) && isset($_POST['_caracteristica5']) && isset($_POST['_caracteristica6'])){
    
    $titulo = $_POST['_titulo'];
    $subtitulo = $_POST['_subtitulo'];
    $descripcion = $_POST['_descripcion'];
    $imagen = $_POST['_imagen'];
    $destacamos = $_POST['_destacamos'];
    $caracteristica1 = $_POST['_caracteristica1'];
    $caracteristica2 = $_POST['_caracteristica2'];
    $caracteristica3 = $_POST['_caracteristica3'];
    $caracteristica4 = $_POST['_caracteristica4'];
    $caracteristica5 = $_POST['_caracteristica5'];
    $caracteristica6 = $_POST['_caracteristica6'];

    
    if($Model_CMS->actualizarDatosComponente1($titulo,$subtitulo,$descripcion,$imagen,$destacamos,$caracteristica1,$caracteristica2,$caracteristica3,$caracteristica4,$caracteristica5,$caracteristica6)){
        
        $data = $Model_CMS->actualizarDatosComponente1($titulo,$subtitulo,$descripcion,$imagen,$destacamos,$caracteristica1,$caracteristica2,$caracteristica3,$caracteristica4,$caracteristica5,$caracteristica6);
        
    }else{
        
        $data = array(
            "response" => 0,
            "message" => "Productos no encontrados"                      
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