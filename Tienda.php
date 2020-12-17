<!DOCTYPE html>
<html lang="es">
<head>

    <!--TITULO DE LA VISTA -->
    <title>Productos - Eagles Safety EIRL</title>

    <!-- CONTENIDO GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/config.php";?>
    
</head>

<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>

    <!-- ENCABEZADO-->  
    <div class="container-fluid" style="height: 110px; background: url('ES-FrontEnd/Elementos/Imagenes/Encabezados/Contactanos.jpg') no-repeat center; background-size: cover;"></div>  
    
    <!-- MENU DE UBICACION-->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
      
      <div class="mr-auto d-none d-md-inline-flex">
        <nav aria-label="breadcrumb">
          <ol id="menuUbicacion" class="breadcrumb clearfix pt-0"></ol>
        </nav>
      </div>
      
      <form class="form-inline my-2 mx-auto mx-md-0 row">
        <input id="filtroProducto" class="col-10 form-control" type="text" placeholder="Buscar producto" aria-label="Search">
        <button type="button" class="col btn bg-dark2 white-text p-2" onclick="buscarProducto()"><i class="fas fa-search"></i></button>
      </form>
      
    </nav>

    <!-- CONTENIDO-->
    <section class="container-fluid my-4" style="margin: auto; width: 95%;">
      <div class="row">
        
        <!--CATEGORIAS-->  
        <div id="categorias" class="col-12 d-none d-lg-block p-0 my-0 py-0">
          <ul class="row justify-content-center p-0"></ul>
        </div>

        <!--FILTROS-->  
        <div class="filtros col-lg-3 d-none d-lg-block bg-light1 p-4">

            <!--TITULO-->  
            <div class="font-dark4">
                <h6 class="h6-responsive font-weight-bold"><i class="fas fa-sliders-h"></i> FILTROS</h6>
            </div>

            <!--OPCIONES DE FILTROS-->  
            <div class="">

                <!--FILTROS APLICADOS-->  
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold">Filtros aplicados</p>
                  <div class="filtrosAplicados mt-3"></div>
                  <div class="text-center my-3">
                    <a class="font-primary" onclick="limpiarFiltros()">Limpiar filtros</a>
                  </div>

                </div>

                <!--MARCAS-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Marcas</p>
                  <ul class="marcas list-group"></ul>
                </div>

                <!--DISPONIBILIDAD-->  
                <!--<hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Disponibilidad</p>
                  <ul class="disponibilidad list-group">
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="disponibilidad1" name="disponibilidad">
                              <label class="custom-control-label pt-1 pl-2" for="disponibilidad1">Disponible</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="disponibilidad2">
                              <label class="custom-control-label pt-1 pl-2" for="disponibilidad2" name="disponibilidad">No disponible</label>
                          </div>
                      </li>
                  </ul>
                </div>
                -->
                <!--FICHA TECNICA-->  
                <!--<hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Ficha técnica</p>
                  <ul class="fichaTecnica list-group">
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="fichaTecnica1" name="fichaTecnica">
                              <label class="custom-control-label pt-1 pl-2" for="fichaTecnica1">Disponible</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="fichaTecnica2">
                              <label class="custom-control-label pt-1 pl-2" for="fichaTecnica2" name="fichaTecnica">No disponible</label>
                          </div>
                      </li>
                  </ul>
                </div>
                -->
                <!--TAGS-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Tags</p>
                  <ul class="tags list-group"></ul>
                </div>

            </div>

        </div>
        <div class="filtros modal fade" id="modalFiltros" tabindex="-1" role="dialog" aria-labelledby="modalFiltros"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
             
              <!--TITULO--> 
              <div class="modal-header"> 
                <div class="font-dark4">
                    <h6 class="h6-responsive font-weight-bold"><i class="fas fa-sliders-h"></i> FILTROS</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <!--OPCIONES DE FILTROS-->  
              <div class="modal-body">

                <!--FILTROS APLICADOS-->  
                <div class="mb-3">
                  <p class="font-dark4 h6-responsive font-weight-bold">Filtros aplicados</p>
                  <div class="filtrosAplicados mt-3"></div>
                  <div class="text-center my-3">
                    <a class="font-primary" onclick="limpiarFiltros()">Limpiar filtros</a>
                  </div>

                </div>

                <!--MARCAS-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Marcas</p>
                  <ul class="marcas list-group"></ul>
                </div>

                <!--TAGS-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Tags</p>
                  <ul class="tags list-group"></ul>
                </div>

              </div>

            </div>
          </div>
        </div>
        
        <!-- PRODUCTOS--> 
        <div class="col-12 col-lg-9">

            <!-- BOTON MOSTRAR CATEGORIAS/FILTROS -->
            <div class="d-flex align-items-center mb-3 d-block d-lg-none">
               
                <a id="filtroCategorias" class="btn bg-primary m-0 mr-2 py-2 px-2">
                    <i class="fas fa-boxes mr-2"></i>CATEGORIAS
                </a>  
                
                <button type="button" class="btn bg-primary m-0 py-2 px-2" data-toggle="modal" data-target="#modalFiltros">
                    <i class="fa fa-filter mr-2"></i>FILTROS
                </button>
                
            </div>
            
            <!-- FILTRO CATEGORIAS--> 
            <div id="filtroCategoriasContent" class="d-none"> 
              <ul class="row justify-content-center p-0"></ul>
            </div>

            <!-- PRODUCTOS--> 
            <div class="tab-content">
              <div class="tab-pane fade show active" id="producto" role="tabpanel">
                <div id="content" class="row p-0 mx-1"></div>
              </div>
            </div>

            <!-- PAGINACION-->
            <div class="d-flex align-items-center flex-wrap justify-content-center py-4">
                <div id="PAGINACION"></div>      
            </div>

        </div>

      </div>
    </section>

    <!-- DESCRIPCION--> 
    <div class="modal fade" id="modalDescripcion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
    </div></div>

    <!-- FOOTER-->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>    
    
    <!-- CONTENT-->
    
    <!-- JS DEL ARCHIVO-->
    <script type="text/javascript">

      //--OBTENER CATEGORIA--
      <?php $categoria = isset($_GET['catNombre'])? $_GET['catNombre'] : "no existe" ; ?>
      if( "<?php echo $categoria; ?>" == "no existe" ){
        categoria="Protección Anticaída";
      }else{
        categoria = "<?php echo $categoria; ?>" ;
      }

      //--DEFINIR VARIABLES Y FUNCIONES--
      var dataFiltro = [];
      var totalProductos;
      var paginasProductos=0;
      ubicacionMenu(categoria);
      vWeb.mostrarProductosXCategoria(categoria);
      vWeb.mostrarMarcasFiltros(categoria);
      vWeb.mostrarTagsFiltros(categoria);
      vWeb.mostrarCategoriasFiltros(categoria);

      
      //--OBTENER PRODUCTO--
      var producto="";
      <?php $producto = isset($_GET['producto'])? $_GET['producto'] : "no existe" ; ?>
      if( "<?php echo $producto; ?>" != "no existe" ){
        producto = "<?php echo $producto; ?>" ;
        buscarProducto();
      }
      
      
      //--SELECCIONAR CATEGORIA--
      $('body').on('click', '#categorias li', function (e) {
          e.preventDefault()
          categoria=$(this).text();
          limpiarFiltros();
          vWeb.mostrarProductosXCategoria(categoria);
          vWeb.mostrarMarcasFiltros(categoria);
          vWeb.mostrarTagsFiltros(categoria);
          ubicacionMenu(categoria);
          $(this).tab('show');

          $("#categorias li").each(function() { 
              $(this).removeClass("active");
              if ($(this).text().toLowerCase() == categoria.toLowerCase() ) { 
                  $(this).addClass("active");
              }
          }); 
      });
      $('body').on('click', '#filtroCategoriasContent li', function (e) {
          e.preventDefault()
          $('#filtroCategoriasContent').addClass('d-none');
          categoria=$(this).text();
          limpiarFiltros();
          vWeb.mostrarProductosXCategoria(categoria);
          vWeb.mostrarMarcasFiltros(categoria);
          vWeb.mostrarTagsFiltros(categoria);
          ubicacionMenu(categoria);
          $(this).tab('show');

          $("#categorias li").each(function() { 
              $(this).removeClass("active");
              if ($(this).text().toLowerCase() == categoria.toLowerCase() ) { 
                  $(this).addClass("active");
              }
          }); 

      });
      
      //--AGREGAR FILTRO SELECCIONADO [MARCA]--
      $('body').on('change', '.marcas li input:checked', function (e) {
          e.preventDefault();
        
          var id=$(this).attr("id");
          $("."+id).prop('checked',true);
        
          if($(".filtrosAplicados").html() == ""){
            filtroMarca(true, $(this).attr("id"));
          }else{
            filtroMarca(false, $(this).attr("id"));
          }
        
          $(this).prop('disabled', true);
          $(".filtrosAplicados").append("<div id='"+$(this).next().html()+"' class='chip white border rounded-pill px-3 my-1 text-break'><span class='font-primary pr-1'>Marca</span>"+$(this).next().html()+"<i class='close fas fa-times'></i></div>");
          
      });
      
      //--AGREGAR FILTRO SELECCIONADO [TAGS]--
      $('body').on('change', '.tags li input:checked', function (e) {
          e.preventDefault();
        
          var id=$(this).attr("id");
          $("."+$.trim(id)).prop('checked',true);
        
          if($(".filtrosAplicados").html() == ""){
            filtroTags(true, $(this).attr("id"));
          }else{
            filtroTags(false, $(this).attr("id"));
          }
        
          $(this).prop('disabled', true);
          $(".filtrosAplicados").append("<div id='"+$(this).next().html()+"' class='chip white border rounded-pill px-3 my-1'><span class='font-primary pr-1'>Tag</span>"+$(this).next().html()+"<i class='close fas fa-times'></i></div>");
        
      });
      
      //--ELIMINAR FILTRO SELECCIONADO [MARCA]--
      $('body').on('click', '.filtrosAplicados .chip .close', function (e) {
          e.preventDefault();
          var filtro = $(this).parent().attr("id");
          $(".marcas li input:checked").each(function() {
            if( filtro == $(this).next().html() ){
              $(this).prop('disabled', false);
              $(this).prop('checked',false);
            }
          });
          $(this).parent(".chip").remove();
          eliminarFiltroMarca(filtro);
      });
      
      //--ELIMINAR FILTRO SELECCIONADO [TAGS]--
      $('body').on('click', '.filtrosAplicados .chip .close', function (e) {
          e.preventDefault();
          var filtro = $(this).parent().attr("id");
          $(".tags li input:checked").each(function() {
            if( filtro == $(this).next().html() ){
              $(this).prop('disabled', false);
              $(this).prop('checked',false);
            }
          });
          $(this).parent(".chip").remove();
          eliminarFiltroTag(filtro);
      });

      //--MOSTRAR/OCULTAR CATEGORIAS--
      $("#filtroCategorias").click(function() {
          $("#filtroCategoriasContent").toggleClass("d-none");
      }); 
      
      //ELIMINAR FILTROS
      function limpiarFiltros(){
          $(".filtros li input:checked").each(function() {
              $(this).prop('disabled', false);
              $(this).prop('checked',false);
          });
          $(".chip").remove();
          vWeb.mostrarProductosXCategoria(categoria);
          dataFiltro = [];
      }
      
      //-UBICACION DEL MENU--
      function ubicacionMenu(categoria){
          var ubicacion= "";
          ubicacion += "<li class='breadcrumb-item'><i class='fa fa-home fa-lg mt-1 mr-2 white-text' aria-hidden='true'></i><a class='white-text' href='index.php'>Inicio</a></li>  \
            <li class='breadcrumb-item'><a class='white-text' href='Tienda.php'>Productos</a></li>  \
            <li class='breadcrumb-item active'>"+categoria+"</li>";
          $("#menuUbicacion").html(ubicacion);
        
      }
      
      /* --> MOSTRAR DATOS DEL FILTRO NOMBRE DEL PRODUCTO */ 
      function buscarProducto(){
          var nombre="";
        
          producto==""? nombre=$("#filtroProducto").val() : nombre=producto;
        
          var $datos={
              '_nombre': nombre
          }
          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_FiltroProducto.php',
              type: 'POST',
              data: $datos,
              datatype:'json',
              error: function(error){	
                  if(error.status == 401){
                      console.log("Categoria incorrecta");
                  }
                  else{
                      console.log("Error no identificado");
                  }
              },
              success: function(datos){
                  data=datos;
                  if(datos.response==0){
                      var vacio="<div class='container text-center m-5 p-5'><h1 class='h1-responsive font-weight-bold grey-text'>NO DISPONIBLE </h1><i class='fa fa-lock fa-4x p-5 grey-text'></i></div>"
                      $("#content").html(vacio);
                  }else{
                      dataFiltro=datos;
                      generarPaginacion(datos);
                    
                      $("#categorias li").each(function() { 
                          $(this).removeClass("active");
                      }); 
                    
                      producto="";
                    
                  }
              }
          });
      }   
      
      /* --> MOSTRAR DATOS DEL FILTRO MARCA */ 
      function filtroMarca(dat, marca){
          var $datos={
              '_categoria': categoria,
              '_marca': marca
          }
          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_FiltroMarca.php',
              type: 'POST',
              data: $datos,
              datatype:'json',
              error: function(error){	
                  if(error.status == 401){
                      console.log("Categoria incorrecta");
                  }
                  else{
                      console.log("Error no identificado");
                  }
              },
              success: function(datos){
                  data=datos;
                  if(datos.response==0){
                      var vacio="<div class='container text-center m-5 p-5'><h1 class='h1-responsive font-weight-bold grey-text'>NO DISPONIBLE </h1><i class='fa fa-lock fa-4x p-5 grey-text'></i></div>"
                      $("#content").html(vacio);
                  }else{
                      $.merge(dataFiltro, datos);
                      
                      var hash = {};
                      dataFiltro = dataFiltro.filter(function(current) {
                        var exists = !hash[current.PRODCODIGO];
                        hash[current.PRODCODIGO] = true;
                        return exists;
                      });
                      
                      dat==true? generarPaginacion(datos) : generarPaginacion(dataFiltro);
                  }
              }
          });
      }
      
      /* --> ELIMINAR DATOS DEL FILTRO MARCA */ 
      function eliminarFiltroMarca(marca){

        for(var i=0;i<dataFiltro.length;i++){
          if (dataFiltro[i].MARCNOMBRE == marca){
            delete dataFiltro[i];
          }
        }
        
        dataFiltro = dataFiltro.filter(Boolean);
        
        if($(".filtrosAplicados").html() == ""){
          limpiarFiltros();
        }else{
          generarPaginacion(dataFiltro);
        }
        
      }
      
      /* --> MOSTRAR DATOS DEL FILTRO TAG */ 
      function filtroTags(dat, tag){
          var $datos={
              '_categoria': categoria,
              '_tag': tag
          }
          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_FiltroTags.php',
              type: 'POST',
              data: $datos,
              datatype:'json',
              error: function(error){	
                  if(error.status == 401){
                      console.log("Categoria incorrecta");
                  }
                  else{
                      console.log("Error no identificado");
                  }
              },
              success: function(datos){
                  data=datos;
                  if(datos.response==0){
                      var vacio="<div class='container text-center m-5 p-5'><h1 class='h1-responsive font-weight-bold grey-text'>NO DISPONIBLE </h1><i class='fa fa-lock fa-4x p-5 grey-text'></i></div>"
                      $("#content").html(vacio);
                  }else{
                      $.merge(dataFiltro, datos);
                    
                      var hash = {};
                      dataFiltro = dataFiltro.filter(function(current) {
                        var exists = !hash[current.PRODCODIGO];
                        hash[current.PRODCODIGO] = true;
                        return exists;
                      });
                      dat==true? generarPaginacion(datos) : generarPaginacion(dataFiltro);
                  }
              }
          });
      }
 
      /* --> ELIMINAR DATOS DEL FILTRO MARCA */ 
      function eliminarFiltroTag(tag){

        for(var i=0;i<dataFiltro.length;i++){
          var tags=dataFiltro[i].PRODTAGS.split(";");
          
          for (var j=0;j<tags.length;j++){
            
            if (tags[j] == tag){
              delete dataFiltro[i];
              break;
            }
          }
        }

        dataFiltro = dataFiltro.filter(Boolean);
        
        if($(".filtrosAplicados").html() == ""){
          limpiarFiltros();
        }else{
          generarPaginacion(dataFiltro);
        }
        
      }
      
      /* --> GENERAR PAGINACION [FILTRO] */ 
      function generarPaginacion(datos){
        
          var total = datos.length;
          var paginas=0;

          //CANTIDAD DE PAGINAS
          if(total%8==0){
              paginas=total/8;
          }else{
              paginas=(total/8)+1;
              paginas=Math.floor(paginas);
          }
        
          //GENERAR CONTENEDOR
          $('#PAGINACION').bootpag({
              total: paginas,
              page: 1,
              maxVisible: 5,
              activeClass: 'activePage',
              disabledClass: 'disabled'
          }).on("page", function(event, num){
              vWeb.generarProductos(totalProductos, paginasProductos, dataFiltro,num);
          });
          vWeb.generarProductos(total, paginas, datos,1);
        
          totalProductos=total;
          paginasProductos=paginas;
        
      } 
      
    </script>


</body>
</html>