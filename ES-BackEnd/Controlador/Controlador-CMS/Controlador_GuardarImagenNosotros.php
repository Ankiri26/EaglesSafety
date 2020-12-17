<?php
# definimos la carpeta destino
$carpetaDestino="../../../ES-FrontEnd/Elementos/Imagenes/Nosotros/";

$img1=false;
$img2=false;

# si hay algun archivo que subir
if(isset($_FILES["archivo1"])){

    # si es un formato de imagen
    if($_FILES["archivo1"]["type"]=="image/jpeg" || $_FILES["archivo1"]["type"]=="image/pjpeg" || $_FILES["archivo1"]["type"]=="image/png"){
            
            # si existe la carpeta o se ha creado
            if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
                $origen1=$_FILES["archivo1"]["tmp_name"];
                $destino1=$carpetaDestino.$_FILES["archivo1"]["name"];

                # movemos el archivo 1
                if(@move_uploaded_file($origen1, $destino1)){
                    $data = array(
                        "response" => 1,
                        "message" => $_FILES["archivo1"]["name"]." movido correctamente"                      
                    );
										$img1=true;
                }else{
                    $data = array(
                        "response" => 0,
                        "message" => "No se ha podido mover el archivo: ".$_FILES["archivo1"]["name"]                 
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
            "message" => $_FILES["archivo1"]["name"]." - NO es imagen jpg o png"             
        ); 
    }
    
}else{
    $data = array(
        "response" => 0,
        "message" => "No se ha subido ninguna imagen 1"             
    ); 
}


# si hay algun archivo que subir
if(isset($_FILES["archivo2"])){

    # si es un formato de imagen  
		if($_FILES["archivo2"]["type"]=="image/jpeg" || $_FILES["archivo2"]["type"]=="image/pjpeg" || $_FILES["archivo2"]["type"]=="image/png"){

				# si exsite la carpeta o se ha creado
				if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
						$origen2=$_FILES["archivo2"]["tmp_name"];
						$destino2=$carpetaDestino.$_FILES["archivo2"]["name"];

						# movemos el archivo 2
						if(@move_uploaded_file($origen2, $destino2)){
								$data = array(
										"response" => 1,
										"message" => $_FILES["archivo2"]["name"]." movido correctamente"                      
								); 
								$img2=true;
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
						"message" => $_FILES["archivo2"]["name"]." - NO es imagen jpg o png"             
				); 
		}
        

    
}else{
    $data = array(
        "response" => 0,
        "message" => "No se ha subido ninguna imagen 2"             
    ); 
}

if($img1==true || $img2==true){
	if($img1){
			$data = array(
					"response" => 1,
					"message" => $_FILES["archivo1"]["name"]." movido correctamente"                      
			);
	}else{
			$data = array(
					"response" => 1,
					"message" => $_FILES["archivo2"]["name"]." movido correctamente"                      
			); 
	}
}

header('Content-type: application/json; charset=utf-8');

echo json_encode($data);    

?>