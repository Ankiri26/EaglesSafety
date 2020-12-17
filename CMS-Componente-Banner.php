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
       
      <h3 class="titulo">Presentación de la empresa</h3>
      
      <!-- OPCIONES DE LA VISTA-->
      <div class="row">
        <div class="col text-center">
          <button class="btn botonTercero" data-toggle="modal" data-target="#c1Editar" onclick="cargarDatosModal()"><i class="far fa-edit"></i> Editar descripción</button>
          <button class="btn botonTercero" data-toggle="modal" data-target="#c1Actualizar" onclick="cargarDatosModal()"><i class="fas fa-sync"></i> Actualizar componente</button>
        </div>
      </div>
      
      <!-- MODAL EDITAR -->
      <div class="modal fade" id="c1Editar" tabindex="-1" role="dialog" aria-labelledby="c1Editar"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
           
            <!-- Titulo -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar descripción</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <!-- Contenido -->
            <div class="modal-body">
              <form id="form" class="text-center">
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio mt-0">Título</h6>
                      <input id="titulo" type="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio mt-0">Subtítulo</h6>
                      <input id="subtitulo" type="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Descripción</h6>
                      <textarea id="descripcion" type="text" class="form-control" rows="3"></textarea>
                  </div>

                  <h6 class="subtitulo obligatorio">Imagen</h6>
                  <img id="previewFoto" class="imagenMinSlider mb-2"><br>
                  <label for="foto" class="botonSecundario">Seleccionar imagen</label>
                  <input id="foto" class="inputImagen" name="archivo" type="file" accept="image/*"><input type="text" hidden id="estado">
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Destacamos</h6>
                      <textarea id="destacamos" type="text" class="form-control" rows="3"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Característica 1</h6>
                      <textarea id="caracteristica1" type="text" class="form-control" rows="2"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Característica 2</h6>
                      <textarea id="caracteristica2" type="text" class="form-control" rows="2"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Característica 3</h6>
                      <textarea id="caracteristica3" type="text" class="form-control" rows="2"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Característica 4</h6>
                      <textarea id="caracteristica4" type="text" class="form-control" rows="2"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Característica 5</h6>
                      <textarea id="caracteristica5" type="text" class="form-control" rows="2"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Característica 6</h6>
                      <textarea id="caracteristica6" type="text" class="form-control" rows="2"></textarea>
                  </div>

              </form>
            </div>
            
            <!-- Botones -->
            <div class="modal-footer">
              <button id="guardar" type="button" class="btn bg-primary" onClick="validarFormulario()">Guardar</button>
            </div>
            
          </div>
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
              
              <h6 class="subtitulo mt-0">Seleccionar el estilo del componente de presentación de la empresa:</h6>
               
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
              
              <!-- ESTILO 5 -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="c1Estilo5" name="c1Estilos" value="5">
                <label class="custom-control-label" for="c1Estilo5">Estilo 5</label>
              </div>
              
            </div>
            
            <!-- Botones -->
            <div class="modal-footer">
              <button id="actualizar" type="button" class="btn bg-primary" onClick="actualizarEstiloComponente1()">Guardar</button>
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
        <li class="nav-item">
          <a class="nav-link font-secundary" id="op5-tab" data-toggle="tab" href="#op5" role="tab" aria-controls="op5"
            aria-selected="true">Estilo 5</a>
        </li>
      </ul>
      
      <!-- Vista previa de estilos-->
      <div class="tab-content">
        <!-- ESTILO 1 -->
        <div class="tab-pane fade show active" id="op1" role="tabpanel" aria-labelledby="op1-tab">
          <div class="container my-5 py-5 z-depth-1">
            <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
              <div class="row">

                <!--IMAGEN-->
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">

                  <img class="c1imagen img-fluid wow fadeInLeft" style="max-height:400px;">

                </div>

                <!--DESCRIPCION-->
                <div class="col-lg-6 mb-4 mb-lg-0">

                  <h3 class="c1titulo font-weight-bold wow fadeIn"></h3>
                  <p class="c1subtitulo font-weight-bold wow fadeIn"></p>
                  <p class="c1descripcion text-muted wow fadeIn"></p>
                  <a class="font-weight-bold disabled font-primary wow fadeIn" href="Nosotros.php" >Conocer más<i class="fas fa-angle-right ml-2"></i></a>

                </div>

              </div>
            </section>
          </div>
        </div>
        
        <!-- ESTILO 2 -->
        <div class="tab-pane fade show" id="op2" role="tabpanel" aria-labelledby="op2-tab">
          <div class="container my-5 py-5 z-depth-1">
            <section class="px-md-5 mx-md-5 text-center dark-grey-text">
              <div class="row">

                <!--DESCRIPCION-->
                <div class="col-md-6 mb-4 mb-md-0">

                  <h3 class="c1titulo font-weight-bold wow fadeIn"></h3>
                  <p class="c1descripcion text-muted wow fadeIn"></p>
                  <a class="btn bg-primary btn-md ml-0 disabled wow fadeIn" href="Nosotros.php" role="button">Conocer más<i class="fa fa-gem ml-2"></i></a>

                  <hr class="my-5">
                  <p class="font-weight-bold wow fadeIn">Síguenos en:</p>

                  <!--Redes sociales-->
                  <a href="" class="mx-1 font-primary disabled wow fadeIn" role="button"><i class="fab fa-facebook-f"></i></a>
                  <a href="" class="mx-1 font-primary disabled wow fadeIn" role="button"><i class="fab fa-linkedin-in"></i></a>
                  <a href="" class="mx-1 font-primary disabled wow fadeIn" role="button"><i class="fab fa-instagram"></i></a>

                </div>

                <!--IMAGEN-->
                <div class="col-md-5 mb-4 mb-md-0">

                  <img class="c1imagen img-fluid wow fadeInRight" style="max-height:400px;">

                </div>

              </div>
            </section>
          </div>
        </div>
        
        <!-- ESTILO 3 -->
        <div class="tab-pane fade show" id="op3" role="tabpanel" aria-labelledby="op3-tab">
          <div class="container my-5 py-5 z-depth-1">
            <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

              <!--TITULO & DESCRIPCION-->
              <h3 class="c1titulo font-weight-bold wow fadeIn"></h3>
              <p class="c1descripcion text-muted mb-5 wow fadeIn"></p>

              <!--DESTACADO-->
              <div class="row">

                <!--IMAGEN-->
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">

                  <img class="c1imagen img-fluid wow fadeInLeft">

                </div>

                <!--DESCRIPCION-->
                <div class="col-lg-6 col-md-6 mb-lg-0 mb-lg-0 mb-2">

                  <h4 class="h4 wow fadeIn">¿Por qué elegirnos?</h4>
                  <p class="c1destacamos text-muted wow fadeIn"></p>

                </div>

                <!--OPCIONES-->
                <div class="col-lg-3 col-md-6 text-center">

                  <a class="btn bg-primary btn-md waves-effect disabled wow fadeIn" href="Nosotros.php" role="button">Ver más</a>
                  <a class="btn bg-primary btn-md disabled wow fadeIn" href="Contactos.php" role="button">Contáctanos</a>

                </div>

              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 4 -->
        <div class="tab-pane fade show" id="op4" role="tabpanel" aria-labelledby="op4-tab">
          <div class="container my-5 py-5 z-depth-1">
            <section class="px-md-5 mx-md-5 text-center dark-grey-text">

              <!--DESCRIPCION-->
              <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-md-8">

                  <h3 class="c1titulo font-weight-bold wow fadeIn"></h3>
                  <p class="c1descripcion text-muted wow fadeIn"></p>

                  <a class="btn bg-primary btn-md ml-0 mb-5 disabled wow fadeIn" href="Nosotros.php" role="button">Ver más<i class="fa fa-magic ml-2"></i></a>

                </div>
              </div>

              <!--CARACTERISTICAS-->
              <div class="row">

                <!--CARACTERISTICA 1-->
                <div class="col-lg-3 col-md-6 wow fadeIn">
                  <i class="fas fa-gem fa-3x blue-text"></i>

                  <p class="font-weight-bold my-3">Calidad</p>
                  <p class="c1caracteristica1 text-muted"></p>
                </div>

                <!--CARACTERISTICA 2-->
                <div class="col-lg-3 col-md-6 wow fadeIn">
                    <i class="fas fa-chart-area fa-3x teal-text"></i>

                    <p class="font-weight-bold my-3">Garantía</p>
                    <p class="c1caracteristica2 text-muted"></p>
                </div>

                <!--CARACTERISTICA 3-->
                <div class="col-lg-3 col-md-6 wow fadeIn">
                    <i class="fas fa-cogs fa-3x indigo-text"></i>

                    <p class="font-weight-bold my-3">Funcional</p>
                    <p class="c1caracteristica3 text-muted"></p>
                </div>

                <!--CARACTERISTICA 4-->
                <div class="col-lg-3 col-md-6 wow fadeIn">
                    <i class="fas fa-cloud-upload-alt fa-3x deep-purple-text"></i>

                    <p class="font-weight-bold my-3">Eficaz</p>
                    <p class="c1caracteristica4 text-muted"></p>
                </div>

              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 5 -->
        <div class="tab-pane fade show" id="op5" role="tabpanel" aria-labelledby="op5-tab">
          <div class="container my-5 p-5 z-depth-1">
            <section class="dark-grey-text">

              <!-- TITULO & DESCRIPCION -->
              <h2 class="c1titulo text-center font-weight-bold mb-4 pb-2"></h2>
              <p class="c1descripcion text-center lead grey-text mx-auto mb-5"></p>

              <!-- CARACTERISTICAS -->
              <div class="row">

                <!-- CARACTERISTICAS -->
                <div class="col-md-4">

                  <!-- CARACTERISTICA 1 -->
                  <div class="row mb-3 wow fadeIn">

                    <!-- ICON -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-flag-checkered font-primary"></i>
                    </div>

                    <!-- CONTENIDO -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Calidad</h5>
                      <p class="c1caracteristica1 grey-text"></p>
                    </div>

                  </div>

                  <!-- CARACTERISTICA 2 -->
                  <div class="row mb-3 wow fadeIn">

                    <!-- ICON -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-flask font-primary"></i>
                    </div>

                    <!-- CONTENIDO -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Eficiente</h5>
                      <p class="c1caracteristica2 grey-text"></p>
                    </div>

                  </div>

                  <!-- CARACTERISTICA 3 -->
                  <div class="row mb-md-0 mb-3 wow fadeIn">

                    <!-- ICON -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-glass-martini font-primary"></i>
                    </div>

                    <!-- CONTENIDO -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Garantía</h5>
                      <p class="c1caracteristica3 grey-text mb-md-0"></p>
                    </div>

                  </div>

                </div>

                <!-- IMAGEN -->
                <div class="col-md-4 text-center">
                  <img class="c1imagen img-fluid wow fadeIn">
                </div>

                <!-- CARACTERISTICAS -->
                <div class="col-md-4">

                  <!-- CARACTERISTICA 4 -->
                  <div class="row mb-3 wow fadeIn">

                    <!-- ICON -->
                    <div class="col-2">
                      <i class="far fa-2x fa-heart font-primary"></i>
                    </div>

                    <!-- CONTENIDO -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Confiable</h5>
                      <p class="c1caracteristica4 grey-text"></p>
                    </div>

                  </div>

                  <!-- CARACTERISTICA 5 -->
                  <div class="row mb-3 wow fadeIn">

                    <!-- ICON -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-bolt font-primary"></i>
                    </div>

                    <!-- CONTENIDO -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Eficaz</h5>
                      <p class="c1caracteristica5 grey-text"></p>
                    </div>

                  </div>

                  <!-- CARACTERISTICA 6 -->
                  <div class="row wow fadeIn">

                    <!-- ICON -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-magic font-primary"></i>
                    </div>

                    <!-- CONTENIDO -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Mágico</h5>
                      <p class="c1caracteristica6 grey-text mb-0"></p>
                    </div>

                  </div>

                </div>

              </div>

            </section>
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
      cargarDatos();
      
      //--LLAMAR A FUNCION MOSTRAR IMAGEN AL CARGAR IMAGEN--  
      var inputFile = document.getElementById('foto');
      inputFile.addEventListener('change', vGenerales.mostrarImagen, false);  

      //--CARGAR DATOS DEL COMPONENTE 1 --  
      function cargarDatos(){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosComponente1.php',
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
                  
                    //VISTA PREVIA
                    $(".c1titulo").html(datos.C1TITULO);
                    $(".c1subtitulo").html(datos.C1SUBTITULO);
                    $(".c1descripcion").html(datos.C1DESCRIPCION);
                    $(".c1imagen").attr("src",datos.C1IMAGEN);
                    $(".c1destacamos").html(datos.C1DESTACAMOS);
                    $(".c1caracteristica1").html(datos.C1CARACTERISTICA1);
                    $(".c1caracteristica2").html(datos.C1CARACTERISTICA2);
                    $(".c1caracteristica3").html(datos.C1CARACTERISTICA3);
                    $(".c1caracteristica4").html(datos.C1CARACTERISTICA4);
                    $(".c1caracteristica5").html(datos.C1CARACTERISTICA5);
                    $(".c1caracteristica6").html(datos.C1CARACTERISTICA6);

                }
            }
        });
      }
      
      //--CARGAR DATOS DEL COMPONENTE 1 EN EL MODAL --  
      function cargarDatosModal(){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosComponente1.php',
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
                  
                    //MODAL
                    $("#titulo").val(datos.C1TITULO);
                    $("#subtitulo").val(datos.C1SUBTITULO);
                    $("#descripcion").html(datos.C1DESCRIPCION);
                    $("#previewFoto").attr("src",datos.C1IMAGEN);
                    $("#destacamos").html(datos.C1DESTACAMOS);
                    $("#caracteristica1").html(datos.C1CARACTERISTICA1);
                    $("#caracteristica2").html(datos.C1CARACTERISTICA2);
                    $("#caracteristica3").html(datos.C1CARACTERISTICA3);
                    $("#caracteristica4").html(datos.C1CARACTERISTICA4);
                    $("#caracteristica5").html(datos.C1CARACTERISTICA5);
                    $("#caracteristica6").html(datos.C1CARACTERISTICA6);
                    switch(datos.COMP1){
                      case "1": $( "#c1Estilo1" ).prop( "checked", true);break;
                      case "2": $( "#c1Estilo2" ).prop( "checked", true);break;
                      case "3": $( "#c1Estilo3" ).prop( "checked", true);break;
                      case "4": $( "#c1Estilo4" ).prop( "checked", true);break;
                      case "5": $( "#c1Estilo5" ).prop( "checked", true);break;
                    }
                  
                }
            }
        });
      }
      
      //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO --  
      function validarFormulario(){      

          var R1 = $("#titulo").val();
          var R2 = $("#subtitulo").val();
          var R3 = $("#descripcion").html();
          var R4 = $("#destacamos").html();
          var R5 = $("#caracteristica1").html();
          var R6 = $("#caracteristica2").html();
          var R7 = $("#caracteristica3").html();
          var R8 = $("#caracteristica4").html();
          var R9 = $("#caracteristica5").html();
          var R10 = $("#caracteristica6").html();

          if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#titulo").focus();
          }
          else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#subtitulo").focus();
          }
          else if(R3 == null || R3.length == 0 || /^\s+$/.test(R3)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#descripcion").focus();
          }
          else if(R4 == null || R4.length == 0 || /^\s+$/.test(R4)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#destacamos").focus();
          }
          else if(R5 == null || R5.length == 0 || /^\s+$/.test(R5)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#caracteristica1").focus();
          }
          else if(R6 == null || R6.length == 0 || /^\s+$/.test(R6)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#caracteristica2").focus();
          }
          else if(R7 == null || R7.length == 0 || /^\s+$/.test(R7)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#caracteristica3").focus();
          }
          else if(R8 == null || R8.length == 0 || /^\s+$/.test(R8)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#caracteristica4").focus();
          }
          else if(R9 == null || R9.length == 0 || /^\s+$/.test(R9)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#caracteristica5").focus();
          }
          else if(R10 == null || R10.length == 0 || /^\s+$/.test(R10)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#caracteristica6").focus();
          }
          else if(document.getElementById('foto').files.length == 0){
              actualizarDatosComponente1();
          }else{
              guardarImagenComponente1();

              if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                      actualizarDatosComponente1()
              }else{
                      mostrar=true;
                      mostrarToast("error",$("#estado").val());
              }
          }

      } 
      
      //--GUARDAR IMAGEN DEL COMPONENTE 1--  
      function guardarImagenComponente1(){

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
            url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenComponente1.php",
            type: "POST",
            data: nuevoFormulario,
            contentType: false,
            processData: false,
            async:false,
            success: function(datos){
              if(datos.response1==0 && datos.response2 ==0){
                    $("#estado").val("ERROR AL GUARDAR LA IMAGEN: "+datos.message)
                }else{
                    $("#estado").val("IMAGEN GUARDADA CORRECTAMENTE")
                }
            }
        });
        
      }
      
      //--ACTUALIZAR DATOS DEL COMPONENTE 1 --  
      function actualizarDatosComponente1(){
        
        var rutaFoto, nombreFoto;

        if(document.getElementById('foto').files.length == 0){
          if(document.getElementById('previewFoto').src==""){
            rutaFoto="";
          }else{
            nombreFoto=document.getElementById('previewFoto').src.split("/Componentes/");
            rutaFoto="ES-FrontEnd/Elementos/Imagenes/Componentes/"+nombreFoto[1];
          }
        }else{
          rutaFoto="ES-FrontEnd/Elementos/Imagenes/Componentes/"+document.getElementById('foto').files[0].name
        }

        mostrar=true;
        
        var $datos={
            '_titulo': $("#titulo").val(),
            '_subtitulo': $("#subtitulo").val(),
            '_descripcion': $("#descripcion").val(),
            '_imagen': rutaFoto,
            '_destacamos': $("#destacamos").val(),
            '_caracteristica1': $("#caracteristica1").val(),
            '_caracteristica2': $("#caracteristica2").val(),
            '_caracteristica3': $("#caracteristica3").val(),
            '_caracteristica4': $("#caracteristica4").val(),
            '_caracteristica5': $("#caracteristica5").val(),
            '_caracteristica6': $("#caracteristica6").val()
          
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarDatosComponente1.php',
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
                    $('#c1Editar').modal('hide')
                    cargarDatos();
                    mostrarToast("exito","Actualizacion correcta!");
                }
            }
        });
      }
      
      //--ACTUALIZAR ESTILO DEL COMPONENTE 1 --  
      function actualizarEstiloComponente1(){

        mostrar=true;
        var estilo="";
        
        $("input:radio:checked" ).each(function() {
            estilo=$(this).val();
        });

        var $datos={
            '_estilo': estilo
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarEstiloComponente1.php',
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