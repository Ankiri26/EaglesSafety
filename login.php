<!DOCTYPE html>
<html lang="es">
<head>

    <!-- TITULO DE LA VISTA -->
    <title>CMS - Eagles Safety EIRL</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-CMS/config.php";?>
    
    <!-- JS DEL ARCHIVO-->   
    <script>

    //VERIFICAR INICIO DE SESION
    function verificarLogin(){
        if (localStorage.getItem("user") === null || localStorage.getItem("estado") == "out" ) {
          console.log("Es necesario iniciar sesión");
        } else {
          window.location="CMS-Inicio";
        }
    }

    //VALIDAR INFORMACION DE INICIO DE SESION
    function validar(){
        var user=$("#ingresarUsuario").val();
        var pass=$("#ingresarContraseña").val();


        if(user == null || user.length == 0 || /^\s+$/.test(user)){
            alert('ERROR: El campo usuario no debe ir vacío o lleno de solamente espacios en blanco');
            $("#ingresarUsuario").focus();
        }
        else if(pass == null || pass.length == 0 || /^\s+$/.test(pass)){
            alert('ERROR: El campo contraseña no debe ir vacío o lleno de solamente espacios en blanco');
            $("#ingresarContraseña").focus();
        }
        else if(user.length<4 || user.length>12){
            alert('ERROR Usuario: Tamaño mínimo : 4. Tamaño máximo: 12');
            $("#ingresarUsuario").focus();
        }
        else if(pass.length<4 || pass.length>12){
            alert('ERROR Contraseña: Tamaño mínimo: 4. Tamaño máximo: 12');
            $("#ingresarContraseña").focus();
        }
        else if(/^\w+$/.test(user) && /^\w+$/.test(pass)){
            Login(user, pass);
        }else{
            alert('ERROR: Formato  incorrecto, solo ingresar alfanumericos');
        }

    }

    //INICIAR SESION
    function Login(usuario, password){
        var $usuario={
            '_username': usuario,
            '_password': password
        }
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_Login.php',
            type: 'POST',
            data: $usuario,
            dataType: 'json',
            error: function(error){
                if(error.status == 401){
                    $('#ingresarUsuario').removeClass('green');
                    $('#ingresarUsuario').addClass('red');
                    $('#ingresarContraseña').removeClass('green');
                    $('#ingresarContraseña').addClass('red');
                    alert("Usuario y contraseña incorrectas");
                }
                else{
                    alert("Error no identificado");
                }
            },
            success: function(datos){
                localStorage.clear();
                if(datos.response == 1){
                    $('#ingresarUsuario').removeClass('red');
                    $('#ingresarUsuario').addClass('green');
                    $('#ingresarContraseña').removeClass('red');
                    $('#ingresarContraseña').addClass('green');

                    localStorage.setItem("user", usuario);
                    localStorage.setItem("estado", "in");

                    window.location="CMS-Inicio";
                }
                else{
                    $('#ingresarUsuario').removeClass('green');
                    $('#ingresarUsuario').addClass('red');
                    $('#ingresarContraseña').removeClass('green');
                    $('#ingresarContraseña').addClass('red');
                    alert('ERROR: '+datos.message);
                }
            }
        });
    }

    //LIMPIAR SESION DE USUARIO
    function limpiarSesion(){
        console.log("Se ha borrado la sesion");
        localStorage.clear();
    }

    </script>
 
</head>

<body onload="verificarLogin()">
   
    <!-- CONTENT-->
    <div class="container mt-3" style="max-width:510px;">
       
        <!-- Login -->
        <form class="text-center p-5">
           
            <!-- Logo de la empresa -->
            <img class="mb-4" src="ES-FrontEnd/Elementos/Imagenes/Logo.png" alt="Logo Eagles Safety" width="200">

            <!-- Ingresar nombre de usuario -->
            <input type="text" id="ingresarUsuario" class="form-control mb-4" placeholder="Nombre de usuario">

            <!-- Ingresar contraseña -->
            <input type="password" id="ingresarContraseña" class="form-control mb-4" placeholder="Contraseña">

            <!-- Opciones -->
            <div class="row justify-content-around">
               
                <!-- Recuerdame -->
                <div class="col-12 col-sm-5 p-0">
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="LoginRecuerdame">
                      <label class="custom-control-label" for="LoginRecuerdame">Recuerdame</label>
                  </div>
                </div>
                
                <!-- Me olvide mi contraseña -->
                <div class="col-12 col-sm-6 p-0">
                  <a href="CMS-Recovery.php">¿Olvidaste tu contraseña?</a>
                </div>
                
            </div>

            <!-- Boton Iniciar Sesion -->
            <button type="button" class="btn bg-primary btn-block my-4" onclick="validar()">Ingresar</button>

        </form>
        <!-- Login -->
        
    </div>
    <!-- CONTENT-->
   
</body>

</html>