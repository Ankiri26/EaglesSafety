<!DOCTYPE html>
<html lang="es">
<head>

    <!--TITULO DE LA VISTA -->
    <title>Contáctanos - Eagles Safety EIRL</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/config.php";?>
 
</head>

<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>

    <!-- ENCABEZADO -->   
    <div class="container-fluid" style="height: 250px; background: url('ES-FrontEnd/Elementos/Imagenes/Encabezados/Contactanos.jpg') no-repeat center; background-size: cover;">

       <div class="container">
            <br><br><br>
           <div class="text-white display-4 font-weight-bold pt-5 wow fadeIn" style="font-size:250%; font-family: 'Bungee', cursive;">Contáctanos</div>
       </div>

    </div> 
   
    <!-- CONTACTANOS-->
    <section class="container mt-5">
      <div class="row">

        <!--FORMULARIO -->
        <div class="col-md-5 col-sm-6 col-12 px-5 pt-2 wow fadeIn">

           <!--DESCRIPCION -->
            <div class="row">
              <i class="col-4 col-lg-3 far fa-question-circle fa-4x text-center pt-4 pt-sm-5 pt-md-2" style="color: var(--primary) !important;"></i>
              <p class="col-8 col-lg-9 mt-2">¿Tienes alguna consulta? No dudes en escribirnos, te responderemos en la brevedad posible.</p>
            </div>

           <!--CASILLAS DE LLENADO -->
            <div class="row">
            <div class="col-12">

                <!--INPUTS -->
                <form method="POST">

                    <!--CORREO -->
                    <div class="row">
                        <div class="col-md-12 my-3">
                            <input type="email" id="correo" name="email" class="form-control" placeholder="Correo">
                        </div>
                    </div>

                    <!--ASUNTO -->
                    <div class="row">
                        <div class="col-md-12 my-3">
                            <input type="text" id="asunto" name="asunto" rows="2" class="form-control" placeholder="Asunto">
                        </div>
                    </div>

                    <!--MENSAJE -->
                    <div class="row">
                        <div class="col-md-12 my-3">
                            <textarea type="text" id="mensaje" name="message" rows="2" class="form-control md-textarea" placeholder="Mensaje"></textarea>
                        </div>
                    </div>

                </form>

                <!--BOTON ENVIAR -->
                <div class="text-center my-3 mb-4">
                    <a class="btn bg-primary" onclick="vWeb.validar()">Enviar</a>
                </div>

                <!--ESTADO -->
                <div class="status"></div>

            </div>
            </div>

        </div>

        <!-- REDES SOCIALES-->
        <div class="col-md-7 col-sm-6 col-12 text-center wow fadeIn">
          <div class="view">
             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Feagles.safety.eirl%2F&tabs=timeline&width=500&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>
        </div>
     
      </div>   
    </section>
    
    <!-- ANIMACION-->
    <section class="bg-primary mt-4">
      <div class="container text-center">
        <h5 class="h3"><a class="typewrite white-text" data-period="2000" data-type='["Especialistas en calzado industrial", "Primeros en su rubro", "Seguridad al alcance de todos" ]'><span class="wrap"></span></a></h5>
      </div>
    </section>
    
    <!-- MAPA-->
    <div class="col-12 p-0 wow fadeIn">
      <div class="view">
         <iframe width="100%" height="270" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.918055062016!2d-77.06174825067502!3d-11.98017192940227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf5183bdf79d%3A0x83f0874d1675e677!2sEagles%20Safety%20EIRL!5e0!3m2!1ses-419!2spe!4v1572703746557!5m2!1ses-419!2spe"></iframe>
      </div>
    </div>

    <!--FOOTER -->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>    
    
    <!-- CONTENT-->
    
</body>
</html>