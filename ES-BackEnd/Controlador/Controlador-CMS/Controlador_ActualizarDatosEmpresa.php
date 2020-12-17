<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_titulo']) && isset($_POST['_correo']) && isset($_POST['_telefono1']) && isset($_POST['_telefono2']) && isset($_POST['_redSocial1']) && isset($_POST['_redSocial2']) && isset($_POST['_direccion']) && isset($_POST['_rutaFotoIcon']) && isset($_POST['_rutaFotoLogo'])){
    
    $titulo = $_POST['_titulo'];
    $correo = $_POST['_correo'];
    $telefono1 = $_POST['_telefono1'];
    $telefono2 = $_POST['_telefono2'];
    $redSocial1 = $_POST['_redSocial1'];
    $redSocial2 = $_POST['_redSocial2'];
    $direccion = $_POST['_direccion'];
    $distrito = $_POST['_distrito'];
    $provincia = $_POST['_provincia'];
    $pais = $_POST['_pais'];
    $rutaFotoIcon = $_POST['_rutaFotoIcon'];
    $rutaFotoLogo = $_POST['_rutaFotoLogo'];
    
    if($Model_CMS->actualizarDatosEmpresa($titulo,$correo,$telefono1,$telefono2,$redSocial1,$redSocial2,$direccion,$distrito,$provincia,$pais,$rutaFotoIcon,$rutaFotoLogo)){
        
        $data = $Model_CMS->actualizarDatosEmpresa($titulo,$correo,$telefono1,$telefono2,$redSocial1,$redSocial2,$direccion,$distrito,$provincia,$pais,$rutaFotoIcon,$rutaFotoLogo);
        
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
