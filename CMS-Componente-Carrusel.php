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
    <section class="cuerpo mb-4" id="cuerpo">
       
      <h3 class="titulo">Carrusel de imágenes</h3>
      
      <!-- OPCIONES DE LA VISTA-->
      <div class="row">
        <div class="col text-center">
          <button class="btn botonTercero" data-toggle="modal" data-target="#agregarSlider"><i class="far fa-edit"></i> Editar descripción</button>
          <button class="btn botonTercero" data-toggle="modal" data-target="#c1Actualizar"><i class="fas fa-sync"></i> Actualizar componente</button>
        </div>
      </div>
      
      <!-- MODAL ACTUALIZAR -->
      <div class="modal fade" id="c1Actualizar" tabindex="-1" role="dialog" aria-labelledby="c1Actualizar"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
           
            <!-- Titulo -->
            <div class="modal-header">
              <h5 class="modal-title">Elegir estilo del componente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <!-- Contenido -->
            <div class="modal-body">
              
              <h6 class="subtitulo mt-0">Seleccionar el estilo del carrusel de imágenes:</h6>
               
              <!-- ESTILO 1 -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="c1Estilo1" name="c1Estilos" value="1">
                <label class="custom-control-label" for="c1Estilo1">Estilo 1</label>
              </div>

              <!-- ESTILO 2 -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="c1Estilo2" name="c1Estilos" value="2" checked>
                <label class="custom-control-label" for="c1Estilo2">Estilo 2</label>
              </div>

              <!-- ESTILO 3 -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="c1Estilo3" name="c1Estilos" value="3">
                <label class="custom-control-label" for="c1Estilo3">Estilo 3</label>
              </div>
              
              <!-- ESTILO 4 -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="c1Estilo4" name="c1Estilos" value="4">
                <label class="custom-control-label" for="c1Estilo4">Estilo 4</label>
              </div>
              
            </div>
            
            <!-- Botones -->
            <div class="modal-footer">
              <button id="actualizar" type="button" class="btn bg-primary" onClick="actualizarEstiloComponente()">Guardar</button>
            </div>
            
          </div>
        </div>
      </div>
      
      <!-- Menu de estilos-->
      <h6 class="subtitulo">Vista previa de estilos</h6>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link font-secundary active" id="op1-tab" data-toggle="tab" href="#op1" role="tab" aria-controls="op1"
            aria-selected="true">Estilo 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-secundary" id="op2-tab" data-toggle="tab" href="#op2" role="tab" aria-controls="op2"
            aria-selected="true">Estilo 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-secundary" id="op3-tab" data-toggle="tab" href="#op3" role="tab" aria-controls="op3"
            aria-selected="true">Estilo 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-secundary" id="op4-tab" data-toggle="tab" href="#op4" role="tab" aria-controls="op4"
            aria-selected="true">Estilo 4</a>
        </li>
      </ul>
      
      <!-- Vista previa de estilos-->
      <div class="tab-content">
        <!-- ESTILO 1 -->
        <div class="tab-pane fade show active" id="op1" role="tabpanel" aria-labelledby="op1-tab">
          <div style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

            <!-- CONTENIDO-->
            <div class="mask bg-gradiente d-flex justify-content-center align-items-center">
              <div class="container">
                <div class="row mt-0 mb-5 pt-5 pb-5">

                  <!--INFORMACION-->
                  <div class="col-md-6 white-text text-center text-md-left mt-5 mt-md-0 mt-lg-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="Stitulo h1-responsive font-weight-bold mt-5 mt-md-0 mt-lg-5"></h1>
                    <hr class="hr-light">
                    <h6 class="Sdescripcion mb-4"></h6>
                    <a class="btn botonPrincipal disabled" href="Nosotros.php">Ver más</a>
                    <a class="btn botonCuarto disabled" href="Contactos.php">Contáctanos</a>
                  </div>

                  <!--IMAGEN-->
                  <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight text-center pb-5 pb-sm-0 px-5 px-sm-0" data-wow-delay="0.3s">
                    <img class="Simagen img-fluid px-5 px-sm-0" style="max-height:400px;">
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        
        <!-- ESTILO 2 -->
        <div class="tab-pane fade show" id="op2" role="tabpanel" aria-labelledby="op2-tab">
          <div class="Simagen view jarallax" data-jarallax='{"speed": 0.2}' style="background-repeat: no-repeat; background-size: cover; background-position: center center; height:500px;">
           
            <!-- CONTENIDO-->
            <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 white-text text-center">
                    <h1 class="Stitulo display-4 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">
                    </h1>
                    <h5 class="Sdescripcion text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s"></h5>
                    <div class="wow fadeInDown" data-wow-delay="0.3s">
                      <a class="btn bg-enfasis1 btn-lg btn-rounded disabled" href="Nosotros.php">Ver más</a>
                      <a class="btn bg-enfasis2 btn-lg btn-rounded disabled" href="Contactos.php">Contáctanos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        <!-- ESTILO 3 -->
        <div class="tab-pane fade show" id="op3" role="tabpanel" aria-labelledby="op3-tab">
          <div class="Simagen view jarallax" data-jarallax='{"speed": 0.2}' style="background-repeat: no-repeat; background-size: cover; background-position: center center; height:500px;">
           
            <!-- CONTENIDO-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 mb-4 white-text text-center">
                    <h1 class="Stitulo h1-responsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                      data-wow-delay="0.3s"><strong></strong></h1>
                    <hr class="my-4 wow fadeInDown" data-wow-delay="0.4s" style="border-top: 3px solid #fff; width: 80px;">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong class="Sdescripcion"></strong></h5>
                    <a class="btn botonCuarto wow fadeInDown disabled" href="Nosotros.php" data-wow-delay="0.4s">Ver más</a>
                    <a class="btn botonCuarto wow fadeInDown disabled" href="Contactos.php" data-wow-delay="0.4s">Contáctanos</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        <!-- ESTILO 4 -->
        <div class="tab-pane fade show" id="op4" role="tabpanel" aria-labelledby="op4-tab">
          <div id="CarouselInicio" class="carousel slide" data-ride="carousel">

              <!--SLIDES-->
              <div id="contenidoVistaPrevia" class="carousel-inner" role="listbox">
              </div>

              <!--CONTROLES-->
              <a class="carousel-control-prev" href="#CarouselInicio" role="button" data-slide="prev">
                  <span aria-hidden="true"><i class="fa fa-chevron-left fa-2x"></i></span>
                  <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#CarouselInicio" role="button" data-slide="next">
                  <span aria-hidden="true"><i class="fa fa-chevron-right fa-2x"></i></span>
                  <span class="sr-only">Siguiente</span>
              </a>

          </div>  
        </div>
      </div>
  
      <!--VISTA PREVIA DE SLIDERS-->
      <div id="vistaPrevia">
           
        <!--OPCIONES DE SLIDER-->
        <div class="alert alert-dark p-1 mx-auto my-4 row" role="alert">
          <div class="col-12 col-md-5 h5-responsive numeroSliders">Slider usados <span id="cantSlider">4</span> de 8</div>
          <div class="col-12 col-md-7 row m-0 justify-content-center">
            <button class="btn py-2 bg-primary" data-toggle="modal" data-target="#agregarSlider" onclick="agregarSliderOp()">Agregar</button>
            <button class="btn py-2 bg-primary" onclick="cargarDatos()">Actualizar</button>
          </div>
        </div>
                 
        <!--SLIDERS-->
        <div id="contenidoModificar" class="px-5 mt-0 mb-5 d-flex flex-wrap justify-content-center"></div>
                  
      </div>

      <!-- MODAL AÑADIR/ACTUALIZAR SLIDER -->
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
                      <h6 class="subtitulo obligatorio">Título</h6>
                      <input id="titulo" type="text" class="form-control" maxlength="50" placeholder="Maximo 50 caracteres">
                      <input id="codigo" hidden type="text">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Descripcion</h6>
                      <textarea id="descripcion" type="text" class="form-control" rows="3"></textarea>
                  </div>

                  <h6 class="subtitulo obligatorio">Imagen</h6>
                  <img id="previewFoto" class="imagenMinSlider mb-2"><br>
                  <label for="foto" class="botonSecundario">Seleccionar imagen</label>
                  <input id="foto" class="inputImagen" name="archivo" type="file" accept="image/*"><input type="text" hidden id="estado">

              </form>
            </div>
            
            <!-- BOTONES -->
            <div class="modal-footer">
              <button id="guardar" type="button" class="btn bg-primary" onClick="validarFormulario()">Guardar</button>
              <button id="actualizar" type="button" class="btn bg-primary" onClick="validarFormulario2()">Actualizar</button>
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
    var codigo="";
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
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarSliders.php',
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
                    for(var i=0; i<datos.length; i++){
                        if(i==0){
                            slider+="<div class='carousel-item active' style='background:url("+datos[i].SLDRIMAGEN+");'> \
                                <div class='descripcionSlider container-fluid wow fadeIn' data-wow-delay='0.4s'>\
                                    <p class='h3-responsive wow fadeInLeftBig'>"+datos[i].SLDRNOMBRE+"</p>\
                                    <p class='descripcion wow fadeIn'>"+datos[i].SLDRDESCRIPCION+"</p>\
                                    </div>\
                            </div>\
                        </div>"
                        }else{
                            slider+="<div class='carousel-item' style='background:url("+datos[i].SLDRIMAGEN+");'> \
                                <div class='descripcionSlider container-fluid wow fadeIn' data-wow-delay='0.4s'>\
                                    <p class='h3-responsive wow fadeInLeftBig'>"+datos[i].SLDRNOMBRE+"</p>\
                                    <p class='descripcion wow fadeIn'>"+datos[i].SLDRDESCRIPCION+"</p>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>"
                        }

                        slider2+="<div class='p-1'>\
                <img class='imagenMinSlider' src='"+datos[i].SLDRIMAGEN+"'>\
                <div class='opcionesSlider'>\
                    <button class='btn bg-primary' onclick='mostrarDatosSlider("+datos[i].SLDRCODIGO+")'  data-toggle='modal'' data-target='#agregarSlider'><i class='fas fa-pen'></i></button>\
                    <button class='btn ml-5' onclick='eliminarSlider("+datos[i].SLDRCODIGO+")'>X</button>\
                </div>\
            </div>"

                    }
                    $("#contenidoVistaPrevia").html(slider);
                    $("#contenidoModificar").html(slider2);
                    $("#cantSlider").html(datos.length);
                  
                    $("#vistaPrevia").addClass("d-none");
                    $(".Stitulo").html(datos[0].SLDRNOMBRE);
                    $(".Sdescripcion").html(datos[0].SLDRDESCRIPCION);
                    $("img.Simagen").attr("src",datos[0].SLDRIMAGEN);
                    $("div.Simagen").css("background-image","url("+datos[0].SLDRIMAGEN+")");

                    mostrarDatosSlider(datos[0].SLDRCODIGO);
                  
                    if(datos[0].COMPSLIDER == 4){
                      $("#vistaPrevia").removeClass("d-none");
                    }

                }
            }
        });

    }
      
    //--MOSTRAR DATOS SLIDER--      
    function mostrarDatosSlider(cod){
      
        $("#guardar").addClass("d-none");
        $("#actualizar").removeClass("d-none");

        var $datos={
            '_codigo': cod
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_DetalleSlider.php',
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
                    $("#codigo").val(datos.SLDRCODIGO);
                    $("#titulo").val(datos.SLDRNOMBRE);
                    $("#descripcion").html(datos.SLDRDESCRIPCION);
                    document.getElementById('previewFoto').src = datos.SLDRIMAGEN;
                  
                    switch(datos.COMPSLIDER){
                      case "1": $( "#c1Estilo1" ).prop( "checked", true);break;
                      case "2": $( "#c1Estilo2" ).prop( "checked", true);break;
                      case "3": $( "#c1Estilo3" ).prop( "checked", true);break;
                      case "4": $( "#c1Estilo4" ).prop( "checked", true);break;
                    }    
                    
                }
            }
        });

    }

    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO--  
    function validarFormulario(){

        var R1 = $("#titulo").val();
        var R2 = $("#descripcion").val();

        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#titulo").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#descripcion").focus();
        }else{
            guardarImagenSlider();
            if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                agregarSlider()
            }else{
                alert($("#estado").val());
            }
        }

    } 
      
    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO--  
    function validarFormulario2(){

        var R1 = $("#titulo").val();
        var R2 = $("#descripcion").val();

        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#titulo").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#descripcion").focus();
        }else{
            if(document.getElementById('foto').files.length == 0){
                actualizarSlider(0);
            }else{
                guardarImagenSlider();

                if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                        actualizarSlider(0)
                }else{
                        mostrar=true;
                        mostrarToast("error",$("#estado1").val());
                }

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
          url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenSlider.php",
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
            nombreFoto=document.getElementById('previewFoto').src.split("/Slider/");
            rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+nombreFoto[1];
          }
        }else{
          rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+document.getElementById('foto').files[0].name
        }

        var $datos={
            '_titulo': $("#titulo").val(),
            '_descripcion': $("#descripcion").val(),
            '_rutaFoto': rutaFoto
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_AgregarSlider.php',
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
                    $("#titulo").val("");
                    $("#descripcion").val("");
                    $("#foto").val("");
                    document.getElementById('previewFoto').src="";
                    cargarDatos();
                    mostrarToast('exito','Imagen agregada correctamente');
                }
            }
        });

    }

    //--OP DE AGREGAR SLIDER--      
    function agregarSliderOp(){
      
        $("#guardar").removeClass("d-none");
        $("#actualizar").addClass("d-none");
      
    }

    //--ACTUALIZAR SLIDER--      
    function actualizarSlider(op){
      
        if(op==0){
          codigo=$("#codigo").val();
        }else{
          codigo=op;
        }
      
        var rutaFoto, nombreFoto;

        if(document.getElementById('foto').files.length == 0){
          if(document.getElementById('previewFoto').src==""){
            rutaFoto="";
          }else{
            nombreFoto=document.getElementById('previewFoto').src.split("/Slider/");
            rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+nombreFoto[1];
          }
        }else{
          rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+document.getElementById('foto').files[0].name
        }

        var $datos={
            '_codigo': codigo,
            '_nombre': $("#titulo").val(),
            '_descripcion': $("#descripcion").val(),
            '_imagen': rutaFoto
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarSlider.php',
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
                    mostrarToast('exito','Slider editado correctamente');
                    cargarDatos();
                    $('#agregarSlider').modal('hide');
                }
            }
        });

    }

    //--ELIMINAR SLIDER--      
    function eliminarSlider(cod){

        var $datos={
            '_codigo': cod
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_EliminarSlider.php',
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
                    mostrarToast('exito','Slider eliminado correctamente');
                    cargarDatos();
                }
            }
        });

    }  
      
    //--ACTUALIZAR ESTILO DEL SLIDER --  
    function actualizarEstiloComponente(){

      mostrar=true;
      var estilo="";

      $("input:radio:checked" ).each(function() {
          estilo=$(this).val();
      });

      var $datos={
          '_estilo': estilo
      }

      $.ajax({
          url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarEstiloSlider.php',
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
                  $('#c1Actualizar').modal('hide')
                  mostrarToast("exito","Actualización correcta!");
                  cargarDatos();
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