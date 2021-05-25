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
      <div class="container my-3">
        <section>

          <!-- TITULO Y DESCRIPCION-->
          <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-2">CMS</h6>
          <h3 class="font-weight-bold text-center dark-grey-text pb-2">Paleta de colores</h3>
          <hr class="w-header my-2">
          <p class="lead text-center text-muted pt-2 mb-3">Elegir los colores que serán utilizados en los estilos de la página web.</p>
          <!-- OPCIONES-->
          <div class="d-flex flex-column flex-sm-row mb-3">
            <select id="selColores" class="form-control"><option>Seleccionar paleta de colores</option></select>
            <button type="button" class="btn botonSecundario" onclick="guardarPaletaColores()" style="min-width:200px;"><small>Guardar colores</small></button>
          </div>

          <!-- COLORES-->
          <div class="row white-text">

            <!-- PRINCIPAL -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cPrimary" type="color" list="recientesPrimary">
                  <datalist id="recientesPrimary"></datalist>
                  <p class="small"></p>
                  <h4>Primary</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color principal de la página</p>
                </div>
              </div>
            </div>
            
            <!-- SECUNDARIO -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cSecundary" type="color" list="recientesSecundary">
                  <datalist id="recientesSecundary"></datalist>
                  <p class="small"></p>
                  <h4>Secundary</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color secundario de la página</p>
                </div>
              </div>
            </div>
            
            <!-- ENFASIS 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cEnfasis1" type="color" list="recientesEnfasis1">
                  <datalist id="recientesEnfasis1"></datalist>
                  <p class="small"></p>
                  <h4>Enfasis 1</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color de enfasis 1 de la página</p>
                </div>
              </div>
            </div>
            
            <!-- ENFASIS 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cEnfasis2" type="color" list="recientesEnfasis2">
                  <datalist id="recientesEnfasis2"></datalist>
                  <p class="small"></p>
                  <h4>Enfasis 2</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color de enfasis 2 de la página</p>
                </div>
              </div>
            </div>
            
            <!-- ENFASIS 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cEnfasis3" type="color" list="recientesEnfasis3">
                  <datalist id="recientesEnfasis3"></datalist>
                  <p class="small"></p>
                  <h4>Enfasis 3</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color de enfasis 31 de la página</p>
                </div>
              </div>
            </div>
            
            <!-- LIGHT 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cLight1" type="color" list="recientesLight1">
                  <datalist id="recientesLight1"></datalist>
                  <p class="small"></p>
                  <h4>Light 1</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color claro 1 de la página</p>
                </div>
              </div>
            </div>
            
            <!-- LIGHT 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cLight2" type="color" list="recientesLight2">
                  <datalist id="recientesLight2"></datalist>
                  <p class="small"></p>
                  <h4>Light 2</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color claro 2 de la página</p>
                </div>
              </div>
            </div>
            
            <!-- LIGHT 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card classic-admin-card">
                <div class="card-body py-3">
                  <input id="cLight3" type="color" list="recientesLight3">
                  <datalist id="recientesLight3"></datalist>
                  <p class="small"></p>
                  <h4>Light 3</h4>
                </div>
                <div class="card-body pt-2 pb-3">
                  <p class="small mb-0">Color claro 3 de la página</p>
                </div>
              </div>
            </div>

          </div>
          
          <!-- TOAST -->
          <div role="alert" aria-live="assertive" aria-atomic="true" class="toast py-1 px-3 succesfull z-depth-3" data-delay="4000" data-animation="true">
            <div class="toast-body">Mensaje</div>
          </div>

        </section>
      </div>
    </section> 
    
    <!-- CONTENT-->
    
    <!-- JS Scripts-->
    <script type="text/javascript" src="ES-FrontEnd/Elementos/Generales-CMS/funciones.js"></script>
    <script>
      var mostrar=false;
      var estilos = window.getComputedStyle(document.documentElement);
      mostrarPaletasColores();
      
      $(document).ready(function () { 
        
          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarColoresWeb.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                  if(error.status == 401){
                      mostrar=true;
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrar=true;
                      mostrarToast("error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrar=true;
                      mostrarToast("error",datos.message);
                  }
                  else{
                    
                      var primary = datos.COLORPRIMARY;
                      var secundary = datos.COLORSECUNDARY;
                      var enfasis1 = datos.COLORENFASIS1;
                      var enfasis2 = datos.COLORENFASIS2;
                      var enfasis3 = datos.COLORENFASIS3;
                      var light1 = datos.COLORLIGHT1;
                      var light2 = datos.COLORLIGHT2;
                      var light3 = datos.COLORLIGHT3;

                      $("#cPrimary").parents("div.card").css("background",primary);
                      $("#cPrimary ~ p.small").html(primary);
                      $("#cPrimary").val(primary);
                      $("#recientesPrimary").html("<option value='"+primary+"'>");

                      $("#cSecundary").parents("div.card").css("background",secundary);
                      $("#cSecundary ~ p.small").html(secundary);
                      $("#cSecundary").val(secundary);
                      $("#recientesSecundary").html("<option value='"+secundary+"'>");

                      $("#cEnfasis1").parents("div.card").css("background",enfasis1);
                      $("#cEnfasis1 ~ p.small").html(enfasis1);
                      $("#cEnfasis1").val(enfasis1);
                      $("#recientesEnfasis1").html("<option value='"+enfasis1+"'>");

                      $("#cEnfasis2").parents("div.card").css("background",enfasis2);
                      $("#cEnfasis2 ~ p.small").html(enfasis2);
                      $("#cEnfasis2").val(enfasis2);
                      $("#recientesEnfasis2").html("<option value='"+enfasis2+"'>");

                      $("#cEnfasis3").parents("div.card").css("background",enfasis3);
                      $("#cEnfasis3 ~ p.small").html(enfasis3);
                      $("#cEnfasis3").val(enfasis3);
                      $("#recientesEnfasis3").html("<option value='"+enfasis3+"'>");

                      $("#cLight1").parents("div.card").css("background",light1);
                      $("#cLight1 ~ p.small").html(light1);
                      $("#cLight1").val(light1);
                      $("#recientesLight1").html("<option value='"+light1+"'>");

                      $("#cLight2").parents("div.card").css("background",light2);
                      $("#cLight2 ~ p.small").html(light2);
                      $("#cLight2").val(light2);
                      $("#recientesLight2").html("<option value='"+light2+"'>");

                      $("#cLight3").parents("div.card").css("background",light3);
                      $("#cLight3 ~ p.small").html(light3);
                      $("#cLight3").val(light3);
                      $("#recientesLight3").html("<option value='"+light3+"'>");
                    
                  }
              }
          });

      }); 

      //--SELECCION DE COLOR PRIMARIO--
      $("#cPrimary").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cPrimary ~ p.small").html($(this).val());
          $("#recientesPrimary").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--primary', $("#cPrimary").val());
        
      });
      
      //--SELECCION DE COLOR SECUNDARIO--
      $("#cSecundary").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cSecundary ~ p.small").html($(this).val());
          $("#recientesSecundary").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--secundary', $("#cSecundary").val());
        
      });
      
      //--SELECCION DE COLOR DE ENFASIS 1--
      $("#cEnfasis1").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cEnfasis1 ~ p.small").html($(this).val());
          $("#recientesEnfasis1").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--enfasis1', $("#cEnfasis1").val());
          
      });
      
      //--SELECCION DE COLOR DE ENFASIS 2--
      $("#cEnfasis2").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cEnfasis2 ~ p.small").html($(this).val());
          $("#recientesEnfasis2").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--enfasis2', $("#cEnfasis2").val());
        
      });
      
      //--SELECCION DE COLOR DE ENFASIS 3--
      $("#cEnfasis3").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cEnfasis3 ~ p.small").html($(this).val());
          $("#recientesEnfasis3").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--enfasis3', $("#cEnfasis3").val());
        
      });
      
      //--SELECCION DE COLOR CLARO 1--
      $("#cLight1").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cLight1 ~ p.small").html($(this).val());
          $("#recientesLight1").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--light1', $("#cLight1").val());
        
      });
      
      //--SELECCION DE COLOR CLARO 2--
      $("#cLight2").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cLight2 ~ p.small").html($(this).val());
          $("#recientesLight2").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--light2', $("#cLight2").val());
        
      });
      
      //--SELECCION DE COLOR CLARO 3--
      $("#cLight3").change(function() {
          $(this).parents("div.card").css("background",$(this).val());
          $("#cLight3 ~ p.small").html($(this).val());
          $("#recientesLight3").append("<option value='"+$(this).val()+"'>");
          document.documentElement.style.setProperty('--light3', $("#cLight3").val());
        
      });
      
      //--SELECCION DE PALETA DE COLORES--
      $("#selColores").change(function() {
          mostrarColoresPaletaSeleccionada($("#selColores option:selected").val());
      });
      
      //--GUARDAR COLORES ELEGIDOS--
      function guardarPaletaColores(){
          mostrar=true;
        
          var $datos={
            '_primary': $("#cPrimary").val(),
            '_secundary': $("#cSecundary").val(),
            '_enfasis1': $("#cEnfasis1").val(),
            '_enfasis2': $("#cEnfasis2").val(),
            '_enfasis3': $("#cEnfasis3").val(),
            '_light1': $("#cLight1").val(),
            '_light2': $("#cLight2").val(),
            '_light3': $("#cLight3").val()
          }

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_AgregarPaletaColores.php',
              type: 'POST',
              data: $datos,
              dataType: 'json',
              error: function(error){
                  if(error.status == 401){
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrarToast("error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrarToast("error",datos.message);
                  }
                  else{
                      mostrarToast("exito","Registro correcto");
                      cargarPaletaColores();
                      mostrarPaletasColores();
                  }
              }
          });
        
      }
      
      //--MOSTRAR PALETAS DE COLORES--
      function mostrarPaletasColores(){

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarPaletasColores.php',
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
                      mostrarToast("error",datos.message);
                  }
                  else{
                      $("#selColores").html("");
                      var paleta = "<option>Seleccionar paleta de colores</option>";
                      for (var i=0;i<datos.length;i++){
                          paleta+="\<option value='"+datos[i].COLORCODIGO+"'>Paleta "+(i+1)+"</option>"
                      }
                      $("#selColores").html(paleta);
                  }
              }
          });
        
      }
      
      //--MOSTRAR COLORES DE LA PALETA SELECCIONADA--
      function mostrarColoresPaletaSeleccionada(cod){
          mostrar=true;

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarPaletasColores.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                  if(error.status == 401){
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrarToast("error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrarToast("error",datos.message);
                  }
                  else{
                      for (var i=0;i<datos.length;i++){
                        if(datos[i].COLORCODIGO == cod){
                          $("#cPrimary").parents("div.card").css("background",datos[i].COLORPRIMARY);
                          $("#cPrimary ~ p.small").html(datos[i].COLORPRIMARY);
                          $("#cPrimary").val(datos[i].COLORPRIMARY);
                          $("#recientesPrimary").html("<option value='"+datos[i].COLORPRIMARY+"'>");
                          document.documentElement.style.setProperty('--primary', datos[i].COLORPRIMARY);

                          $("#cSecundary").parents("div.card").css("background",datos[i].COLORSECUNDARY);
                          $("#cSecundary ~ p.small").html(datos[i].COLORSECUNDARY);
                          $("#cSecundary").val(datos[i].COLORSECUNDARY);
                          $("#recientesSecundary").html("<option value='"+datos[i].COLORSECUNDARY+"'>");
                          document.documentElement.style.setProperty('--secundary', datos[i].COLORSECUNDARY);

                          $("#cEnfasis1").parents("div.card").css("background",datos[i].COLORENFASIS1);
                          $("#cEnfasis1 ~ p.small").html(datos[i].COLORENFASIS1);
                          $("#cEnfasis1").val(datos[i].COLORENFASIS1);
                          $("#recientesEnfasis1").html("<option value='"+datos[i].COLORENFASIS1+"'>");
                          document.documentElement.style.setProperty('--enfasis1', datos[i].COLORENFASIS1);

                          $("#cEnfasis2").parents("div.card").css("background",datos[i].COLORENFASIS2);
                          $("#cEnfasis2 ~ p.small").html(datos[i].COLORENFASIS2);
                          $("#cEnfasis2").val(datos[i].COLORENFASIS2);
                          $("#recientesEnfasis2").html("<option value='"+datos[i].COLORENFASIS2+"'>");
                          document.documentElement.style.setProperty('--enfasis2', datos[i].COLORENFASIS2);

                          $("#cEnfasis3").parents("div.card").css("background",datos[i].COLORENFASIS3);
                          $("#cEnfasis3 ~ p.small").html(datos[i].COLORENFASIS3);
                          $("#cEnfasis3").val(datos[i].COLORENFASIS3);
                          $("#recientesEnfasis3").html("<option value='"+datos[i].COLORENFASIS3+"'>");
                          document.documentElement.style.setProperty('--enfasis3', datos[i].COLORENFASIS3);

                          $("#cLight1").parents("div.card").css("background",datos[i].COLORLIGHT1);
                          $("#cLight1 ~ p.small").html(datos[i].COLORLIGHT1);
                          $("#cLight1").val(datos[i].COLORLIGHT1);
                          $("#recientesLight1").html("<option value='"+datos[i].COLORLIGHT1+"'>");
                          document.documentElement.style.setProperty('--light1', datos[i].COLORLIGHT1);

                          $("#cLight2").parents("div.card").css("background",datos[i].COLORLIGHT2);
                          $("#cLight2 ~ p.small").html(datos[i].COLORLIGHT2);
                          $("#cLight2").val(datos[i].COLORLIGHT2);
                          $("#recientesLight2").html("<option value='"+datos[i].COLORLIGHT2+"'>");
                          document.documentElement.style.setProperty('--light2', datos[i].COLORLIGHT2);

                          $("#cLight3").parents("div.card").css("background",datos[i].COLORLIGHT3);
                          $("#cLight3 ~ p.small").html(datos[i].COLORLIGHT3);
                          $("#cLight3").val(datos[i].COLORLIGHT3);
                          $("#recientesLight3").html("<option value='"+datos[i].COLORLIGHT3+"'>");
                          document.documentElement.style.setProperty('--light3', datos[i].COLORLIGHT3);
                        }
                      }
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