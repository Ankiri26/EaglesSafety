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