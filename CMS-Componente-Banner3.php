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
       
      <h3 class="titulo">Adicional 2 de la empresa</h3>
      
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
           <div class="container my-5">
            <section class="px-md-5 mx-md-5 py-5 text-center white-text elegant-color z-depth-1 rounded">

              <h3 class="">Made with <i class="fas fa-heart red-text mx-1"></i> by MDB</h3>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 2 -->
        <div class="tab-pane fade show" id="op2" role="tabpanel" aria-labelledby="op2-tab">
          <div class="container-fluid mt-3 mb-5">

            <section style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/full%20page/img%20(2).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

              <style>
                .input-grey .input-group-lg>.input-group-prepend>.input-group-text {
                  border-radius: .125rem;
                }

                .input-grey .form-control {
                  border-radius: .125rem;
                }

                .input-grey .form-control.form-control-lg {
                  font-size: 1rem;
                }

                .form-control:focus {
                  background-color: rgba(255,255,255,.3);
                }

                .input-grey input::placeholder {
                  color: #fff;
                }

                .input-grey .input-group-lg>.form-control:not(textarea) {
                  height: calc(1.5em + 1rem + 6px);
                }

                .social .fab {
                  width: 30px;
                  height: 30px;
                }
              </style>

              <div class="mask rgba-black-strong py-5">

                <div class="container text-center my-5">

                  <h3 class="font-weight-bold text-center white-text pb-2">News and Updates</h3>
                  <p class="lead text-center white-text pt-2 mb-5">Subscribe to our newsletter and receive the latest news
                    from MDB.</p>

                  <form class="input-grey mb-5" action="" method="post" target="_blank">
                    <div class="form-row">
                      <div class="col-md-4 ml-auto">
                        <div class="input-group input-group-lg z-depth-1">
                          <div class="input-group-prepend">
                            <span class="input-group-text rgba-white-light border-0"><i class="fa fa-envelope white-text"></i></span>
                          </div>
                          <input type="email" name="EMAIL" class="form-control form-control-lg rgba-white-light white-text border-0 z-depth-0" placeholder="Email Address">
                        </div>
                      </div>

                      <div class="col-md-2 mr-auto">
                        <button class="btn btn-block btn-primary">Subscribe</button>
                      </div>
                    </div>
                  </form>

                  <div class="social text-center">
                    <a class="mx-1" href="#"><i class="fab fa-facebook-f p-2 rounded rgba-white-light white-text"></i></a>
                    <a class="mx-1" href="#"><i class="fab fa-twitter p-2 rounded rgba-white-light white-text"></i></a>
                    <a class="mx-1" href="#"><i class="fab fa-linkedin-in p-2 rounded rgba-white-light white-text"></i></a>
                    <a class="mx-1" href="#"><i class="fab fa-instagram p-2 rounded rgba-white-light white-text"></i></a>
                  </div>

                </div>

              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 3 -->
        <div class="tab-pane fade show" id="op3" role="tabpanel" aria-labelledby="op3-tab">
          <div class="container-fluid mt-3 mb-5">
            <section style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(1).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

              <!-- Modal -->
              <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe id="player" class="embed-responsive-item" src="https://www.youtube.com/embed/7MUISDJ5ZZ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mask rgba-black-strong py-5">

                <div class="container text-center my-5">

                  <h3 class="font-weight-bold text-center white-text pb-2">Watch Video</h3>
                  <hr class="w-header hr-light my-4">
                  <p class="lead text-center white-text pt-2 mb-5">Explore the best MDB template in the market in a short 1-minute video.</p>

                  <a id="play" class="btn-floating btn-cyan btn-lg" data-toggle="modal" data-target="#modal1"><i class="fas fa-play"></i></a>

                </div>

              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 4 -->
        <div class="tab-pane fade show" id="op4" role="tabpanel" aria-labelledby="op4-tab">
          <div class="container-fluid mt-3 mb-5">
            <section class="deep-blue-gradient">

              <style>
                .input-grey .form-control {
                  border-radius: .125rem;
                }

                .form-control:focus {
                  background-color: rgba(255,255,255,.3);
                }

                .input-grey input::placeholder {
                  color: #fff;
                }
              </style>

              <div class="mask rgba-deep-purple-light py-5">

                <div class="container my-4">

                  <!-- Grid row -->
                  <div class="row align-items-center">

                    <!-- Grid column -->
                    <div class="col-lg-6">

                      <h3 class="font-weight-bold white-text pb-2">Stay Updated</h3>
                      <p class="lead white-text pt-2 mb-5">Subscribe to our newsletter to be always aware of our new updates.<br>We build powerful and flexible templates for startups.</p>

                      <form class="col-md-9 input-grey pl-0" action="" method="post" target="_blank">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control white-text rgba-white-light border-0 z-depth-0" placeholder="Enter Email Address" aria-label="Enter Email Address"
                            aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-md btn-mdb-color m-0 px-3 py-2 z-depth-0" type="button" id="button-addon2">Sign up<i class="fas fa-arrow-right pl-2"></i></button>
                          </div>
                        </div>
                      </form>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 offset-lg-2 wow fadeInUpBig" data-wow-delay=".2s">

                        <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-admin.png" alt="Sample image" class="img-fluid">

                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                </div>

              </div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 5 -->
        <div class="tab-pane fade show" id="op5" role="tabpanel" aria-labelledby="op5-tab">
          <div class="container-fluid mt-3 mb-5">
            <section class="bg-primary z-depth-1">

              <!-- Modal -->
              <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                      <iframe id="player" class="embed-responsive-item" src="https://www.youtube.com/embed/7MUISDJ5ZZ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row no-gutters">

                <div class="col-lg-6 order-md-2">
                  <div class="view">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/img%20(152).jpg" alt="Video title">
                    <div class="mask flex-center rgba-black-light">
                      <a id="play" class="btn-floating btn-danger btn-lg" data-toggle="modal" data-target="#modal1"><i class="fas fa-play"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 mx-auto d-flex align-items-center text-white">
                  <div class="px-4 py-4 py-lg-0">
                    <h3 class="font-weight-normal mb-4">Give a Fresh Design to Your MDB</h3>
                    <p class="mb-0">Fresh fellow even the whole is work outcome them. They original on mountains, drew the
                      support time. The of to graduate. Into to is the to she at return understand every in there transmitting
                      you've he the was and in finger.</p>
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
  
      $('#play').on('click', function (e) {
        e.preventDefault();
        $("#player")[0].src += "?autoplay=1";
        $('#player').show();
        $('#video-cover').hide();
      })
      $('#modal1').on('hidden.bs.modal', function (e) {
        $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
      });
    
    </script>
    
</body>

</html>