//FUNCION PARA COMPRIMIR EL MENU
$('.navbar-toggler').click(function(){
    $(".sidebar").toggleClass("mostrar");
});

//FUNCION PARA AGREGAR CLASE ACTIVE AL ELEMENTO SELECCIONADO DEL NAV
$(".list-sidebar a").click(function() {
    // eliminamos active de todos los elementos
    $(".list-sidebar a").removeClass("bg-primary");
    // activamos el elemento clickeado.
    $(this).addClass("bg-primary");
});

//-- FUNCION MOSTRAR INFORMACION DE LA EMPRESA --
function mostrarInformacionEmpresa(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarDatosEmpresa.php',
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
            $("#navbarCMS .navbar-brand").html(datos.INFEMPTITULO_PAGINA);
            $("#navbarText .logo").html("<img src='"+datos.INFEMPLOGO+"' height='180'>"); 

        }
    });
};

//CARGAR PALETA DE COLORES
function cargarPaletaColores(){
  
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarColoresWeb.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                mostrar=true;
                mostrarToast("error","No se pudo establecer conexion con el servidor");
            }
            else{
                mostrar=true;
                mostrarToast("error","Error no identificado.");
            }
        },
        success: function(datos){
            if(datos.response == 0){
                mostrar=true;
                mostrarToast("error",datos.message);
            }
            else{
                document.documentElement.style.setProperty('--primary', datos.COLORPRIMARY);
                document.documentElement.style.setProperty('--secundary', datos.COLORSECUNDARY);
                document.documentElement.style.setProperty('--enfasis1', datos.COLORENFASIS1);
                document.documentElement.style.setProperty('--enfasis2', datos.COLORENFASIS2);
                document.documentElement.style.setProperty('--enfasis3', datos.COLORENFASIS3);
                document.documentElement.style.setProperty('--light1', datos.COLORLIGHT1);
                document.documentElement.style.setProperty('--light2', datos.COLORLIGHT2);
                document.documentElement.style.setProperty('--light3', datos.COLORLIGHT3);
            }
        }
    });
  
}


