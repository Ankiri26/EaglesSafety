<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_titulo']) && isset($_POST['_codigoEspecifico']) && isset($_POST['_presentacion']) && isset($_POST['_codmarca']) && isset($_POST['_codcategoria']) && isset($_POST['_tags']) && isset($_POST['_descripcion']) && isset($_POST['_imagen']) && isset($_POST['_fichaTecnica'])){
    
    $titulo = $_POST['_titulo'];
    $codigoEspecifico = $_POST['_codigoEspecifico'];
    $presentacion = $_POST['_presentacion'];
    $codmarca = $_POST['_codmarca'];
    $codcategoria = $_POST['_codcategoria'];
    $tags = $_POST['_tags'];
    $descripcion = $_POST['_descripcion'];
    $imagen = $_POST['_imagen'];
    $destacado = 0;
    $fichaTecnica = $_POST['_fichaTecnica'];
    
    //MENSAJE A MOSTRAR SI ENCUENTRA RESULTADOS

    if($Model_CMS->agregarProducto($titulo, $codigoEspecifico,$presentacion,$codmarca,$codcategoria,$tags,$descripcion,$imagen,$destacado,$fichaTecnica)){                        
        $msg = array(
            "response" => 1,
            "message" => "Registro correcto"                      
            );                        
    
    // MENSAJE A MOSTRAR NO ENCUENTRA RESULTADOS    
        
    }else{                        
        $msg = array(
            "response" => 0,
            "message" => "Ingrese correctamente los datos"                    
            );                        
    }
    
// MENSAJE A MOSTRAR SI NO SE REALIZA LA CONSULTA    
    
}else{
    
   $msg = array(
            "response" => 0,
            "message" => "Parametros no encontrados"                      
            );
    
}

header('Content-type: application/json; charset=utf-8');

echo json_encode($msg);   

?>