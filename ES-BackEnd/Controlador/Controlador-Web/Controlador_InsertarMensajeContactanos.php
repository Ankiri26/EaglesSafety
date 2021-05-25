<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_Web.php");

$Model_Web = new Model_Web();

if(isset($_POST['_correo']) && isset($_POST['_asunto']) && isset($_POST['_mensaje'])){
    
    $correo = $_POST['_correo'];
    $asunto = $_POST['_asunto'];
    $mensaje = $_POST['_mensaje'];
    
    //MENSAJE A MOSTRAR SI ENCUENTRA RESULTADOS

    if($Model_Web->insertarMensajeContactanos($correo,$asunto,$mensaje)){                        
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