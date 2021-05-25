//VERIFICAR INICIO DE SESION
function verificarLogin(){
	if (localStorage.getItem("user") === null || localStorage.getItem("estado") == "out" ) {
	  window.location="login.php";
	} else {
      window.location="inicio.php";
	}
}

//FUNCION PARA AGREGAR CLASE ACTIVE AL ELEMENTO SELECCIONADO DEL NAV
$(document).ready(function () { 
 
    $( ".list-sidebar a" ).each(function() { 
      if ($(this).attr("href") !== "#") { 
          var target_URL = $(this).prop("href"); 
          if (target_URL == location.href) { 
              $(this).addClass("bg-primary");
          } 
      }
    }); 

}); 

//--AJUSTAR MENU DE ACUERDO AL TAMAÑO DE PANTALLA--
$(window).resize(function(){

    if (window.innerWidth>991){
        $('.sidebar').removeClass('mostrar');
    }

});

/*=============================================
    FUNCIONES GENERALES
=============================================*/

var vistas = function (){}

//--MOSTRAR IMAGEN --
vistas.prototype.mostrarImagen = function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('previewFoto');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

//--MOSTRAR IMAGEN 1 --
vistas.prototype.mostrarImagen1 = function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('previewFoto1');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

//--MOSTRAR IMAGEN 2 --
vistas.prototype.mostrarImagen2 = function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('previewFoto2');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

var vGenerales = new vistas();
