<?php

/*===========================================
CLASE: MODELO DE LA PAGINA WEB

    ALMACENA LAS FUNCIONES CORRESPONDIENTES
    A LA PAGINA WEB
===========================================*/

class Model_Web{
    
    private $_conexion;
    
    public function __construct() {
        $this->_conexion = new conexion();
    }
    
    /*=======================================================
        MOSTRAR MARCAS
    =======================================================*/
    public function mostrarMarcas(){
        $sql = "SELECT * FROM `marca`";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
	
	/*=======================================================s
        CARGAR DATOS EMPRESA
    =======================================================*/
    public function cargarDatosEmpresa(){
        $sql = "SELECT * FROM `informacion`";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }

    /*=======================================================
        CARGAR DATOS NOSOTROS
    =======================================================*/
    public function cargarDatosNosotros(){
        $sql = "SELECT * FROM nosotros";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
    }

    /*=======================================================s
        CARGAR PRODUCTOS (TODOS)
    =======================================================*/
    public function cargarProductos($categoria){
        $sql = "SELECT * FROM producto P INNER JOIN categoria C ON P.CATCODIGO= C.CATCODIGO INNER JOIN marca M ON P.CODMARCA= M.MARCCODIGO WHERE C.CATNOMBRE ='" . $categoria . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }

    /*=======================================================s
        CARGAR PRODUCTOS DESTACADOS
    =======================================================*/
    public function mostrarProductosDestacados(){
        $sql = "SELECT P.*, M.MARCNOMBRE, (SELECT `componentes`.`COMPDESTACADOS` FROM `componentes`) AS 'COMPDESTACADOS' FROM `producto` P INNER JOIN `marca` M ON P.`CODMARCA`= M.MARCCODIGO WHERE PRODDESTACADO = '1';";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }

    /*=======================================================s
        INSERTAR MENSAJES CONTÁCTANOS
    =======================================================*/
    public function insertarMensajeContactanos($correo,$asunto,$mensaje){
        $sql = "INSERT INTO `contactanos` (`CONTACCODIGO`, `CONTACCORREO`, `CONTACASUNTO`, `CONTACMENSAJE`) VALUES (NULL, '".$correo."', '".$asunto."', '".$mensaje."');";
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
        CONSULTA: MOSTRAR DATOS DEL COMPONENTE 2
    ===========================================*/
  
    public function mostrarDatosComponente2() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT `componente2-adicional`.*, `componentes`.`COMP2` FROM `componente2-adicional`, `componentes`;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
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
        CONSULTA: MOSTRAR CATEGORÍA GENERAL
    ===========================================*/
    
    public function mostrarCategoria() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM categoria";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
        
    }
  
    /*===========================================
        CONSULTA: DETALLE PRODUCTO
    ===========================================*/
    
    public function detalleProducto($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM `producto` INNER JOIN `marca` ON `producto`.`CODMARCA`= `marca`.MARCCODIGO INNER JOIN `categoria` ON `producto`.`CATCODIGO`= `categoria`.`CATCODIGO` WHERE `PRODCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    }
  
    /*=======================================================s
        CARGAR MARCAS DE PRODUCTOS X CATEGORIA
    =======================================================*/
    public function cargarMarcasProductos($categoria){
        $sql = "SELECT DISTINCT  M.* FROM `producto` P INNER JOIN `categoria` C ON P.CATCODIGO = C.CATCODIGO INNER JOIN `marca` M ON P.`CODMARCA`= M.MARCCODIGO WHERE C.`CATNOMBRE`='" . $categoria . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
  
    /*=======================================================s
        CARGAR TAGS DE PRODUCTOS X CATEGORIA
    =======================================================*/
    public function cargarTagsProductos($categoria){
        $sql = "SELECT DISTINCT P.PRODTAGS FROM `producto` P INNER JOIN `categoria` C ON P.CATCODIGO = C.CATCODIGO WHERE C.`CATNOMBRE`='" . $categoria . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
  
    /*=======================================================s
        CARGAR PRODUCTOS (FILTRO MARCA)
    =======================================================*/
    public function filtroMarca($categoria,$marca){
        $sql = "SELECT * FROM producto P INNER JOIN categoria C ON P.CATCODIGO= C.CATCODIGO INNER JOIN marca M ON P.CODMARCA= M.MARCCODIGO WHERE C.CATNOMBRE ='" . $categoria . "' AND P.CODMARCA=" . $marca;
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
  
    /*=======================================================s
        CARGAR PRODUCTOS (FILTRO TAGS)
    =======================================================*/
    public function filtroTag($categoria,$tag){
        $sql = "SELECT * FROM producto P INNER JOIN categoria C ON P.CATCODIGO= C.CATCODIGO INNER JOIN marca M ON P.CODMARCA= M.MARCCODIGO WHERE C.CATNOMBRE ='" . $categoria . "' AND P.PRODTAGS LIKE '%" . $tag . "%' ; ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
  
    /*=======================================================s
        CARGAR PRODUCTOS (FILTRO PRODUCTO)
    =======================================================*/
    public function filtroProducto($nombre){
        $sql = "SELECT * FROM producto P INNER JOIN categoria C ON P.CATCODIGO= C.CATCODIGO INNER JOIN marca M ON P.CODMARCA= M.MARCCODIGO WHERE P.PRODNOMBRE LIKE '%" . $nombre . "%' ; ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
  
  
}
?>