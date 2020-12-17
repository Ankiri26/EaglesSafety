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

      <!--VISTA PREVIA-->
      <div class="mx-5">

        <!--TITULO-->
        <h3 class="titulo">ACTUALIZAR MARCAS</h3>

        <!--SLIDERS WEB-->
        <div id="sliderMarcasWeb" class="carousel slide text-center d-none d-sm-flex" data-ride="carousel">

            <!--SLIDES-->
            <div id="contenidoVistaPrevia" class="carousel-inner" role="listbox">
            </div>

            <!--CONTROLES-->
            <a class="carousel-control-prev" href="#sliderMarcasWeb" role="button" data-slide="prev">
                <span aria-hidden="true"><i class="fa fa-chevron-left fa-2x"></i></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#sliderMarcasWeb" role="button" data-slide="next">
                <span aria-hidden="true"><i class="fa fa-chevron-right fa-2x"></i></span>
                <span class="sr-only">Siguiente</span>
            </a>

        </div>  
        
        <!--SLIDERS MOVIL-->
        <div id="recipeCarousel2" class="carousel slide text-center d-flex d-sm-none" data-ride="carousel">

            <!--MARCAS -->
            <div id="MARCASCEL" class="carousel-inner" role="listbox"></div>

            <!--CONTROLADOR -->
            <a class="carousel-control-prev" href="#recipeCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>

        </div>
     
        <!--OPCIONES-->
        <div class="alert alert-dark p-1 mx-auto my-4 row" role="alert">
          <div class="col-12 col-md-5 h5-responsive numeroSliders">Slider usados <span id="cantSlider"></span> de 20</div>
          <div class="col-12 col-md-7 row m-0 justify-content-center">
            <button class="btn py-2 bg-primary" data-toggle="modal" data-target="#agregarSlider">Agregar</button>
            <button class="btn py-2 bg-primary" onclick="cargarDatos()">Actualizar</button>
          </div>
        </div>
                  
      </div>

      <!--SLIDERS-->
      <div id="contenidoModificar" class="px-5 mt-0 mb-5 d-flex flex-wrap justify-content-center">
      </div>

      <!-- MODAL AÑADIR SLIDER -->
      <div class="modal fade" id="agregarSlider" tabindex="-1" role="dialog" aria-labelledby="agregarSlider"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
           
            <!-- TITULO -->
            <div class="modal-header">
              <h5 class="modal-title">Añadir nueva imagen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <!-- CUERPO -->
            <div class="modal-body">
              <form id="form" class="text-center">
                  
                  <div class="form-group">
                      <h6 class="subtitulo">Nombre</h6>
                      <input id="nombre" type="text" class="form-control">
                  </div>

                  <h6 class="subtitulo">Imagen</h6>
                  <img id="previewFoto" class="imagenMinSlider mb-2"><br>
                  <label for="foto" class="botonSecundario">Seleccionar imagen</label>
                  <input id="foto" class="inputImagen" name="archivo" type="file" accept="image/*"><input type="text" hidden id="estado">

              </form>
            </div>
            
            <!-- BOTONES -->
            <div class="modal-footer">
              <button id="guardar" type="button" class="btn bg-primary" onClick="validarFormulario()">Guardar</button>
            </div>
            
          </div>
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
    var mostrar=false;
    //--INICIALIZAR FUNCIONES--
    cargarDatos();
    mostrarToast();

    //--LLAMAR A FUNCION MOSTRAR IMAGEN AL CARGAR IMAGEN--  
    var inputFile = document.getElementById('foto');
    inputFile.addEventListener('change', vGenerales.mostrarImagen, false);  

    //--CARGAR DATOS DE LA TABLA SLIDER--  
    function cargarDatos(){

        var slider="", slider2="";

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarMarca.php',
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
                    $("#contenidoVistaPrevia").html("");
                    $("#contenidoModificar").html("");
                }
                else{              
                    var contenedor = "";

                    //MARCAS VERSION WEB
                    contenedor += "<div class='carousel-item row no-gutters active'>";
                  
                    for(var i=0; i<datos.length ; i++){
                        if(i<4){
                            contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                        }
                        slider2+="<div class='p-1'>\
                <img class='imagenMinSlider'  src='"+datos[i].MARCIMAGEN+"'>\
                <div class='opcionesSlider'>\
                    <button class='btn bg-primary' onclick='editarSlider("+datos[i].MARCCODIGO+")'><i class='fas fa-pen'></i></button>\
                    <button class='btn ml-5' onclick='eliminarSlider("+datos[i].MARCCODIGO+")'>X</button>\
                </div>\
            </div>"
                      
                    }
                  
                    contenedor+="\n\</div>"
                  
                    for(var j=0; j<datos.length-1; j++){

                        var a=0;
                        contenedor += "<div class='carousel-item row no-gutters'>";

                        for(var k=1; k<5; k++){

                            if((k+j)<datos.length){
                                contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[k+j].MARCCODIGO+"' class='img-fluid' src='"+datos[k+j].MARCIMAGEN+"'></div>"
                            }else{
                                contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[a].MARCCODIGO+"' class='img-fluid' src='"+datos[a].MARCIMAGEN+"'></div>"
                                a++;
                            }

                        }
                        contenedor+="\n\</div>"

                    }
                  
                    $("#contenidoVistaPrevia").html(contenedor);
                    $("#contenidoModificar").html(slider2);
                    $("#cantSlider").html(datos.length);

                    //MARCAS VERSION MOVIL
                    contenedor = "";
                    for(var i=0; i<datos.length ; i++){
                        if(i==0){
                            contenedor += "<div class='carousel-item justify-content-center no-gutters active'>";
                            contenedor+="\n\<img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                        }else{
                            contenedor += "<div class='carousel-item justify-content-center no-gutters '>";
                            contenedor+="\n\<img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                        }
                    }
                    $("#MARCASCEL").html(contenedor);

                }
            }
        });

    }

    //--ELIMINAR SLIDER--      
    function eliminarSlider(cod){
        
        if($("#cantSlider").html() == "4" ){
            mostrar=true;
            mostrarToast("error","Mínimo deben haber 4 elementos");
        }else{
          
          var $datos={
              '_codigo': cod
          }

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_EliminarMarca.php',
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
                      mostrar=true;
                      mostrarToast('exito','Imagen eliminada correctamente');
                      cargarDatos();
                  }
              }
          });
        }
    }

    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO--  
    function validarFormulario(){

        var R1 = $("#nombre").val();

        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#nombre").focus();
        }else{
            guardarImagenSlider();
            if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                agregarSlider()
            }else{
                alert($("#estado").val());
            }
        }

    } 

    //--GUARDAR IMAGEN DEL SLIDER--  
    function guardarImagenSlider(){

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
          url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenMarca.php",
          type: "POST",
          data: nuevoFormulario,
          contentType: false,
          processData: false,
          async:false,
          success: function(datos){
            if(datos.response==0){
                  $("#estado").val("ERROR AL GUARDAR LA IMAGEN: "+datos.message)
              }else{
                  $("#estado").val("IMAGEN GUARDADA CORRECTAMENTE")
              }
          }
      });
    }    

    //--AÑADIR SLIDER--
    function agregarSlider(){
        var rutaFoto,nombreFoto;

        if(document.getElementById('foto').files[0].name == undefined){
          if(document.getElementById('previewFoto').src==""){
            rutaFoto="";
          }else{
            nombreFoto=document.getElementById('previewFoto').src.split("/Marcas/");
            rutaFoto="ES-FrontEnd/Elementos/Imagenes/Marcas/"+nombreFoto[1];
          }
        }else{
          rutaFoto="ES-FrontEnd/Elementos/Imagenes/Marcas/"+document.getElementById('foto').files[0].name
        }

        var $datos={
            '_nombre': $("#nombre").val(),
            '_imagen': rutaFoto
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_AgregarMarca.php',
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
                    document.getElementById("guardar").disabled=false;
                    $('#agregarSlider').modal('hide');
                    $("#nombre").val("");
                    $("#foto").val("");
                    document.getElementById('previewFoto').src="";
                    cargarDatos();
                    mostrarToast('exito','Imagen agregada correctamente');
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