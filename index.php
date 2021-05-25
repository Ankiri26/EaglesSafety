<!DOCTYPE html>
<html lang="en">
<head>
   
    <!-- TITULO DE LA VISTA-->
    <title>Seguridad industrial - Eagles Safety EIRL</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/config.php";?>
    
    <!-- JS DEL ARCHIVO-->
    <script type="text/javascript">
      vWeb.mostrarSliders();
      vWeb.mostrarComponente1();
      vWeb.mostrarCategoriasDestacadas();
      vWeb.mostrarComponente2();
      vWeb.mostrarMarcas();
      vWeb.mostrarProductosDestacados();
    </script>
    
</head>
<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>

    <!-- CAROUSEL DE IMAGENES-->
    <div id="CarouselInicio" class="carousel slide" data-ride="carousel">

      <!--SLIDES-->
      <div class="carousel-inner" role="listbox"></div>

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
    
    <!-- CATEGORIAS DESTACADAS-->
    <div id="seccionCategorias" class="container-fluid">
      <div class="row">
        <div class="col-12 mb-5">

          <!--DESCRIPCION -->
          <h3 class="h4-responsive font-weight-bold px-4 pb-2 font-primary wow fadeIn">Categorías <span class="font-secundary">destacadas</span></h3>

          <!--CAROUSEL DE CATEGORIAS DESTACADAS -->
          <div class="mx-3 text-center d-none d-md-flex">
          <div id="carouselCategorias" class="carousel slide w-100" data-ride="carousel">

              <!--CATEGORIAS -->
              <div id="categoriasDestacadas" class="carousel-inner w-100" role="listbox"></div>

              <!--CONTROLADOR -->
              <a class="carousel-control-prev" href="#carouselCategorias" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselCategorias" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>
          </div>

          <!--CAROUSEL DE CATEGORIAS DESTACADAS RESPONSIVE -->
          <div class="mx-3 text-center d-flex d-md-none">
          <div id="carouselCategoriasCelular" class="carousel slide w-100" data-ride="carousel">

              <!--CATEGORIAS -->
              <div id="categoriasDestacadasCelular" class="carousel-inner w-100" role="listbox"></div>

              <!--CONTROLADOR -->
              <a class="carousel-control-prev" href="#carouselCategoriasCelular" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselCategoriasCelular" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>
          </div>

        </div>  
      </div>
    </div>
          
    <!-- PRODUCTOS DESTACADOS-->
    <div id="DESTACADOS"></div>

    <!-- CAROUSEL DE MARCAS-->
    <div class="py-5">
      <div class="container my-5">

      <!--DESCRIPCION -->
      <h3 class="h4-responsive font-weight-bold px-4 pb-2 grey-text text-center wow fadeIn">Calidad y seguridad garantizada en cada una de nuestras marcas.</h3>

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
    </div>
    
    <!--FOOTER -->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>   
    
    <!-- CONTENT-->

</body>
</html>