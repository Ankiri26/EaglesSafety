<!DOCTYPE html>
<html lang="es">
<head>
  
    <!--TITULO DE LA VISTA -->
    <title>Nosotros - Eagles Safety EIRL</title>

    <!-- CONTENIDO GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/config.php";?>
    
    <!-- JS DEL ARCHIVO-->
    <script type="text/javascript">
      vWeb.mostrarMarcas();
      vWeb.mostrarSliders();
    </script>
    
</head>

<body>

    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>
 
    <!-- ENCABEZADO -->   
    <div class="container-fluid" style="height: 250px; background: url('ES-FrontEnd/Elementos/Imagenes/Encabezados/Nosotros.jpg') no-repeat center; background-size: cover;">

       <div class="container">
            <br><br><br>
           <div class="text-white display-4 font-weight-bold pt-5 wow fadeIn" style="font-size:250%; font-family: 'Bungee', cursive;">NOSOTROS</div>
       </div>

    </div>    
   
    <!-- QUIENES SOMOS-->
    <div class="container text-center wow fadeIn">

        <h1 class="h1-responsive font-weight-bold my-4 pt-5 ">¿QUIÉNES SOMOS?</h1>
        <p class="grey-text lead">Somos una empresa importadora, comercializadora y exportadora de equipos de proteccion personal (epp's) enfocada en brindar un buen nivel de servicio. Nuestros productos aseguran calidad, seguridad y confiabilidad. Todo lo que el cliente necesita para llegar seguro a casa.</p>

    </div>    

    <!-- MARCAS-->   
    <div class="container py-5 my-5 wow fadeIn">

      <!--DESCRIPCION -->
      <h3 class="h5-responsive font-weight-bold px-4 pb-5 grey-text text-center wow fadeIn">Calidad y seguridad garantizada en cada una de nuestras marcas.</h3>

      <!--CAROUSEL DE MARCAS -->
      <div class="container text-center d-none d-sm-flex">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">

            <!--MARCAS -->
            <div id="MARCAS" class="carousel-inner w-100" role="listbox"></div>

            <!--CONTROLADOR -->
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
      </div>

      <div class="container text-center d-flex d-sm-none">
      <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">

          <!--MARCAS -->
          <div id="MARCASCEL" class="carousel-inner w-100" role="listbox"></div>

          <!--CONTROLADOR -->
          <a class="carousel-control-prev" href="#recipeCarousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>

      </div>
      </div>

    </div>       

    <!-- DESCRIPCION-->  
    <div>
      <div class="row">

          <!-- MISION-->
          <div class="mision col-12 col-sm-6">
              <i class="fas fa-balance-scale fa-3x wow fadeInLeft"></i>
              <h1 class="h4-responsive wow fadeInLeft">NUESTRA MISIÓN</h1>
              <hr class="wow fadeInLeft">
              <p class="wow fadeInLeft">Proveer equipos de protección personal de calidad que cumplan con los requerimientos de los clientes y brinden un desenvolvimiento seguro de cada usuario en todos los sectores productivos del Perú.</p>
          </div>

          <!-- VISION-->
          <div class="vision col-12 col-sm-6">
              <i class="fas fa-eye fa-3x wow fadeInRight"></i>
              <h1 class="h4-responsive wow fadeInRight">VISIÓN COMO EMPRESA</h1>
              <hr class="wow fadeInRight">
              <p class="wow fadeInRight">Convertirnos en una empresa reconocida en su sector por brindar una atención de calidad a sus clientes en la comercialización de equipos de protección, seguridad y afines.
              </p>
          </div>

      </div>
    </div>       

    <!--FOOTER -->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>    
    
    <!-- CONTENT-->

</body>
</html>