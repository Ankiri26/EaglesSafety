<!DOCTYPE html>
<html lang="es">
<head>
   
    <!-- TITULO DE LA VISTA -->
    <title>CMS - Eagles Safety EIRL</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-CMS/config.php";?>
    
</head>

<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-CMS/barraNavegacion.php";?>

    <!-- CONTENIDO GENERAL-->
    <section class="cuerpo" id="cuerpo">
     
     <!-- CUERPO-->
      <div class="px-5 mb-5">
      
      <!--TITULO-->
      <h3 class="titulo">ELIMINAR PRODUCTO</h3>

      <!-- Elegir producto -->
      <h6 class="subtitulo mt-0">Seleccionar una categoría antes de eliminar un producto</h6>
      <div class="d-flex flex-column flex-sm-row mb-3">
        <select id="selCategoria" class="form-control"></select>
        <button type="button" class="btn botonSecundario" onclick="eliminarProducto()" style="min-width:200px;"><small>Eliminar</small></button>
      </div>
      <div class="table-responsive">
        <table id="tProductos" class="table">
          <thead class="bg-light3">
            <tr>
              <th class="py-1 font-weight-bold" scope="col">#</th>
              <th class="py-1 font-weight-bold" scope="col">Categoría</th>
              <th class="py-1 font-weight-bold" scope="col">Nombre</th>
              <th class="py-1 font-weight-bold" scope="col">Imagen</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <div class='msj container grey-text text-center'></div>
      
      <!-- TOAST -->
      <div role="alert" aria-live="assertive" aria-atomic="true" class="toast py-1 px-3 succesfull z-depth-3" data-delay="4000" data-animation="true">
        <div class="toast-body">Mensaje</div>
      </div>
      
     </div>
    </section> 
    
    <!-- CONTENT-->
    
    <!-- JS Scripts-->
    <script type="text/javascript" src="ES-FrontEnd/Elementos/Generales-CMS/funciones.js"></script>
    <script>
      
      var mostrar=false;
      mostrarCategorias();
  
      //--SELECCION DE CATEGORIA--
      $("#selCategoria").change(function() {
          mostrarProductos($("#selCategoria option:selected").html());
      });
      
      //-MOSTRAR TODOS LAS CATEGORIAS--
      function mostrarCategorias(){

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarCategoria.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                  mostrar=true;
                  if(error.status == 401){
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrarToast("error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrar=true;
                      mostrarToast("error",'ERROR: '+datos.message);
                  }
                  else{
                      $("#selCategoria").html("");
                      var categorias = "<option>Seleccionar categoría</option>";
                      for (var i=0;i<datos.length;i++){
                          categorias+="\<option value='"+datos[i].CATCODIGO+"'>"+datos[i].CATNOMBRE+"</option>"
                      }
                      $("#selCategoria").html(categorias);
                  }
              }
          });
      }

      //-MOSTRAR TODOS LOS PRODUCTOS--
      function mostrarProductos(cat){

          var $datos={
              '_categoria': cat
          }

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarProductos.php',
              type: 'POST',
              data: $datos,
              dataType: 'json',
              error: function(error){
                  mostrar=true;
                  if(error.status == 401){
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrarToast("error","error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrar=true;
                      mostrarToast("error","Información no encontrada");
                      $("#tProductos tbody").html("");
                      $(".table-responsive").addClass("d-none");
                      $(".msj").html("<img src='ES-FrontEnd/Elementos/Imagenes/Icons/sinResultados.png' width='250'>");
                  }
                  else{
                      var tabla="";
                      for(var i=0; i<datos.length ; i++){
                        tabla += "<tr> \
                          <th class='py-0 align-middle' scope='row'><input type='radio' value='"+datos[i].PRODCODIGO+"' name='producto'></th> \
                          <td class='py-0 align-middle'>"+datos[i].CATNOMBRE+"</td> \
                          <td class='py-0 align-middle'>"+datos[i].PRODNOMBRE+"</td> \
                          <td class='py-0 align-middle'><img src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' width='50' height='50'></td> \
                        </tr>";
                        
                      }
                      $(".table-responsive").removeClass("d-none");
                      $("#tProductos tbody").html(tabla);
                      $(".msj").html("");
                  }
              }
          });

      }
      
      //-ELIMINAR DESTACADO--
      function eliminarProducto(){
        
          $("#tProductos input:radio:checked" ).each(function() {
              codigo=$(this).val();
          });
          
          var $datos={
          '_codigo': codigo
          }

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_EliminarProducto.php',
              type: 'POST',
              data: $datos,
              dataType: 'json',
              error: function(error){
                  mostrar=true;
                  if(error.status == 401){
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrarToast("error","error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrar=true;
                      mostrarToast("error",datos.message);
                  }
                  else{
                      mostrarProductos($("#selCategoria option:selected").html());
                  }
              }
          });
      }
      
      //--MOSTRAR TOAST --  
      function mostrarToast(tipo,msj){
        if(mostrar==true){
            switch(tipo){
                case 'exito':
                    $(".toast").removeClass("succesfull");
                    $(".toast").removeClass("error");

                    $(".toast").addClass("succesfull");
                    break;
                case 'error':
                    $(".toast").removeClass("succesfull");
                    $(".toast").removeClass("error");

                    $(".toast").addClass("error");
                    break;
            }

            $('.toast-body').html('');
            $('.toast-body').html(msj);

            $('.toast').toast('show');
            $('.toast').addClass('visualizar');
        }
        mostrar=false;
    } 
      
    </script>
	
</body>

</html>