<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_primary']) && isset($_POST['_secundary']) && isset($_POST['_enfasis1']) && isset($_POST['_enfasis2']) && isset($_POST['_enfasis3']) && isset($_POST['_light1']) && isset($_POST['_light2']) && isset($_POST['_light3'])){
    
    $primary = $_POST['_primary'];
    $secundary = $_POST['_secundary'];
    $enfasis1 = $_POST['_enfasis1'];
    $enfasis2 = $_POST['_enfasis2'];
    $enfasis3 = $_POST['_enfasis3'];
    $light1 = $_POST['_light1'];
    $light2 = $_POST['_light2'];
    $light3 = $_POST['_light3'];
    
    //MENSAJE A MOSTRAR SI ENCUENTRA RESULTADOS

    if($Model_CMS->agregarPaletaColores($primary,$secundary,$enfasis1,$enfasis2,$enfasis3,$light1,$light2,$light3)){                        
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