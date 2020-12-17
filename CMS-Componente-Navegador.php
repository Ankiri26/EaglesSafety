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
    <section class="cuerpo mb-5" id="cuerpo">
       
      <h3 class="titulo">BARRA DE NAVEGACIÓN</h3>
      
      <!-- OPCIONES DE LA VISTA-->
      <div class="row">
        <div class="col text-center">
          <button class="btn botonTercero" data-toggle="modal" data-target="#c1Actualizar" onclick="cargarDatosModal()"><i class="fas fa-sync"></i> Actualizar componente</button>
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
      
      <!-- ESTILO 1 -->
      <div>
        <h6 class="subtitulo">Estilo 1</h6>
        <nav id="navbar1" class="navbar navbar-expand-lg navbar-light white ml-0">

          <div class="container"> 

            <!-- TITULO-->
            <a class="navbar-brand" href="index.php"></a>

            <!-- BOTON EXPANSIBLE-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1Button"
                    aria-controls="navbar1Button" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- CONTENIDO-->
            <div class="collapse navbar-collapse" id="navbar1Button">

              <!--OPCIONES DEL MENU-->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link waves-effect" href="index.php" target="_blank">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link waves-effect" href="Nosotros.php" target="_blank">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link waves-effect" href="Productos.php" target="_blank">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link waves-effect" href="Contactos.php" target="_blank">Contáctanos</a>
                </li>
              </ul>

              <!--REDES SOCIALES-->
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <a class="nav-link waves-effect" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link waves-effect" target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
                </li>
              </ul>

            </div>

          </div>

        </nav>
      </div>
      
      <!-- ESTILO 2 -->
      <div>
          <h6 class="subtitulo">Estilo 2</h6>
          
          <!--Navbar-->
          <nav id="navbar2" class="navbar navbar-expand-lg navbar-dark bg-primary ml-0">
            <div class="container">

              <!-- TITULO-->
              <a class="navbar-brand py-0" href="index.php"></a>

              <!-- BOTON EXPANSIBLE-->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenido"
                aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- CONTENIDO-->
              <div class="collapse navbar-collapse" id="navbarContenido">

                <!--OPCIONES DEL MENU-->
                <ul class="navbar-nav mr-auto text-uppercase">
                  <li class="nav-item active">
                    <a class="nav-link font-weight-normal" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Nosotros.php">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Productos.php">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Contactos.php">Contáctanos</a>
                  </li>
                </ul>
                
                <!-- OTROS -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                  <li class="nav-item"><a href="Compras.php" class="nav-link waves-effect"><span id="itemsComprados" class="badge red z-depth-1 mr-1"> 2 </span><i class="fas fa-shopping-cart"></i></a></li>

                  <li class="nav-item d-none d-xl-inline-block" alt="Support" id="navbar-static-support">
                    <a href="" class="nav-link waves-effect">
                    <i class="fas fa-question-circle"></i><span class="d-none d-xl-inline-block ml-1">Support</span>
                    </a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false"><i class="fas fa-wrench"></i><span class="d-none d-xl-inline-block ml-1">Tools</span></a>
                    <div class="dropdown-menu dropdown-primary dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                </ul>

              </div>
              <!-- Collapsible content -->

            </div>
          </nav>

      </div>
      
      <!-- ESTILO 3 -->
      <div>
          <h6 class="subtitulo">Estilo 3</h6>
          
          <style>
        
            #navbar3.navbar{
                background-color: rgba(1,1,1,0.9);
                padding: 0 !important;
                box-shadow: 0 0 0 0 !important;
            }
            #navbar3.navbar .navbar-brand{
                color: white !important; 
                font-weight: bold;
                font-size: 2.4rem;
                margin-left: 30px;
                font-family: 'Dancing Script', cursive;
                text-shadow: 0 0 5px black;
            }
            #navbar3.navbar .navbar-brand img{
                max-width: 60px; 
                transition: 1s;
            }
            #navbar3.navbar .nav-link{ 
                color: white !important; 
                font-weight: 700;
            }
            #navbar3.navbar .nav-item:hover{
                background: var(--primary) !important;
                transition: 0.3s;
            }
            #navbar3.navbar .rs a{
                color: white;
                margin-right: 50px;
                margin-bottom: 3%;
                cursor: context-menu;
            }
            #navbar3.navbar .rs a span{
                background: var(--primary); 
                width:25px; 
                height:25px;
            }
            #navbar3.navbar .rs a:hover{ color: white; }
            #navbar3.navbar .activeNav{background: var(--primary);}
            
            /*=============================================
            MEDIA RESPONSIVE
            =============================================*/
            @media (max-width: 768px) { 

                /*menu style*/
                #navbar3.navbar{background-color: rgba(1,1,1,0.9);}
                #navbar3.navbar .navbar-brand{
                    color: white !important; 
                    font-size: 1.4rem;
                    margin-left: 10px;
                }
                #navbar3.navbar .navbar-brand img{ 
                    max-width: 40px; 
                    transition: 1s; 
                    margin-right: 8px;
                }
                #navbar3.navbar .navbar-collapse{
                    margin-right: 10px !important;
                    margin-left: 10px !important;
                }
                #navbar3.navbar .rs a{
                    margin-top: 3%;
                }

            }
            
          </style>
          
          <!--Navbar-->
          <nav id="navbar3" class="navbar navbar-expand-lg navbar-dark ml-0">
     
            <!-- TITULO-->
            <a class="navbar-brand" href="index.php"></a>

            <!-- BOTON EXPANSIBLE-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- CONTENIDO-->
            <div class="collapse navbar-collapse" id="navbarText">

              <!--OPCIONES DEL MENU-->
              <ul class="navbar-nav mr-auto">

                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>

                <li class="nav-item"><a class="nav-link" href="Nosotros.php">Nosotros</a></li>

                <li class="nav-item"><a class="nav-link" href="Productos.php">Productos</a></li>

                <li class="nav-item"><a class="nav-link" href="Contactos.php">Contáctanos</a></li>

              </ul>

              <!--REDES SOCIALES-->
              <ul class="navbar-nav rs">
                <li class="d-flex flex-column">
                  <a id="telNavES"></a>
                  <a id="correoNavES"></a>
                </li>
              </ul>

            </div>

          </nav>
          
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
      mostrarInformacionEmpresa2();
      
      //-- FUNCION MOSTRAR INFORMACION DE LA EMPRESA --
      function mostrarInformacionEmpresa2(){
          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosEmpresa.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                  if(error.status == 401){
                      console.log("Archivos no encontrados");
                  }
                  else{
                      console.log("Error no identificado");
                  }
              },
              success: function(datos){

                  //NAV
                  $("#navbar1 .navbar-brand").html("<img class='mr-3' src='"+datos[0].INFEMPLOGO+"' height='50'>");
                  $("#navbar2 .navbar-brand").html(datos[0].INFEMPTITULO_PAGINA);
                  $("#navbar3 .navbar-brand").html("<img class='mr-3' src='"+datos[0].INFEMPLOGO+"' width='100'>"+datos[0].INFEMPTITULO_PAGINA);

                  $("#telNavES").html("<span class='fa fa-phone rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPTELEFONO1+" / "+datos[0].INFEMPTELEFONO2);

                  $("#correoNavES").html("<span class='fa fa-envelope rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPCORREO);

              }
          });
      };

      
      
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