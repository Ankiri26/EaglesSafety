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
       
      <h3 class="titulo">Adicional de la empresa</h3>
      
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
                      <h6 class="subtitulo obligatorio">Descripción</h6>
                      <textarea id="descripcion" type="text" class="form-control" rows="3"></textarea>
                  </div>

                  <h6 class="subtitulo obligatorio">Imagen 1</h6>
                  <img id="previewFoto1" class="imagenMinSlider mb-2"><br>
                  <label for="foto1" class="botonSecundario">Seleccionar imagen</label>
                  <input id="foto1" class="inputImagen" name="archivo1" type="file" accept="image/*"><input type="text" hidden id="estado1">
                  
                  <h6 class="subtitulo obligatorio">Imagen 2</h6>
                  <img id="previewFoto2" class="imagenMinSlider mb-2"><br>
                  <label for="foto2" class="botonSecundario">Seleccionar imagen</label>
                  <input id="foto2" class="inputImagen" name="archivo2" type="file" accept="image/*"><input type="text" hidden id="estado2">
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio mt-0">Texto 1: Título</h6>
                      <input id="T1Titulo" type="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Texto 1: Descripción</h6>
                      <textarea id="T1Descripcion" type="text" class="form-control" rows="2"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio mt-0">Texto 2: Título</h6>
                      <input id="T2Titulo" type="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Texto 2: Descripción</h6>
                      <textarea id="T2Descripcion" type="text" class="form-control" rows="2"></textarea>
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio mt-0">Texto 3: Título</h6>
                      <input id="T3Titulo" type="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">Texto 3: Descripción</h6>
                      <textarea id="T3Descripcion" type="text" class="form-control" rows="2"></textarea>
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
               
              <!-- SIN ESTILO -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="c1SinEstilo" name="c1Estilos" value="0">
                <label class="custom-control-label" for="c1SinEstilo">No mostrar componente</label>
              </div> 
               
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
          <div class="container my-5">
            <section class="dark-grey-text text-center">

              <!-- TITULO Y DESCRIPCION -->
              <h3 class="c1titulo text-center font-weight-bold mb-4 pb-2"></h3>
              <p class="c1descripcion text-center text-muted w-responsive mx-auto mb-5"></p>

              <!-- CONTENIDO -->
              <div class="row">

                <!-- TEXTO 1 -->
                <div class="col-md-6 mb-4">
                  <div class="c1imagen1 card card-image">
                    <div class="text-white text-center d-flex align-items-center py-5 px-4 px-md-5 rounded">
                      <div>
                        <h6 class="font-enfasis1">
                          <i class="fas fa-chart-pie"></i>
                          <strong>Funcional</strong>
                        </h6>
                        <h3 class="py-3 font-weight-bold">
                          <strong class="T1Titulo"></strong>
                        </h3>
                        <p class="T1Descripcion pb-3"></p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- TEXTO 2 -->
                <div class="col-md-6 mb-4">
                  <div class="c1imagen2 card card-image">
                    <div class="text-white text-center d-flex align-items-center py-5 px-4 px-md-5 rounded">
                      <div>
                        <h6 class="font-enfasis3">
                          <i class="fas fa-eye"></i>
                          <strong> Dinámico</strong>
                        </h6>
                        <h3 class="py-3 font-weight-bold">
                          <strong class="T2Titulo"></strong>
                        </h3>
                        <p class="T2Descripcion pb-3"></p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 2 -->
        <div class="tab-pane fade show" id="op2" role="tabpanel" aria-labelledby="op2-tab">
          <div class="container my-5 p-5 z-depth-1 bg-primary">
            <section class="text-center white-text">

              <!-- TITULO Y DESCRIPCION -->
              <h2 class="c1titulo font-weight-bold mb-4 pb-2 text-uppercase"></h2>
              <p class="c1descripcion mx-auto mb-5"></p>

              <!-- TEXTOS -->
              <div class="row">

                <!-- TEXTO 1 -->
                <div class="col-md-4 mb-4">

                  <i class="fas fa-brain fa-3x"></i>
                  <h5 class="T1Titulo font-weight-bold my-4 text-uppercase"></h5>
                  <p class="T1Descripcion mb-md-0 mb-5"></p>

                </div>

                <!-- TEXTO 2 -->
                <div class="col-md-4 mb-4">

                  <i class="fas fa-eye fa-3x"></i>
                  <h5 class="T2Titulo font-weight-bold my-4 text-uppercase"></h5>
                  <p class="T2Descripcion mb-md-0 mb-5"></p>

                </div>

                <!-- TEXTO 3 -->
                <div class="col-md-4 mb-4">

                  <i class="fas fa-users fa-3x"></i>
                  <h5 class="T3Titulo font-weight-bold my-4 text-uppercase"></h5>
                  <p class="T3Descripcion mb-0"></p>

                </div>

              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 3 -->
        <div class="tab-pane fade show" id="op3" role="tabpanel" aria-labelledby="op3-tab">
          <div class="container my-5">
            <section class="dark-grey-text text-center">

              <!-- TITULO -->
              <h3 class="c1titulo text-center font-weight-bold mb-4 pb-2"></h3>
              <p class="c1descripcion text-center text-muted w-responsive mx-auto mb-5"></p>

              <!-- TEXTO -->
              <div class="row">
                <div class="col-md-12 mb-4">
                  <div class="c1imagen1 card card-image" style="background-attachment: fixed;">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 px-md-5 rounded">
                      <div>
                        <h6 class="font-primary">
                          <i class="fas fa-eye"></i>
                          <strong> Funcional</strong>
                        </h6>
                        <h3 class="py-3 font-weight-bold">
                          <strong class="T1Titulo"></strong>
                        </h3>
                        <p class="T1Descripcion pb-3"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 4 -->
        <div class="tab-pane fade show" id="op4" role="tabpanel" aria-labelledby="op4-tab">
          <div class="container my-5 px-0 z-depth-1">
            <section class="c1imagen1 text-center white-text p-5" style="background-attachment: fixed; height: 50vh;">
              <div class="row d-flex justify-content-center" style='height: 100%'>
                <div class="col-md-6 my-auto">

                    <h1 class="c1titulo font-weight-bold" style='text-shadow: 1px 1px 8px #212529;'></h1>
                    <p class="c1descripcion" style='text-shadow: 1px 1px 8px #212529; font-size: 1.5rem;'></p>

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
      
      //--LLAMAR A FUNCION MOSTRAR IMAGEN 1 AL CARGAR IMAGEN--  
      var inputFile = document.getElementById('foto1');
      inputFile.addEventListener('change', vGenerales.mostrarImagen1, false);  
      
      //--LLAMAR A FUNCION MOSTRAR IMAGEN 2 AL CARGAR IMAGEN--  
      var inputFile = document.getElementById('foto2');
      inputFile.addEventListener('change', vGenerales.mostrarImagen2, false);  

      //--CARGAR DATOS DEL COMPONENTE  --  
      function cargarDatos(){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosComponente2.php',
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
                    $(".c1titulo").html(datos.C2TITULO);
                    $(".c1descripcion").html(datos.C2DESCRIPCION);
                    $(".c1imagen1").css("background-image","url("+datos.C2IMAGEN1+")");
                    $(".c1imagen1").css("background-repeat","no-repeat");
                    $(".c1imagen1").css("background-size","cover");
                    $(".c1imagen1").css("background-position","center");
                    $(".c1imagen2").css("background-image","url("+datos.C2IMAGEN2+")");
                    $(".c1imagen2").css("background-repeat","no-repeat");
                    $(".c1imagen2").css("background-size","cover");
                    $(".c1imagen2").css("background-position","center");
                    $(".T1Titulo").html(datos.C2T1TITULO);
                    $(".T1Descripcion").html(datos.C2T1DESCRIPCION);
                    $(".T2Titulo").html(datos.C2T2TITULO);
                    $(".T2Descripcion").html(datos.C2T2DESCRIPCION);
                    $(".T3Titulo").html(datos.C2T3TITULO);
                    $(".T3Descripcion").html(datos.C2T3DESCRIPCION);

                }
            }
        });
      }
      
      //--CARGAR DATOS DEL COMPONENTE  EN EL MODAL --  
      function cargarDatosModal(){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosComponente2.php',
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
                    $("#titulo").val(datos.C2TITULO);
                    $("#descripcion").html(datos.C2DESCRIPCION);
                    $("#previewFoto1").attr("src",datos.C2IMAGEN1);
                    $("#previewFoto2").attr("src",datos.C2IMAGEN2);
                    $("#T1Titulo").val(datos.C2T1TITULO);
                    $("#T1Descripcion").html(datos.C2T1DESCRIPCION);
                    $("#T2Titulo").val(datos.C2T2TITULO);
                    $("#T2Descripcion").html(datos.C2T2DESCRIPCION);
                    $("#T3Titulo").val(datos.C2T3TITULO);
                    $("#T3Descripcion").html(datos.C2T3DESCRIPCION);
                    switch(datos.COMP2){
                      case "0": $( "#c1SinEstilo" ).prop( "checked", true);break;
                      case "1": $( "#c1Estilo1" ).prop( "checked", true);break;
                      case "2": $( "#c1Estilo2" ).prop( "checked", true);break;
                      case "3": $( "#c1Estilo3" ).prop( "checked", true);break;
                      case "4": $( "#c1Estilo4" ).prop( "checked", true);break;
                    }
                  
                }
            }
        });
      }
      
      //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO --  
      function validarFormulario(){      

          var R1 = $("#titulo").val();
          var R2 = $("#descripcion").html();
          var R3 = $("#T1Titulo").val();
          var R4 = $("#T1Descripcion").html();
          var R5 = $("#T2Titulo").val();
          var R6 = $("#T2Descripcion").html();
          var R7 = $("#T3Titulo").val();
          var R8 = $("#T3Descripcion").html();

          if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#titulo").focus();
          }
          else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#descripcion").focus();
          }
          else if(R3 == null || R3.length == 0 || /^\s+$/.test(R3)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#T1Titulo").focus();
          }
          else if(R4 == null || R4.length == 0 || /^\s+$/.test(R4)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#T1Descripcion").focus();
          }
          else if(R5 == null || R5.length == 0 || /^\s+$/.test(R5)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#T2Titulo").focus();
          }
          else if(R6 == null || R6.length == 0 || /^\s+$/.test(R6)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#T2Descripcion").focus();
          }
          else if(R7 == null || R7.length == 0 || /^\s+$/.test(R7)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#T3Titulo").focus();
          }
          else if(R8 == null || R8.length == 0 || /^\s+$/.test(R8)){
              alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
              $("#T3Descripcion").focus();
          }
          else if(document.getElementById('foto1').files.length == 0 && document.getElementById('foto2').files.length == 0){
              actualizarDatosComponente();
          }else{
              guardarImagenComponente();
              if ($("#estado1").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                  actualizarDatosComponente();
              }else{
                  mostrar=true;
                  mostrarToast("error",$("#estado1").val());
              }
          }

      } 
      
      //--GUARDAR IMAGEN DEL COMPONENTE --  
      function guardarImagenComponente(){

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
            url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenComponente2.php",
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
      
      //--ACTUALIZAR DATOS DEL COMPONENTE  --  
      function actualizarDatosComponente(){
        
        var rutaFoto1,nombreFoto1;
        var rutaFoto2,nombreFoto2;

        if(document.getElementById('foto1').files.length == 0){
          if(document.getElementById('previewFoto1').src==""){
            rutaFoto1="";
          }else{
            nombreFoto1=document.getElementById('previewFoto1').src.split("/Componentes/");
            rutaFoto1="ES-FrontEnd/Elementos/Imagenes/Componentes/"+nombreFoto1[1];
          }
        }else{
          rutaFoto1="ES-FrontEnd/Elementos/Imagenes/Componentes/"+document.getElementById('foto1').files[0].name
        }

        if(document.getElementById('foto2').files.length == 0){
          if(document.getElementById('previewFoto2').src==""){
            rutaFoto2="";
          }else{
            nombreFoto2=document.getElementById('previewFoto2').src.split("/Componentes/");
            rutaFoto2="ES-FrontEnd/Elementos/Imagenes/Componentes/"+nombreFoto2[1];
          }
        }else{
          rutaFoto2="ES-FrontEnd/Elementos/Imagenes/Componentes/"+document.getElementById('foto2').files[0].name
        }

        mostrar=true;
        
        var $datos={
            '_titulo': $("#titulo").val(),
            '_descripcion': $("#descripcion").val(),
            '_imagen1': rutaFoto1,
            '_imagen2': rutaFoto2,
            '_T1Titulo': $("#T1Titulo").val(),
            '_T1Descripcion': $("#T1Descripcion").val(),
            '_T2Titulo': $("#T2Titulo").val(),
            '_T2Descripcion': $("#T2Descripcion").val(),
            '_T3Titulo': $("#T3Titulo").val(),
            '_T3Descripcion': $("#T3Descripcion").val()
          
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarDatosComponente2.php',
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
                    mostrarToast("exito","¡Actualización correcta!");
                }
            }
        });
      }
      
      //--ACTUALIZAR ESTILO DEL COMPONENTE  --  
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
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarEstiloComponente2.php',
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
                    mostrarToast("exito","¡Actualización correcta!");
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