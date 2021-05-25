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
          <h3 class="titulo">INFORMACIÓN GENERAL DE LA EMPRESA</h3>

          <!--CONTENIDO DEL FORMULARIO-->
          <div>
           
            <!--FORMULARIO-->
            <div class="row">

              <!--IMAGENES-->
              <div class="col-sm-5">
                <form action="" id="form">

                  <!--ICONO DE LA PAGINA-->
                  <div class="text-center" >
                     
                      <h6 class="subtitulo">ICONO DE LA PAGINA</h6>
                      
                      <img id="previewFoto1" class="imagenMin" ><br>
                      
                      <label for="foto1" class="botonSecundario">CAMBIAR IMAGEN</label>
                      <input id="foto1" class="inputImagen" name="archivo1" type="file" accept="image/*"><input type="text" hidden id="estado1">
                      
                  </div>

                  <!--LOGO DE LA PAGINA-->
                  <div class="text-center">
                     
                      <h6 class="subtitulo">LOGO DE LA PAGINA</h6>
                      
                      <img id="previewFoto2" class="imagenMin"><br>
                      
                      <label for="foto2" class="botonSecundario">CAMBIAR IMAGEN</label>
                      <input id="foto2" class="inputImagen" name="archivo2" type="file" accept="image/*"><input type="text" hidden id="estado2">
                      
                  </div>

                </form>
              </div>

              <!--INGRESAR DATOS-->
              <div class="col-sm-7">

                  <!--TITULO-->
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">TITULO</h6>
                      <input id="titulo" type="text" class="form-control" placeholder="Nombre de la página">
                  </div>

                  <!--CORREO-->
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">CORREO</h6>
                      <input id="correo" type="email" class="form-control" placeholder="empresa@empresa.com.pe">
                  </div>

                  <!--TELEFONO-->
                  <div class="d-flex flex-column flex-md-row">

                      <!--TELEFONO 1-->
                      <div class="pr-0 pr-md-4 form-group flex-fill">
                          <h6 class="subtitulo obligatorio">TELEFONO 1</h6>
                          <input id="telefono1" type="number" min="0" class="form-control" placeholder="999 999 999">
                      </div>

                      <!--TELEFONO 2-->
                      <div class="form-group flex-fill">
                          <h6 class="subtitulo obligatorio">TELEFONO 2</h6>
                          <input id="telefono2" type="number" min="0" class="form-control" placeholder="999 999 999">
                      </div>

                  </div>

                  <!--DIRECCION-->
                  <div class="d-flex flex-column flex-xl-row">

                      <!--PAIS-->
                      <div class="pr-0 pr-md-4 form-group flex-fill">
                          <h6 class="subtitulo obligatorio">PAIS</h6>
                          <select id="pais" class="browser-default custom-select">
                              <option value="PERU">PERU</option>
                          </select>
                      </div>

                      <!--PROVINCIA-->
                      <div class="pr-0 pr-md-4 form-group flex-fill">
                          <h6 class="subtitulo obligatorio">PROVINCIA</h6>
                          <select id="provincia" class="browser-default custom-select">
                              <option value="LIMA">LIMA</option>
                          </select>
                      </div>

                      <!--DISTRITO-->
                      <div class="form-group flex-fill">
                          <h6 class="subtitulo obligatorio">DISTRITO</h6>
                          <select id="distrito" class="browser-default custom-select">
                              <option value="COMAS">COMAS</option>
                              <option value="SMP">SMP</option>
                          </select>
                      </div>

                  </div>

                  <!--DOMICILIO-->
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">DOMICILIO</h6>
                      <input id="direccion" type="text" class="form-control" placeholder="Calle Empresa N° 111">
                  </div>

              </div>
              
              <!--REDES SOCIALES-->
              <div class="col-12">

                  <!--FACEBOOK 1-->
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">FACEBOOK</h6>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-lg fa-facebook-square"></i></span>
                        </div>
                        <input id="redSocial1" type="text" class="form-control" placeholder="Link de facebook">
                      </div>
                  </div>

                  <!--LINKEDIN 2-->
                  <div class="form-group">
                      <h6 class="subtitulo obligatorio">LINKEDIN</h6>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fab fa-lg fa-linkedin"></i></span>
                        </div>
                        <input id="redSocial2" type="text" class="form-control" placeholder="Link de linkedin">
                      </div>
                  </div>

              </div>

            </div>

            <!--BOTONES-->
            <div class="row justify-content-center my-5">
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
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosEmpresa.php',
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
                    $("#titulo").val(datos.INFEMPTITULO_PAGINA);
                    $("#correo").val(datos.INFEMPCORREO);
                    $("#telefono1").val(datos.INFEMPTELEFONO1);
                    $("#telefono2").val(datos.INFEMPTELEFONO2);
                    $("#redSocial1").val(datos.INFEMPRED_SOCIAL1);
                    $("#redSocial2").val(datos.INFEMPRED_SOCIAL2);
                    $("#pais option[value="+ datos.INFEMPPAIS +"]").attr("selected",true);
                    $("#provincia option[value="+ datos.INFEMPPROVINCIA +"]").attr("selected",true);
                    $("#distrito option[value="+ datos.INFEMPDISTRITO +"]").attr("selected",true);
                    $("#direccion").val(datos.INFEMPDOMICILIO);

                    if(datos.INFEMPICONO!=""){
                      document.getElementById('previewFoto1').src = datos.INFEMPICONO;
                    }

                    if(datos.INFEMPLOGO!=""){
                      document.getElementById('previewFoto2').src = datos.INFEMPLOGO;
                    }
                }
            }
        });

    }

    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO --  
    function validarFormulario(){

        var R1 = $("#titulo").val();
        var R2 = $("#correo").val();
        var R3 = $("#telefono1").val();
        var R4 = $("#telefono2").val();
        var R5 = $("#redSocial1").val();
        var R6 = $("#redSocial2").val();
        var R7 = $("#direccion").val();

        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#titulo").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#correo").focus();
        }
        else if(R3 == null || R3.length == 0 || /^\s+$/.test(R3)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#telefono1").focus();
        }
        else if(R4 == null || R4.length == 0 || /^\s+$/.test(R4)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#telefono2").focus();
        }
        else if(R5 == null || R5.length == 0 || /^\s+$/.test(R5)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#redSocial1").focus();
        }
        else if(R6 == null || R6.length == 0 || /^\s+$/.test(R6)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#redSocial2").focus();
        }
        else if(R7 == null || R7.length == 0 || /^\s+$/.test(R7)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#direccion").focus();
        }
        else if(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(R2)){

                    if(document.getElementById('foto1').files.length == 0 && document.getElementById('foto2').files.length == 0){
                            actualizarDatosEmpresa();
                    }else{
                            guardarImagenEmpresa();

                            if ($("#estado1").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                                    actualizarDatosEmpresa()
                            }else{
                                    mostrar=true;
                                    mostrarToast("error",$("#estado1").val());
                            }

                    }

        }else{
            alert('ERROR: Ingresar un correo electronico valido.');
            $("#correo").focus();
        }

    } 

    //--GUARDAR IMAGENES DE LA EMPRESA --
    function guardarImagenEmpresa(){

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
          url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenEmpresa.php",
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
    function actualizarDatosEmpresa(){
        var rutaFoto1,nombreFoto1;
        var rutaFoto2,nombreFoto2;

        if(document.getElementById('foto1').files.length == 0){
          if(document.getElementById('previewFoto1').src==""){
            rutaFoto1="";
          }else{
            nombreFoto1=document.getElementById('previewFoto1').src.split("/Imagenes/");
            rutaFoto1="ES-FrontEnd/Elementos/Imagenes/"+nombreFoto1[1];
          }
        }else{
          rutaFoto1="ES-FrontEnd/Elementos/Imagenes/"+document.getElementById('foto1').files[0].name
        }

        if(document.getElementById('foto2').files.length == 0){
          if(document.getElementById('previewFoto2').src==""){
            rutaFoto2="";
          }else{
            nombreFoto2=document.getElementById('previewFoto2').src.split("/Imagenes/");
            rutaFoto2="ES-FrontEnd/Elementos/Imagenes/"+nombreFoto2[1];
          }
        }else{
          rutaFoto2="ES-FrontEnd/Elementos/Imagenes/"+document.getElementById('foto2').files[0].name
        }

            mostrar=true;

        var $datos={
            '_titulo': $("#titulo").val(),
            '_correo': $("#correo").val(),
            '_telefono1': $("#telefono1").val(),
            '_telefono2': $("#telefono2").val(),
            '_redSocial1': $("#redSocial1").val(),
            '_redSocial2': $("#redSocial2").val(),
            '_direccion': $("#direccion").val(),
            '_distrito': $("#distrito").val(),
            '_provincia': $("#provincia").val(),
            '_pais': $("#pais").val(),
            '_rutaFotoIcon': rutaFoto1,
            '_rutaFotoLogo': rutaFoto2
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarDatosEmpresa.php',
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