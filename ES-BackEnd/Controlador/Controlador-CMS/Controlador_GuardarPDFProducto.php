<?php
# definimos la carpeta destino
$carpetaDestino="../../../ES-FrontEnd/Elementos/Imagenes/Productos/Ficha tecnica/";

# si hay algun archivo que subir
if(isset($_FILES["archivo2"])){
    
    # si es un formato pdf
    if($_FILES["archivo2"]["type"]=="application/pdf"){
        
        # si existe la carpeta o se ha creado
        if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
            $origen=$_FILES["archivo2"]["tmp_name"];
            $destino=$carpetaDestino.$_FILES["archivo2"]["name"];

            # movemos el archivo
            if(@move_uploaded_file($origen, $destino)){
                $data = array(
                    "response" => 1,
                    "message" => "El PDF se ha guardado correctamente"                      
                );
            }else{
                $data = array(
                    "response" => 0,
                    "message" => "No se ha podido mover el archivo: ".$_FILES["archivo2"]["name"]                 
                ); 
            }
        }else{
            $data = array(
                "response" => 0,
                "message" => "No se ha podido crear la carpeta: ".$carpetaDestino               
            ); 
        }
    }else{
        $data = array(
            "response" => 0,
            "message" => $_FILES["archivo2"]["name"]." - NO es un archivo PDF"             
        ); 
    }
}else{
    $data = array(
        "response" => 0,
        "message" => "No se ha subido ningun PDF"             
    ); 
}

header('Content-type: application/json; charset=utf-8');

echo json_encode($data);    

?>