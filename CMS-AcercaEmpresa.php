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
          <h3 class="titulo">ACERCA DE LA EMPRESA</h3>

          <!--CONTENIDO DEL FORMULARIO-->
          <div>
           
            <!--FORMULARIO-->
            <div class="row">

              <!--INGRESAR DATOS-->
              <div class="col-12">

                  <!--QUIENES SOMOS-->
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">¿QUIÉNES SOMOS?</h6>
                      <textarea id="quienesSomos" class="form-control" placeholder="Descripción de la empresa" rows="3"></textarea>
                  </div>

                  <!--MISION-->
                  <form action="" id="form">
                  <div class="row">

                      <!--DESCRIPCION-->
                      <div class="form-group col-12 col-sm-7 col-md-8 col-xl-9">
                          <h6 class="subtitulo obligatorio">MISION</h6>
                          <textarea id="mision" class="form-control" placeholder="Misión de la empresa" rows="5"></textarea>
                      </div>

                      <!--IMAGEN-->
                      <div class="form-group col-12 col-sm-5 col-md-4 col-xl-3 text-center">    
                          <h6 class="subtitulo">IMAGEN DESCRIPTIVA</h6>            
                          <img id="previewFoto1" class="imagenMinSlider mb-2" src="ES-FrontEnd/Elementos/Imagenes/Icons/sinImagen.png"><br>

                          <label for="foto1" class="botonSecundario">CAMBIAR IMAGEN</label>
                          <input id="foto1" class="inputImagen" name="archivo1" type="file" accept="image/*"><input type="text" hidden id="estado1">
                      </div>

                  </div>
                  
                  <!--VISION-->
                  <div class="row">

                      <!--DESCRIPCION-->
                      <div class="form-group col-12 col-sm-7 col-md-8 col-xl-9">
                          <h6 class="subtitulo obligatorio">VISION</h6>
                          <textarea id="vision" class="form-control" placeholder="Visión de la empresa" rows="5"></textarea>
                      </div>

                      <!--IMAGEN-->
                      <div class="form-group col-12 col-sm-5 col-md-4 col-xl-3 text-center">    
                          <h6 class="subtitulo">IMAGEN DESCRIPTIVA</h6>            
                          <img id="previewFoto2" class="imagenMinSlider mb-2" src="ES-FrontEnd/Elementos/Imagenes/Icons/sinImagen.png"><br>

                          <label for="foto2" class="botonSecundario">CAMBIAR IMAGEN</label>
                          <input id="foto2" class="inputImagen" name="archivo2" type="file" accept="image/*"><input type="text" hidden id="estado2">
                      </div>

                  </div>
                  </form>

              </div>

            </div>

            <!--BOTONES-->
            <div class="row justify-content-center mt-3 mb-5">
              <div class="col-sm-4 text-center">
                  <button class="botonPrincipal btn" onclick="validarFormulario()" type="submit">Guardar</button>
              </div>
              <div class="col-sm-4 text-center">
                  <button class="botonPrincipal  btn" onclick="cargarDatos()" type="submit">Reestablecer </button>
              </div>
            </div>

          </div>

          <!--ALERTA-->
          <div class="alert alert-danger" role="alert">
                  * Campo obligatorio
          </div>


      </div>

      <!-- TOAST -->
      <div role="alert" aria-live="assertive" aria-atomic="true" class="toast py-1 px-3 succesfull z-depth-3" data-delay="4000" data-animation="true">
        <div class="toast-body">Mensaje</div>
      </div>

    </section> 
    
    <!-- CONTENT--> 
    
    <!-- JS Scripts-->
    <script type="text/javascript" src="ES-FrontEnd/Elementos/Generales-CMS/funciones.js"></script>
    
    <script>

    //--INICIALIZAR FUNCIONES--
    cargarDatos();
    var mostrar=false;

    //--LLAMAR A FUNCION MOSTRAR IMAGEN AL CARGAR IMAGEN--  
    var inputFile = document.getElementById('foto1');
    inputFile.addEventListener('change', vGenerales.mostrarImagen1, false);  

    //--LLAMAR A FUNCION MOSTRAR IMAGEN AL CARGAR IMAGEN--  
    var inputFile = document.getElementById('foto2');
    inputFile.addEventListener('change', vGenerales.mostrarImagen2, false);  

    //--CARGAR INFORMACION EXISTENTE EN LA BASE DE DATOS --
    function cargarDatos(){

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosNosotros.php',
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
                    $("#quienesSomos").val(datos.NOSTDESCRIPCION);
                    $("#mision").val(datos.NOSTMISION);
                    $("#vision").val(datos.NOSTVISION);

                    if(datos.NOSTMISION_IMAGEN!=""){
                      document.getElementById('previewFoto1').src = datos.NOSTMISION_IMAGEN;
                    }

                    if(datos.NOSTVISION_IMAGEN!=""){
                      document.getElementById('previewFoto2').src = datos.NOSTVISION_IMAGEN;
                    }
                }
            }
        });

    }

    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO --  
    function validarFormulario(){

        var R1 = $("#quienesSomos").val();
        var R2 = $("#mision").val();
        var R3 = $("#vision").val();

        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#quienesSomos").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#mision").focus();
        }
        else if(R3 == null || R3.length == 0 || /^\s+$/.test(R3)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#vision").focus();
        }
        else if(document.getElementById('foto1').files.length == 0 && document.getElementById('foto2').files.length == 0){
            actualizarDatosNosotros();

        }else{
            guardarImagenNosotros();

            if ($("#estado1").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                    actualizarDatosNosotros()
            }else{
                    mostrar=true;
                    mostrarToast("error",$("#estado1").val());
            }
        }

    } 

    //--GUARDAR IMAGENES DE LA EMPRESA --
    function guardarImagenNosotros(){

      var nuevoFormulario = new FormData();   
      $("#form").find(':input').each(function() {
        var elemento= this;
        //Si recibe tipo archivo 'file'
        if(elemento.type === 'file'){
           if(elemento.value !== ''){
              for(var i=0; i< $('#'+elemento.id).prop("files").length; i++){
                  nuevoFormulario.append(elemento.name, $('#'+elemento.id).prop("files")[i]);
               }
           }              
         }
      });

      $.ajax({
          url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenNosotros.php",
          type: "POST",
          data: nuevoFormulario,
          contentType: false,
          processData: false,
          async:false,
          success: function(datos){
            if(datos.response1==0 && datos.response2 ==0){
                  $("#estado1").val("ERROR AL GUARDAR LA IMAGEN: "+datos.message)
                  $("#estado2").val("ERROR AL GUARDAR LA IMAGEN: "+datos.message)
              }else{
                  $("#estado1").val("IMAGEN GUARDADA CORRECTAMENTE")
                  $("#estado2").val("IMAGEN GUARDADA CORRECTAMENTE")
              }
          }
      });
    }

    //--ACTUALIZAR DATOS DE LA EMPRESA --    
    function actualizarDatosNosotros(){
        var rutaFoto1,nombreFoto1;
        var rutaFoto2,nombreFoto2;

        if(document.getElementById('foto1').files.length == 0){
          if(document.getElementById('previewFoto1').src==""){
            rutaFoto1="";
          }else{
            nombreFoto1=document.getElementById('previewFoto1').src.split("/Nosotros/");
            rutaFoto1="ES-FrontEnd/Elementos/Imagenes/Nosotros/"+nombreFoto1[1];
          }
        }else{
          rutaFoto1="ES-FrontEnd/Elementos/Imagenes/Nosotros/"+document.getElementById('foto1').files[0].name
        }

        if(document.getElementById('foto2').files.length == 0){
          if(document.getElementById('previewFoto2').src==""){
            rutaFoto2="";
          }else{
            nombreFoto2=document.getElementById('previewFoto2').src.split("/Nosotros/");
            rutaFoto2="ES-FrontEnd/Elementos/Imagenes/Nosotros/"+nombreFoto2[1];
          }
        }else{
          rutaFoto2="ES-FrontEnd/Elementos/Imagenes/Nosotros/"+document.getElementById('foto2').files[0].name
        }

            mostrar=true;

        var $datos={
            '_descripcion': $("#quienesSomos").val(),
            '_mision': $("#mision").val(),
            '_vision': $("#vision").val(),
            '_rutaMision': rutaFoto1,
            '_rutaVision': rutaFoto2
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarNosotros.php',
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
                    mostrarToast("error",'ERROR: '+datos.message);
                }
                else{
                    mostrarToast("exito","Actualizacion correcta!");
                }
            }
        });

    }

    //--MOSTRAR TOAST CON MENSAJE--
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