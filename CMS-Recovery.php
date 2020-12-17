<!DOCTYPE html>
<html lang="es">
<head>

    <!-- TITULO DE LA VISTA -->
    <title>CMS - Eagles Safety EIRL</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-CMS/config.php";?>
    
    <!-- JS DEL ARCHIVO-->   
 
</head>

<body>
   
    <!-- CONTENT-->
    <div class="container mt-0" style="max-width:510px;">
       
        <!-- Recovery password -->
        <form class="text-center p-5">
               
            <!-- Logo de la empresa -->
            <img class="mb-2 mb-sm-4 img-fluid" src="ES-FrontEnd/Elementos/Imagenes/Logo.png" alt="Logo Eagles Safety" width="200">
            
            <!-- Titulo -->
            <p class="h4-responsive mx-2 mb-2 mb-sm-4">Recuperar contraseña</p>

            <!-- Email -->
            <input type="email" id="ingresarCorreo" class="form-control mb-2 mb-sm-4" placeholder="E-mail">

            <!-- Text -->
            <small class="mx-2 form-text text-muted">¡No te preocupes! Ingresa tu correo electrónico y nosotros te enviaremos una nueva contraseña.</small>

            <!-- Recovery button -->
            <button class="btn bg-primary btn-block my-2 my-sm-4" type="submit">Enviar</button>
            
            <!-- Regresar -->
            <a href="login.php">Regresar</a>

        </form>
        <!-- Recovery password -->
        
    </div>
    <!-- CONTENT-->
   
</body>
</html>