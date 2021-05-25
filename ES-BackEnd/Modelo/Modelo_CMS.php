<?php

/*===========================================
CLASE: MODELO DEL CONTROLADOR CMS

    ALMACENA LAS FUNCIONES CORRESPONDIENTES
    AL CMS DE LA PAGINA WEB
===========================================*/

class Model_CMS{
    
    private $_conexion;
    
    public function __construct() {
        $this->_conexion = new conexion();
    }

    /*=======================================================
        LOGIN DEL CMS DE LA PAGINA WEB
    =======================================================*/
    public function login($username, $password) {
        $sql = "SELECT * FROM usuario WHERE USUAUSER='" . $username . "' AND USUAPASSWORD='" . $password . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
    }
    
    /*===========================================
        CONSULTA: MOSTRAR DATOS DE LA EMPRESA
    ===========================================*/
    
    public function mostrarDatosEmpresa() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM informacion";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    } 
  
    /*===========================================
        CONSULTA: MOSTRAR DATOS NOSOTROS
    ===========================================*/
    
    public function mostrarDatosNosotros() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM nosotros";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    } 
    
    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DE LA EMPRESA
    ===========================================*/
    
    public function actualizarDatosEmpresa($titulo,$correo,$telefono1,$telefono2,$redSocial1,$redSocial2,$direccion,$distrito,$provincia,$pais,$rutaFotoIcon,$rutaFotoLogo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `informacion` SET `INFEMPTITULO_PAGINA` = '".$titulo."', `INFEMPICONO` = '".$rutaFotoIcon."', `INFEMPLOGO` = '".$rutaFotoLogo."', `INFEMPCORREO` = '".$correo."', `INFEMPTELEFONO1` = '".$telefono1."', `INFEMPTELEFONO2` = '".$telefono2."', `INFEMPRED_SOCIAL1` = '".$redSocial1."', `INFEMPRED_SOCIAL2` = '".$redSocial2."', `INFEMPDOMICILIO` = '".$direccion."', `INFEMPDISTRITO` = '".$distrito."', `INFEMPPROVINCIA` = '".$provincia."', `INFEMPPAIS` = '".$pais."', `REGCODIGO` = '1' WHERE `INFEMPCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: MOSTRAR DATOS DEL BANNER
    ===========================================*/
    
    public function mostrarDatosBanner($tipo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM banner WHERE BANNTIPO = '".$tipo."'";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    } 
    
    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DEL BANNER 1
    ===========================================*/
    
    public function actualizarBanner1($titulo,$descripcion,$tipo,$rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `banner` SET `BANNTITULO` = '".$titulo."', `BANNTIPO` = '".$tipo."', `BANNDESCRIPCION` = '".$descripcion."', `BANNIMAGEN` = '".$rutaFoto."'  WHERE `BANNCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DEL BANNER 2
    ===========================================*/
    
    public function actualizarBanner2($titulo,$descripcion,$tipo,$rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `banner` SET `BANNTITULO` = '".$titulo."', `BANNTIPO` = '".$tipo."', `BANNDESCRIPCION` = '".$descripcion."', `BANNIMAGEN` = '".$rutaFoto."'  WHERE `BANNCODIGO` = 2;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: MOSTRAR SLIDER DE LA EMPRESA
    ===========================================*/
    
    public function mostrarSliders() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT `slider`.*, `componentes`.`COMPSLIDER` FROM `slider`, `componentes`;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
        
    }
    
    /*===========================================
        CONSULTA: ELIMINAR SLIDER DE LA EMPRESA
    ===========================================*/
    
    public function eliminarSlider($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `slider` WHERE `SLDRCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: AGREGAR SLIDER DE LA EMPRESA
    ===========================================*/
    
    public function agregarSlider($titulo,$descripcion,$rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `slider` (`SLDRCODIGO`, `SLDRNOMBRE`, `SLDRDESCRIPCION`, `SLDRIMAGEN`) VALUES (NULL, '".$titulo."', '".$descripcion."', '".$rutaFoto."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: MOSTRAR REGISTRO DE CONTACTANOS
    ===========================================*/
    
    public function mostrarRegistroContactanos() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT CONTACCORREO, CONTACASUNTO, CONTACMENSAJE FROM contactanos";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    }

    /*===========================================
        CONSULTA: AGREGAR CATEGORÍA GENERAL
    ===========================================*/
    
    public function agregarCategoria($nombre) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `categoria` (`CATCODIGO`, `CATNOMBRE`) VALUES (NULL, '".$nombre."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: MOSTRAR CATEGORÍA GENERAL
    ===========================================*/
    
    public function mostrarCategoria() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT CATCODIGO, CATNOMBRE FROM categoria";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
        
    }

    /*===========================================
        CONSULTA: ELIMINAR CATEGORIA GENERAL
    ===========================================*/
    
    public function eliminarCategoria($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `categoria` WHERE `CATCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DE CATEGORÍA GENERAL
    ===========================================*/
    
    public function actualizarCategoria($codigo,$nombre) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `categoria` SET `CATNOMBRE` = '".$nombre."'  WHERE `CATCODIGO` = '".$codigo."';";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: AGREGAR PRODUCTO
    ===========================================*/
    
    public function agregarProducto($titulo, $codigoEspecifico,$presentacion,$codmarca,$codcategoria,$tags,$descripcion,$imagen,$destacado,$fichaTecnica) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `producto` (`PRODCODIGO`, `PRODNOMBRE`, `PRODCODIGOES`, `PRODIMAGEN`, `PRODPRESENTACION`, `CODMARCA`, `PRODTAGS`, `PRODDESCRIPCION`, `PRODFICHATEC`, `CATCODIGO`, `PRODDESTACADO`) VALUES (NULL, '".$titulo."', '".$codigoEspecifico."', '".$imagen."', '".$presentacion."', '".$codmarca."', '".$tags."', '".$descripcion."', '".$fichaTecnica."', '".$codcategoria."', '".$destacado."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: ELIMINAR PRODUCTO
    ===========================================*/
    
    public function eliminarProducto($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `producto` WHERE `PRODCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }  

    /*===========================================
        CONSULTA: ACTUALIZAR PRODUCTO
    ===========================================*/
    
    public function actualizarProducto($codigo,$titulo, $codigoEspecifico,$presentacion,$codmarca,$codcategoria,$tags,$descripcion,$imagen,$destacado,$fichaTecnica) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `producto` SET `PRODNOMBRE`= '".$titulo."',`PRODCODIGOES`= '".$codigoEspecifico."',`PRODIMAGEN`= '".$imagen."',`PRODPRESENTACION`= '".$presentacion."',`CODMARCA`= '".$codmarca."',`PRODTAGS`= '".$tags."',`PRODDESCRIPCION`= '".$descripcion."',`PRODFICHATEC`= '".$fichaTecnica."',`CATCODIGO`= '".$codcategoria."',`PRODDESTACADO`= '".$destacado."' WHERE `PRODCODIGO` = '".$codigo."';";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: DETALLE PRODUCTO
    ===========================================*/
    
    public function detalleProducto($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM producto WHERE `PRODCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    }

    /*===========================================
        CONSULTA: ELIMINAR MARCA
    ===========================================*/
    
    public function eliminarMarca($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `marca` WHERE `MARCCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: MOSTRAR REGISTRO DE MARCA
    ===========================================*/
    
    public function mostrarRegistrosMarca() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM marca";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
        
    }

    /*===========================================
        CONSULTA: AGREGAR MARCA
    ===========================================*/
    
    public function agregarMarca($nombre, $rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `marca` (`MARCCODIGO`, `MARCNOMBRE`, `MARCIMAGEN`) VALUES (NULL, '".$nombre."', '".$rutaFoto."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: ACTUALIZAR NOSOTROS
    ===========================================*/

    public function actualizarNosotros($rutaMision,$rutaVision,$descripcion,$vision,$mision) {
            
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `nosotros` SET `NOSTMISION_IMAGEN` = '".$rutaMision."', `NOSTVISION_IMAGEN` = '".$rutaVision."', `NOSTDESCRIPCION` = '".$descripcion."', `NOSTVISION` = '".$vision."',  `NOSTMISION` = '".$mision."' WHERE `NOSTCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: ACTUALIZAR SLIDER
    ===========================================*/

    public function actualizarSlider($codigo,$nombre,$descripcion,$rutaFoto) {
            
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `slider` SET `SLDRNOMBRE` = '".$nombre."', `SLDRDESCRIPCION` = '".$descripcion."', `SLDRIMAGEN` = '".$rutaFoto."' WHERE `SLDRCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }  
  
    /*===========================================
        CONSULTA: DETALLE SLIDER
    ===========================================*/
    
    public function detalleSlider($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT `slider`.*, `componentes`.`COMPSLIDER` FROM `slider`, `componentes` WHERE `SLDRCODIGO` = ".$codigo."; ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    }
  
    /*===========================================
        CONSULTA: ACTUALIZAR ESTILO DEL SLIDER
    ===========================================*/
  
    public function actualizarEstiloSlider($estilo){
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `componentes` SET `COMPSLIDER` = '".$estilo."' WHERE `COMPCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();

    }
  
    /*===========================================
        CONSULTA: MOSTRAR DATOS DEL COMPONENTE 1
    ===========================================*/
  
    public function mostrarDatosComponente1() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT `componente1-presentacion`.*, `componentes`.`COMP1` FROM `componente1-presentacion`, `componentes`;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();        
    }

    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DEL COMPONENTE 1
    ===========================================*/
  
    public function actualizarDatosComponente1($titulo,$subtitulo,$descripcion,$imagen,$destacamos,$caracteristica1,$caracteristica2,$caracteristica3,$caracteristica4,$caracteristica5,$caracteristica6) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `componente1-presentacion` SET `C1TITULO` = '".$titulo."', `C1SUBTITULO` = '".$subtitulo."', `C1DESCRIPCION` = '".$descripcion."',  `C1IMAGEN` = '".$imagen."', `C1DESTACAMOS` = '".$destacamos."', `C1CARACTERISTICA1` = '".$caracteristica1."', `C1CARACTERISTICA2` = '".$caracteristica2."',  `C1CARACTERISTICA3` = '".$caracteristica3."', `C1CARACTERISTICA4` = '".$caracteristica4."', `C1CARACTERISTICA5` = '".$caracteristica5."',  `C1CARACTERISTICA6` = '".$caracteristica6."' WHERE `C1CODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();

    }

    /*===========================================
        CONSULTA: ACTUALIZAR ESTILO DEL COMPONENTE 1
    ===========================================*/
  
    public function actualizarEstiloComponente($estilo){
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `componentes` SET `COMP1` = '".$estilo."' WHERE `COMPCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();

    }
  
    /*===========================================
        CONSULTA: MOSTRAR DATOS DEL COMPONENTE 2
    ===========================================*/
  
    public function mostrarDatosComponente2() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT `componente2-adicional`.*, `componentes`.`COMP2` FROM `componente2-adicional`, `componentes`;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();        
    }
  
    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DEL COMPONENTE 2
    ===========================================*/
  
    public function actualizarDatosComponente2($titulo,$descripcion,$imagen1,$imagen2,$T1Titulo,$T1Descripcion,$T2Titulo,$T2Descripcion,$T3Titulo,$T3Descripcion) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `componente2-adicional` SET `C2TITULO` = '".$titulo."', `C2DESCRIPCION` = '".$descripcion."', `C2IMAGEN1` = '".$imagen1."',  `C2IMAGEN2` = '".$imagen2."', `C2T1TITULO` = '".$T1Titulo."', `C2T1DESCRIPCION` = '".$T1Descripcion."', `C2T2TITULO` = '".$T2Titulo."',  `C2T2DESCRIPCION` = '".$T2Descripcion."', `C2T3TITULO` = '".$T3Titulo."', `C2T3DESCRIPCION` = '".$T3Descripcion."' WHERE `C2CODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();

    }
  
    /*===========================================
        CONSULTA: ACTUALIZAR ESTILO DEL COMPONENTE 2
    ===========================================*/
  
    public function actualizarEstiloComponente2($estilo){
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `componentes` SET `COMP2` = '".$estilo."' WHERE `COMPCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();

    }
  
    /*=======================================================s
        CONSULTA: CARGAR PRODUCTOS DESTACADOS
    =======================================================*/
    public function mostrarProductosDestacados(){
        $sql = "SELECT P.*, C.CATNOMBRE, M.MARCNOMBRE  FROM `producto` P INNER JOIN `categoria` C ON P.CATCODIGO = C.CATCODIGO INNER JOIN `marca` M ON P.`CODMARCA` = M.MARCCODIGO WHERE P.PRODDESTACADO = '1' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
  
    /*=======================================================s
        CONSULTA: CARGAR PRODUCTOS (TODOS)
    =======================================================*/
    public function cargarProductos($categoria){
        $sql = "SELECT P.*, C.CATNOMBRE FROM producto P INNER JOIN categoria C ON P.CATCODIGO= C.CATCODIGO WHERE C.CATNOMBRE ='" . $categoria . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
  
    /*===========================================
        CONSULTA: ACTUALIZAR ESTILO DESTACADOS
    ===========================================*/
  
    public function actualizarEstiloDestacados($estilo){
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `componentes` SET `COMPDESTACADOS` = '".$estilo."' WHERE `COMPCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();

    }
  
    /*===========================================
        CONSULTA: MOSTRAR DATOS DE LOS COMPONENTES
    ===========================================*/
  
    public function mostrarDatosComponentes() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM `componentes`;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();        
    }
  
    /*===========================================
        CONSULTA: MOSTRAR DATOS DE LA PALETA DE COLORES VIGENTE
    ===========================================*/
  
    public function mostrarColoresWeb() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM `paleta-colores` ORDER by COLORCODIGO DESC LIMIT 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();        
    }
  
    /*===========================================
        CONSULTA: AGREGAR PALETA DE COLORES
    ===========================================*/
  
    public function agregarPaletaColores($primary, $secundary,$enfasis1,$enfasis2,$enfasis3,$light1,$light2,$light3) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `paleta-colores`(`COLORCODIGO`, `COLORPRIMARY`, `COLORSECUNDARY`, `COLORENFASIS1`, `COLORENFASIS2`, `COLORENFASIS3`, `COLORLIGHT1`, `COLORLIGHT2`, `COLORLIGHT3`) VALUES (NULL,'".$primary."','".$secundary."','".$enfasis1."','".$enfasis2."','".$enfasis3."','".$light1."','".$light2."','".$light3."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();        
    }
  
    /*===========================================
        CONSULTA: MOSTRAR TODAS LAS PALETAS DE COLORES
    ===========================================*/
  
    public function mostrarPaletasColores() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM `paleta-colores`;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();        
    }
  
    /*===========================================
        CONSULTA: ACTUALIZAR PRODUCTOS DESTACADOS
    ===========================================*/
  
    public function actualizarDestacado($codigo,$destacado){
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `producto` SET `PRODDESTACADO` = '".$destacado."'  WHERE `PRODCODIGO` = '".$codigo."';";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();

    }

}

?>