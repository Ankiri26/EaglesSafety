<?php

if(isset($_POST['_correo']) && isset($_POST['_asunto']) && isset($_POST['_mensaje'])){
    
    $to = "rmanrique@es.com.pe";
    $subject = $_POST['_asunto'];
    $message = $_POST['_mensaje'];
    $headers = "De: " . $_POST['_correo'];
    $all = $headers. " " ."\n".$message;

    if(mail($to, $subject, $all, $headers)){
        $msg = array(
            "response" => 1,
            "message" => "Registro correcto"                      
            );                        
    
    // MENSAJE A MOSTRAR SI NO ENVÍA EL MAIL   
        
    }else{                        
        $msg = array(
            "response" => 0,
            "message" => "No se pudo enviar el mail"                    
            );    
    }

}else{
    $msg = array(
        "response" => 0,
        "message" => "Parametros no encontrados"                      
        );
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($msg); 

?>