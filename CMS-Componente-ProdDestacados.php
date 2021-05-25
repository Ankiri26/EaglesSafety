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
    <section class="cuerpo mb-3" id="cuerpo">
       
      <h3 class="titulo">Productos destacados</h3>
      
      <!-- OPCIONES DE LA VISTA-->
      <div class="row">
        <div class="col text-center">
          <button class="btn botonTercero" data-toggle="modal" data-target="#c1Editar" onclick="mostrarProductosDestacadosModal()"><i class="far fa-edit"></i> Editar destacados</button>
          <button class="btn botonTercero" data-toggle="modal" data-target="#c1Actualizar" onclick="cargarDatosModal()"><i class="fas fa-sync"></i> Actualizar componente</button>
        </div>
      </div>
      
      <!-- MODAL EDITAR -->
      <div class="modal fade" id="c1Editar" tabindex="-1" role="dialog" aria-labelledby="c1Editar"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
           
            <!-- Titulo -->
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar productos destacados</h5>
              <div class="alert alert-danger p-0 px-3 m-0 ml-3" role="alert"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <!-- Contenido -->
            <div class="modal-body">
              <form id="form" class="text-center">
                  
                  <!-- Productos destacados -->
                  <h6 class="subtitulo mb-1 mt-0">Productos destacados </h6>
                  <div class="table-responsive">
                    <table id="tDestacados" class="table">
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
                  
                  <!-- Elegir producto -->
                  <h6 class="subtitulo mt-0">Elegir productos </h6>
                  <div class="d-flex flex-row mb-3">
                    <select id="selCategoria" class="form-control"></select>
                    <button type="button" class="btn botonSecundario" onclick="agregarDestacado()" style="min-width:170px;"><small>Agregar destacado</small></button>
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

              </form>
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
              
              <h6 class="subtitulo mt-0">Seleccionar el estilo del componente de productos destacados:</h6>
               
              <!-- SIN ESTILO -->
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="c1SinEstilo" name="c1Estilos" value="0">
                <label class="custom-control-label" for="c1SinEstilo">Sin estilo</label>
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
                <input type="radio" class="custom-control-input" id="c1Estilo3" name="c1Estilos" value="3" checked>
                <label class="custom-control-label" for="c1Estilo3">Estilo 3</label>
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
      </ul>
      
      <!-- Vista previa de estilos-->
      <div class="tab-content">
       
        <!-- ESTILO 1 -->
        <div class="tab-pane fade show active" id="op1" role="tabpanel" aria-labelledby="op1-tab">
          <div class="bg-light1 container-fluid pt-5 pb-2 text-center">

              <!--TITULO -->  
              <h3 class="font-weight-bold mb-4 pb-2  wow fadeIn">Productos de alta calidad</h3>

              <!--DESCRIPCION -->  
              <p class="grey-text w-responsive mx-auto mb-5 wow fadeIn">Los mejores acabados, diseños y modelos a tu alcance.</p>

              <!--PRODUCTOS -->  
              <div id="DESTACADOS" class="card-deck mb-4 row justify-content-center"></div> 

              <!-- DESCRIPCION DEL PRODUCTO--> 
              <div class="modal fade" id="modalDescripcion" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document"></div>
              </div>

          </div>
        </div>
        
        <!-- ESTILO 2 -->
        <div class="tab-pane fade show" id="op2" role="tabpanel" aria-labelledby="op2-tab">
          <div class="container mt-5">
            <section class="dark-grey-text text-center">

              <!-- TITULO -->
              <h3 class="font-weight-bold mb-4 pb-2">Productos de alta calidad</h3>
              
              <!-- DESCRIPCION -->
              <p class="grey-text w-responsive mx-auto mb-5">Los mejores acabados, diseños y modelos a tu alcance.</p>

              <!--PRODUCTOS -->  
              <div id="DESTACADOS2" class="row justify-content-center"></div>

            </section>
          </div>
        </div>
        
        <!-- ESTILO 3 -->
        <div class="tab-pane fade show" id="op3" role="tabpanel" aria-labelledby="op3-tab">
          <div class="container mt-5">
            <section class="dark-grey-text text-center">

              <!-- TITULO -->
              <h3 class="font-weight-bold mb-2 pb-2">Productos de alta calidad</h3>
              
              <!-- DESCRIPCION -->
              <p class="grey-text w-responsive mx-auto mb-2">Los mejores acabados, diseños y modelos a tu alcance.</p>

              <!--PRODUCTOS -->  
              <div id="DESTACADOS3" class="row justify-content-center"></div>

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
      mostrarProductosDestacados();
      
      //--SELECCION DE CATEGORIA--
      $("#selCategoria").change(function() {
          mostrarProductos($("#selCategoria option:selected").html());
      });
      
      //--CARGAR ESTILO DEL COMPONENTE EN EL MODAL --  
      function cargarDatosModal(){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosComponentes.php',
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
                  
                    switch(datos.COMPDESTACADOS){
                      case "0": $( "#c1SinEstilo" ).prop( "checked", true);break;
                      case "1": $( "#c1Estilo1" ).prop( "checked", true);break;
                      case "2": $( "#c1Estilo2" ).prop( "checked", true);break;
                    }
                  
                }
            }
        });
      }

      //--ACTUALIZAR ESTILO DEL COMPONENTE --  
      function actualizarEstiloComponente(){

        mostrar=true;
        var estilo="";
        
        $("#c1Actualizar input:radio:checked" ).each(function() {
            estilo=$(this).val();
        });

        var $datos={
            '_estilo': estilo
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarEstiloDestacados.php',
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
      
      //-- FUNCION MOSTRAR PRODUCTOS DESTACADOS--
      function mostrarProductosDestacados(){
          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarProductosDestacados.php',
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
                    var contenedor1 = "";
                    var contenedor2 = "";
                    var contenedor3 = "";

                    for(var i=0; i<datos.length ; i++){
                        contenedor1 += "<div class='col-12 wow fadeIn' style='min-width:150px; max-width:250px;'> \
                        <div class='card m-1'> \
                            <div class='view overlay zoom'> \
                                <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' style='cursor:pointer;' height='200px'> \
                            </div> \
                            <div class='card-body'> \
                                <p class='tituloProd font-weight-bold text-uppercase mb-1' style='height:50px;'>"+datos[i].PRODNOMBRE+"</p> \
                                <hr class='bg-light3 my-0' style='width: 60%; height:3px;'> \
                                <hr class='bg-primary my-1' style='width: 20%; height:3px;'> \
                                <div class='text-right'> \
                                    <a class='btn bg-primary btn-sm py-0 px-1'>Ver más</a>  \
                                </div> \
                            </div> \
                        </div> \
                        </div>";

                        contenedor2 += "<div class='col-lg-3 col-md-6 mb-4 justify-content-center d-flex align-items-stretch'> \
                        <div class='card align-items-center' id='"+datos[i].PRODCODIGO+"' onclick='vWeb.mostrarProducto(this)'> \
                      <div class='view overlay' style='height: 330px'> \
                        <img src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' class='card-img-top DESTACADO2' height='320'> \
                        <a><div class='mask rgba-white-slight'></div></a> \
                      </div> \
                      <div class='card-body text-center px-1 py-2'> \
                        <h6 class='font-weight-bold text-uppercase'> \
                          <a class='dark-grey-text'>"+datos[i].PRODNOMBRE+"</a> \
                        </h6> \
                      </div> \
                    </div> \
                  </div>";
                      
                        contenedor3 += "<div class='col-lg-3 col-md-6 p-2 text-left'>  \
          <div class='card'>  \
              <div class='view overlay zoom'>  \
                  <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' style='cursor:pointer; height:40vh;'>  \
              </div>  \
              <div class='card-body'>  \
                  <p class='mb-2 font-dark4'>"+datos[i].MARCNOMBRE+"</p>  \
                  <p class='tituloProd mb-1'>"+datos[i].PRODNOMBRE+"</p>  \
                  <p class='mb-2 font-dark4'>COD "+datos[i].PRODCODIGOES+"</p>  \
                  <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>  \
              </div>  \
          </div>  \
          </div>";

                    }

                    $("#DESTACADOS").html(contenedor1);
                    $("#DESTACADOS2").html(contenedor2);
                    $("#DESTACADOS3").html(contenedor3);
                }

              }
          });
      };
      
      //-- FUNCION MOSTRAR PRODUCTOS DESTACADOS EN EL MODAL DE EDITAR--
      function mostrarProductosDestacadosModal(){
          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarProductosDestacados.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                if(error.status == 401){
                    $(".alert").html("Archivos no encontrados");
                }
                else{
                    $(".alert").html("Error no identificado");
                }
              },
              success: function(datos){
                
                if(datos.response == 0){
                    $(".alert").html(datos.message);
                }
                else{
                    var tabla = "";
                
                    for(var i=0; i<datos.length ; i++){

                      tabla += "<tr> \
                            <th class='py-0 align-middle' scope='row'><button type='button' class='btn' onclick='eliminarDestacado("+datos[i].PRODCODIGO+")'>X</button></th> \
                            <td class='py-0 align-middle'>"+datos[i].CATNOMBRE+"</td> \
                            <td class='py-0 align-middle'>"+datos[i].PRODNOMBRE+"</td> \
                            <td class='py-0 align-middle'><img src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' width='50' height='50'></td> \
                          </tr>";

                    }

                    $("#tDestacados tbody").html(tabla);
                    $(".alert").html("");
                  
                    mostrarCategorias();

                }
                
              }
          });
      };
      
      //-MOSTRAR TODOS LAS CATEGORIAS--
      function mostrarCategorias(){

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarCategoria.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                  mostrar=true;
                  if(error.status == 401){
                      $(".alert").html("No se pudo establecer conexion con el servidor");
                  }
                  else{
                      $(".alert").html("Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      $(".alert").html('ERROR: '+datos.message);
                  }
                  else{
                      $("#selCategoria").html("");
                      var categorias = "<option>Seleccionar categoría</option>";
                      for (var i=0;i<datos.length;i++){
                          categorias+="\<option value='"+datos[i].CATCODIGO+"'>"+datos[i].CATNOMBRE+"</option>"
                      }
                      $("#selCategoria").html(categorias);
                      $(".alert").html("");
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
                      $(".alert").html("No se pudo establecer conexion con el servidor");
                  }
                  else{
                      $(".alert").html("error","Error no identificado.");
                  }
              },
              success: function(datos){
                  var tabla="";
                  if(datos.response == 0){
                      tabla=datos.message;
                      $(".alert").html(datos.message);
                  }
                  else{
                      var tabla="";
                      for(var i=0; i<datos.length ; i++){
                        tabla += "<tr> \
                          <th class='py-0 align-middle' scope='row'><input type='radio' value='"+datos[i].PRODCODIGO+"' name='prodDestacados'></th> \
                          <td class='py-0 align-middle'>"+datos[i].CATNOMBRE+"</td> \
                          <td class='py-0 align-middle'>"+datos[i].PRODNOMBRE+"</td> \
                          <td class='py-0 align-middle'><img src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' width='50' height='50'></td> \
                        </tr>";
                        
                      }
                      $(".alert").html("");
                  }
                  $("#tProductos tbody").html(tabla);
              }
          });

      }
      
      //-ELIMINAR DESTACADO--
      function eliminarDestacado(cod){
          
          if($('#tDestacados >tbody >tr').length <=1){
              $(".alert").html("Mínimo debe haber un producto destacado")
          }else{
              var $datos={
              '_codigo': cod,
              '_destacado': 0
              }

              $.ajax({
                  url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarDestacado.php',
                  type: 'POST',
                  data: $datos,
                  dataType: 'json',
                  error: function(error){
                      if(error.status == 401){
                          $(".alert").html("No se pudo establecer conexion con el servidor");
                      }
                      else{
                          $(".alert").html("Error no identificado.");
                      }
                  },
                  success: function(datos){
                      if(datos.response == 0){
                          $(".alert").html(datos.message);
                      }
                      else{
                          mostrarProductosDestacados();
                          mostrarProductosDestacadosModal();
                          $(".alert").html("");
                      }
                  }
              });
          }
      }
      
      //-AGREGAR DESTACADO--
      function agregarDestacado(){
          
          if($('#tDestacados >tbody >tr').length >=3){
              $(".alert").html("Máximo debe haber tres productos destacados")
          }else{
            
              $("#tProductos input:radio:checked" ).each(function() {
                  codigo=$(this).val();
              });
            
              var $datos={
              '_codigo': codigo,
              '_destacado': 1
              }

              $.ajax({
                  url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarDestacado.php',
                  type: 'POST',
                  data: $datos,
                  dataType: 'json',
                  error: function(error){
                      if(error.status == 401){
                          $(".alert").html("No se pudo establecer conexion con el servidor");
                      }
                      else{
                          $(".alert").html("Error no identificado.");
                      }
                  },
                  success: function(datos){
                      if(datos.response == 0){
                          $(".alert").html(datos.message);
                      }
                      else{
                          mostrarProductosDestacados();
                          mostrarProductosDestacadosModal();
                          $(".alert").html("");
                      }
                  }
              });
          }
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