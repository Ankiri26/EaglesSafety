<?php
# definimos la carpeta destino
$carpetaDestino="../../../ES-FrontEnd/Elementos/Imagenes/Marcas/";

# si hay algun archivo que subir
if(isset($_FILES["archivo"])){
    
    # si es un formato de imagen
    if($_FILES["archivo"]["type"]=="image/jpeg" || $_FILES["archivo"]["type"]=="image/pjpeg" || $_FILES["archivo"]["type"]=="image/png"){
        
        # si exsite la carpeta o se ha creado
        if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
            $origen=$_FILES["archivo"]["tmp_name"];
            $destino=$carpetaDestino.$_FILES["archivo"]["name"];

            # movemos el archivo
            if(@move_uploaded_file($origen, $destino)){
                $data = array(
                    "response" => 1,
                    "message" => "La imagen se ha guardado correctamente"                      
                );
            }else{
                $data = array(
                    "response" => 0,
                    "message" => "No se ha podido mover el archivo: ".$_FILES["archivo"]["name"]                 
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
            "message" => $_FILES["archivo"]["name"]." - NO es imagen jpg o png"             
        ); 
    }
}else{
    $data = array(
        "response" => 0,
        "message" => "No se ha subido ninguna imagen"             
    ); 
}

header('Content-type: application/json; charset=utf-8');

echo json_encode($data);    

?>