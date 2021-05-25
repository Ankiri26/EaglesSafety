/*=============================================
    BARRA DE NAVEGACION SCRIPTS
=============================================*/

//--REDIRIGIR A INICIO--
$("#logo-Eagles").click(function() {
    window.location="index.php";
});     
    
//--AÑADIR CLASE ACTIVE A LA OPCION DEL NAVBAR SELECCIONADA--
$(document).ready(function () { 
     $(function(){ 
         var current_page_URL = location.href; 
         $( "a" ).each(function() { 
            if ($(this).attr("href") !== "#") { 
                var target_URL = $(this).prop("href"); 
                if (target_URL == current_page_URL) { 
                    $('nav a').parents('li, ul').removeClass('activeNav'); 
                    $(this).parent('li').addClass('activeNav'); 
                    return false; 
                } 
            }
         }); 
     }); 
   
    cargarPaletaColores(); 
   
 }); 

//-- ANIMACION TEXTO ESCRIBIENDOSE (INDEX) --
var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};
TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting){
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else{
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {that.tick();}, delta);
};
window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};    

//--MOSTRAR/OCULTAR CATEGORIAS RESPONSIVE--
$(window).resize(function(){
    if (window.innerWidth>991){
        // ## agregar clase
        $('#filtroCategoriasContent').addClass('d-none'); 
    }else{
        // ## eliminar clase
        $('#filtroCategoriasContent').removeClass('d-block');
    }
});

//--CARGAR PALETA DE COLORES--
function cargarPaletaColores(){
  
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarColoresWeb.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("No se pudo establecer conexion con el servidor");
            }
            else{
                console.log("Error no identificado.");
            }
        },
        success: function(datos){
            if(datos.response == 0){
                console.log(datos.message);
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


/*=============================================
    FUNCIONES GENERALES
=============================================*/

var data="";
var vistaWeb = function (){}

//-- FUNCION MOSTRAR SLIDERS --
vistaWeb.prototype.mostrarSliders = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarSliders.php',
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
            var sliders="";
            switch(datos[0].COMPSLIDER){
              case "1": 
                sliders+="<div class='fondo' style='background-repeat: no-repeat; background-size: cover; background-position: center center; height:100vh;'> \
            <div class='mask bg-gradiente d-flex justify-content-center align-items-center' style='height:100vh;'> \
              <div class='container'> \
                <div class='row mt-5 mt-md-0 mt-lg-5 pt-5 pb-5'> \
                  <div class='col-md-6 white-text text-center text-md-left mt-5 mt-md-0 mt-lg-5 wow fadeInLeft' data-wow-delay='0.3s'> \
                    <h1 class='h1-responsive font-weight-bold mt-5 mt-md-0 mt-lg-5'>"+datos[0].SLDRNOMBRE+"</h1> \
                    <hr class='hr-light'> \
                    <h6 class='Sdescripcion mb-4'>"+datos[0].SLDRDESCRIPCION+"</h6> \
                    <a class='btn botonPrincipal' href='Nosotros'>Ver más</a> \
                    <a class='btn botonCuarto' href='Contactos'>Contáctanos</a> \
                  </div> \
                  <div class='col-md-6 col-xl-5 mt-xl-5 wow fadeInRight text-center pb-5 pb-md-0 px-5 px-md-0' data-wow-delay='0.3s'> \
                    <img class='Simagen img-fluid px-5 px-md-0' style='max-height:400px;'> \
                  </div> \
                </div> \
              </div> \
            </div> \
          </div>"; 
                $("#CarouselInicio .carousel-control-prev").css("display","none");
                $("#CarouselInicio .carousel-control-next").css("display","none");
                break;
              case "2": 
                sliders+="<div class='Simagen view jarallax' data-jarallax='{'speed': 0.2}' style='background-repeat: no-repeat; background-size: cover; background-position: center center; height:100vh;'> \
            <div class='mask rgba-white-light d-flex justify-content-center align-items-center'> \
              <div class='container'> \
                <div class='row'> \
                  <div class='col-md-12 white-text text-center'> \
                    <h1 class='display-4 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown' data-wow-delay='0.3s'>"+datos[0].SLDRNOMBRE+"</h1> \
                    <h5 class='text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown' data-wow-delay='0.3s'>"+datos[0].SLDRDESCRIPCION+"</h5> \
                    <div class='wow fadeInDown' data-wow-delay='0.3s'> \
                      <a class='btn bg-enfasis1 btn-lg btn-rounded' href='Nosotros'>Ver más</a> \
                      <a class='btn bg-enfasis2 btn-lg btn-rounded' href='Contactos'>Contáctanos</a> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </div> \
          </div>";
                $("#CarouselInicio .carousel-control-prev").css("display","none");
                $("#CarouselInicio .carousel-control-next").css("display","none");
                break;
              case "3": 
                sliders+="<div class='Simagen view jarallax' data-jarallax='{'speed': 0.2}' style='background-repeat: no-repeat; background-size: cover; background-position: center center; height:100vh;'> \
            <div class='mask rgba-black-light d-flex justify-content-center align-items-center'> \
              <div class='container'> \
                <div class='row'> \
                  <div class='col-md-12 mb-4 white-text text-center'> \
                    <h1 class='h1-responsive white-text text-uppercase font-weight-bold mb-0 pt-5 wow fadeInDown' data-wow-delay='0.3s' style='text-shadow: 1px 1px 8px #212529;'><strong>"+datos[0].SLDRNOMBRE+"</strong></h1> \
                    <hr class='my-4 wow fadeInDown' data-wow-delay='0.4s' style='border-top: 3px solid #fff; width: 80px;'> \
                    <h5 class='text-uppercase mb-4 white-text wow fadeInDown h5-responsive' data-wow-delay='0.4s' style='text-shadow: 1px 1px 8px #212529;'><strong>"+datos[0].SLDRDESCRIPCION+"</strong></h5> \
                    <a class='btn botonCuarto wow fadeInDown' href='Nosotros' data-wow-delay='0.4s'>Ver más</a> \
                    <a class='btn botonCuarto wow fadeInDown' href='Contactos' data-wow-delay='0.4s'>Contáctanos</a> \
                  </div> \
                </div> \
              </div> \
            </div> \
          </div>";
                $("#CarouselInicio .carousel-control-prev").css("display","none");
                $("#CarouselInicio .carousel-control-next").css("display","none");
                break;
              case "4":
                for (var i=0; i<datos.length;i++){
                    if(i==0){
                        sliders+="<div class='carousel-item active' style='background:url(\""+datos[i].SLDRIMAGEN+"\");'>"
                    }
                    else{
                        sliders+="<div class='carousel-item' style='background:url(\""+datos[i].SLDRIMAGEN+"\");'>"
                    }
                    sliders+="\<div class='descripcionSlider container-fluid wow fadeIn' data-wow-delay='0.4s'>\
                                    <p class='h1-responsive wow fadeInLeftBig'>"+datos[i].SLDRNOMBRE+"</p>\
                                    <p class='descripcion wow fadeIn'>"+datos[i].SLDRDESCRIPCION+"</p>\
                                </div>\
                            </div>\
                        </div>"
                }
                break;
            }
            $("#CarouselInicio .carousel-inner").html(sliders);
            $("img.Simagen").attr("src",datos[0].SLDRIMAGEN);
            $("div.Simagen").css("background-image","url("+datos[0].SLDRIMAGEN+")");
            $(".fondo").css("background-image","url(ES-FrontEnd/Elementos/Imagenes/Slider/pantalla.jpg)");
            //$(".fondo").css("background-image",'url(https://mdbootstrap.com/img/Photos/Others/architecture.jpg)');
        }
    });
};

//-- FUNCION MOSTRAR COMPONENTE 1 --
vistaWeb.prototype.mostrarComponente1 = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosComponente1.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.error("Archivos no encontrados");
            }
            else{
                console.error("Error no identificado");
            }
        },
        success: function(datos){
            var componente="";
            switch(datos.COMP1){
              case "1": componente+="<div id='banner1' class='container py-5'> \
            <section class='px-md-5 mx-md-5 dark-grey-text text-center text-lg-left'> \
              <div class='row'> \
                <div class='col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center'> \
                  <img class='img-fluid wow fadeInLeft' src='"+datos.C1IMAGEN+"' style='max-height:400px;'> \
                </div> \
                <div class='col-lg-6 mb-4 mb-lg-0'> \
                  <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
                  <p class='font-weight-bold wow fadeIn'>"+datos.C1SUBTITULO+"</p> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
                  <a class='font-weight-bold font-primary wow fadeIn' href='Nosotros.php' >Conocer más<i class='fas fa-angle-right ml-2'></i></a> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "2": componente+="<div id='banner1' class='tab-pane fade show' id='op2' role='tabpanel' aria-labelledby='op2-tab'> \
          <div class='container py-5'> \
            <section class='px-md-5 mx-md-5 text-center dark-grey-text'> \
              <div class='row'> \
                <div class='col-md-6 mb-4 mb-md-0'> \
                  <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
                  <a class='btn bg-primary btn-md ml-0 wow fadeIn' href='Nosotros.php' role='button'>Conocer más<i class='fa fa-gem ml-2'></i></a> \
                  <hr class='my-5'> \
                  <p class='font-weight-bold wow fadeIn'>Síguenos en:</p> \
                  <a class='mx-1 font-primary disabled wow fadeIn' role='button'><i class='fab fa-facebook-f'></i></a> \
                  <a class='mx-1 font-primary disabled wow fadeIn' role='button'><i class='fab fa-linkedin-in'></i></a> \
                  <a class='mx-1 font-primary disabled wow fadeIn' role='button'><i class='fab fa-instagram'></i></a> \
                </div> \
                <div class='col-md-5 mb-4 mb-md-0'> \
                  <img class='c1imagen img-fluid wow fadeInRight' src='"+datos.C1IMAGEN+"' style='max-height:400px;'> \
                </div> \
              </div> \
            </section> \
          </div> \
        </div>"; break;
              case "3": componente+="<div id='banner1' class='container py-5'> \
            <section class='px-md-5 mx-md-5 text-center text-lg-left dark-grey-text'> \
              <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
              <p class='text-muted mb-5 wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-lg-3 col-md-12 mb-lg-0 mb-4'> \
                  <img class='img-fluid wow fadeInLeft' src='"+datos.C1IMAGEN+"'> \
                </div> \
                <div class='col-lg-6 col-md-6 mb-lg-0 mb-lg-0 mb-2'> \
                  <h4 class='h4 wow fadeIn'>¿Por qué elegirnos?</h4> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESTACAMOS+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 text-center'> \
                  <a class='btn bg-primary btn-md waves-effect wow fadeIn' href='Nosotros.php' role='button'>Ver más</a> \
                  <a class='btn bg-primary btn-md wow fadeIn' href='Contactos.php' role='button'>Contáctanos</a> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "4": componente+="<div id='banner1' class='container py-5'> \
            <section class='px-md-5 mx-md-5 text-center dark-grey-text'> \
              <div class='row d-flex justify-content-center'> \
                <div class='col-xl-6 col-md-8'> \
                  <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
                  <a class='btn bg-primary btn-md ml-0 mb-5 wow fadeIn' href='Nosotros.php' role='button'>Ver más<i class='fa fa-magic ml-2'></i></a> \
                </div> \
              </div> \
              <div class='row'> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                  <i class='fas fa-gem fa-3x blue-text'></i> \
                  <p class='font-weight-bold my-3'>Calidad</p> \
                  <p class='text-muted'>"+datos.C1CARACTERISTICA1+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                    <i class='fas fa-chart-area fa-3x teal-text'></i> \
                    <p class='font-weight-bold my-3'>Garantía</p> \
                    <p class='text-muted'>"+datos.C1CARACTERISTICA2+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                    <i class='fas fa-cogs fa-3x indigo-text'></i> \
                    <p class='font-weight-bold my-3'>Funcional</p> \
                    <p class='text-muted'>"+datos.C1CARACTERISTICA3+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                    <i class='fas fa-cloud-upload-alt fa-3x deep-purple-text'></i> \
                    <p class='font-weight-bold my-3'>Eficaz</p> \
                    <p class='text-muted'>"+datos.C1CARACTERISTICA4+"</p> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case '5': componente+="<div id='banner1' class='container p-5'> \
            <section class='dark-grey-text'> \
              <h2 class='text-center font-weight-bold mb-4 pb-2'>"+datos.C1TITULO+"</h2> \
              <p class='text-center lead grey-text mx-auto mb-5'>"+datos.C1DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-4'> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-flag-checkered font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Orientada al cliente</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA1+"</p> \
                    </div> \
                  </div> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-flask font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Calidad</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA2+"</p> \
                    </div> \
                  </div> \
                  <div class='row mb-md-0 mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-glass-martini font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Honestidad</h5> \
                      <p class='grey-text mb-md-0'>"+datos.C1CARACTERISTICA3+"</p> \
                    </div> \
                  </div> \
                </div> \
                <div class='col-md-4 text-center'> \
                  <img class='img-fluid wow fadeIn' src='"+datos.C1IMAGEN+"'> \
                </div> \
                <div class='col-md-4'> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='far fa-2x fa-heart font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Trabajo en equipo</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA4+"</p> \
                    </div> \
                  </div> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-bolt font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Integridad</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA5+"</p> \
                    </div> \
                  </div> \
                  <div class='row wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-magic font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Pasión</h5> \
                      <p class='grey-text mb-0'>"+datos.C1CARACTERISTICA6+"</p> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
            }
            $("div#CarouselInicio").after(componente);
        }
    });
};

//-- FUNCION MOSTRAR COMPONENTE 1 --
vistaWeb.prototype.mostrarComponente2 = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosComponente2.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.error("Archivos no encontrados");
            }
            else{
                console.error("Error no identificado");
            }
        },
        success: function(datos){
            var componente="";
            switch(datos.COMP2){
              case "0": componente+=""; break;
              case "1": componente+="<div class='container my-5'> \
            <section class='dark-grey-text text-center'> \
              <h3 class='text-center font-weight-bold mb-4 pb-2'>"+datos.C2TITULO+"</h3> \
              <p class='text-center text-muted w-responsive mx-auto mb-5'>"+datos.C2DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-6 mb-4'> \
                  <div class='c1imagen1 card card-image'> \
                    <div class='text-white text-center d-flex align-items-center py-5 px-4 px-md-5 rounded'> \
                      <div> \
                        <h6 class='font-enfasis1'> \
                          <i class='fas fa-chart-pie'></i> \
                          <strong>Funcional</strong> \
                        </h6> \
                        <h3 class='py-3 font-weight-bold'> \
                          <strong>"+datos.C2T1TITULO+"</strong> \
                        </h3> \
                        <p class='pb-3'>"+datos.C2T1DESCRIPCION+"</p> \
                      </div> \
                    </div> \
                  </div> \
                </div> \
                <div class='col-md-6 mb-4'> \
                  <div class='c1imagen2 card card-image'> \
                    <div class='text-white text-center d-flex align-items-center py-5 px-4 px-md-5 rounded'> \
                      <div> \
                        <h6 class='font-enfasis3'> \
                          <i class='fas fa-eye'></i> \
                          <strong> Dinámico</strong> \
                        </h6> \
                        <h3 class='py-3 font-weight-bold'> \
                          <strong>"+datos.C2T2TITULO+"</strong> \
                        </h3> \
                        <p class='pb-3'>"+datos.C2T2DESCRIPCION+"</p> \
                      </div> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "2": componente+="<div class='container-fluid p-5 bg-primary'> \
            <section class='text-center white-text'> \
              <h2 class='font-weight-bold mb-4 pb-2 text-uppercase'>"+datos.C2TITULO+"</h2> \
              <p class='mx-auto mb-5'>"+datos.C2DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-4 mb-4'> \
                  <i class='fas fa-brain fa-3x'></i> \
                  <h5 class='font-weight-bold my-4 text-uppercase'>"+datos.C2T1TITULO+"</h5> \
                  <p class='mb-md-0 mb-5'>"+datos.C2T1DESCRIPCION+"</p> \
                </div> \
                <div class='col-md-4 mb-4'> \
                  <i class='fas fa-eye fa-3x'></i> \
                  <h5 class='font-weight-bold my-4 text-uppercase'>"+datos.C2T2TITULO+"</h5> \
                  <p class='mb-md-0 mb-5'>"+datos.C2T2DESCRIPCION+"</p> \
                </div> \
                <div class='col-md-4 mb-4'> \
                  <i class='fas fa-users fa-3x'></i> \
                  <h5 class='font-weight-bold my-4 text-uppercase'>"+datos.C2T3TITULO+"</h5> \
                  <p class='mb-0'>"+datos.C2T3DESCRIPCION+"</p> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "3": componente+="<div class='container-fluid'> \
            <section class='dark-grey-text text-center'> \
              <h3 class='text-center font-weight-bold mb-4 pb-2'>"+datos.C2TITULO+"</h3> \
              <p class='text-center text-muted w-responsive mx-auto mb-5'>"+datos.C2DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-12 px-0'> \
                  <div class='c1imagen1 card card-image' style='background-attachment: fixed;'> \
                    <div class='text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 px-md-5 rounded'> \
                      <div> \
                        <h6 class='font-primary'> \
                          <i class='fas fa-eye'></i> \
                          <strong> Funcional</strong> \
                        </h6> \
                        <h3 class='py-3 font-weight-bold'> \
                          <strong>"+datos.C2T1TITULO+"</strong> \
                        </h3> \
                        <p class='pb-3'>"+datos.C2T1DESCRIPCION+"</p> \
                      </div> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "4": componente+="<div class='container-fluid px-0'> \
            <section class='c1imagen1 text-center white-text p-5' style='background-attachment: fixed; height: 50vh;'> \
              <div class='row d-flex justify-content-center' style='height: 100%'> \
                <div class='col-md-6 my-auto '> \
                    <h1 class='font-weight-bold' style='text-shadow: 1px 1px 8px #212529;'>"+datos.C2TITULO+"</h1> \
                    <p style='text-shadow: 1px 1px 8px #212529;     font-size: 1.5rem;'>"+datos.C2DESCRIPCION+"</p> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
            }
            $("div#seccionCategorias").after(componente);
            $(".c1imagen1").css("background-image","url("+datos.C2IMAGEN1+")");
            $(".c1imagen1").css("background-repeat","no-repeat");
            $(".c1imagen1").css("background-size","cover");
            $(".c1imagen1").css("background-position","center");
            $(".c1imagen2").css("background-image","url("+datos.C2IMAGEN2+")");
            $(".c1imagen2").css("background-repeat","no-repeat");
            $(".c1imagen2").css("background-size","cover");
            $(".c1imagen2").css("background-position","center");
        }
    });
};

//-- FUNCION MOSTRAR INFORMACION DE LA EMPRESA --
vistaWeb.prototype.mostrarInformacionEmpresa = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosEmpresa.php',
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
          
            //PRELOADING
            $(".logo").attr("src",datos[0].INFEMPLOGO);

            //NAV
            $(".navbar-brand").html("<img class='mr-3' src='"+datos[0].INFEMPLOGO+"' width='100'>"+datos[0].INFEMPTITULO_PAGINA);
          
            $(".telNavES").html("<span class='fa fa-phone rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPTELEFONO1+" / "+datos[0].INFEMPTELEFONO2);

            $(".correoNavES").html("<span class='fa fa-envelope rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPCORREO);

					
            //FOOTER
            $("#nombreEmpresa").html(datos[0].INFEMPTITULO_PAGINA);
            $("#correoES").html(datos[0].INFEMPCORREO);

            document.getElementById('red1ES').href = datos[0].INFEMPRED_SOCIAL1;
            document.getElementById('red2ES').href = datos[0].INFEMPRED_SOCIAL2;

            $(".tel1ES").html(datos[0].INFEMPTELEFONO1);
            $(".tel2ES").html(datos[0].INFEMPTELEFONO2);

            $("#direccion1ES").html(datos[0].INFEMPDOMICILIO+", "+datos[0].INFEMPDISTRITO);
            $("#direccion2ES").html(datos[0].INFEMPPROVINCIA+", "+datos[0].INFEMPPAIS);
            

        }
    });
};

//-- FUNCION MOSTRAR MARCAS DE LA EMPRESA (SLIDER) --
vistaWeb.prototype.mostrarMarcas = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarMarcas.php',
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
            var contenedor = "";

            //MARCAS VERSION WEB
            contenedor += "<div class='carousel-item row no-gutters active'>";
            for(var i=0; i<datos.length ; i++){
                if(i<4){
                    contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                }
            }
            contenedor+="\n\</div>"
            for(var j=0; j<datos.length-1; j++){

                var a=0;
                contenedor += "<div class='carousel-item row no-gutters'>";

                for(var k=1; k<5; k++){

                    if((k+j)<datos.length){
                        contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[k+j].MARCCODIGO+"' class='img-fluid' src='"+datos[k+j].MARCIMAGEN+"'></div>"
                    }else{
                        contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[a].MARCCODIGO+"' class='img-fluid' src='"+datos[a].MARCIMAGEN+"'></div>"
                        a++;
                    }

                }
                contenedor+="\n\</div>"

            }
            $("#MARCAS").html(contenedor);

            //MARCAS VERSION MOVIL
            contenedor = "";
            for(var i=0; i<datos.length ; i++){
                if(i==0){
                    contenedor += "<div class='carousel-item justify-content-center no-gutters active'>";
                    contenedor+="\n\<img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                }else{
                    contenedor += "<div class='carousel-item justify-content-center no-gutters '>";
                    contenedor+="\n\<img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                }
            }
            $("#MARCASCEL").html(contenedor);
        }
    });
};

//-- FUNCION MOSTRAR CATEGORIAS DE LA EMPRESA (SLIDER) --
vistaWeb.prototype.mostrarCategoriasDestacadas = function(){
        
  $.ajax({
      url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarCategorias.php',
      type: 'GET',
      datatype:'json',
      error: function(error){
          if(error.status == 401){
              console.log("Archivos no encontrados");
          }
          else{
              console.log("Error no identificado");
          }
      },
      success: function(datos){
          var contenedor = "";

          //VERSION WEB
          contenedor += "<div class='carousel-item row row-cols-5 no-gutters active'>";
          for(var i=0; i<datos.length ; i++){
              if(i<5){
                  contenedor+="\n\<div class='col float-left p-2 text-left'><div class='card align-items-center' > \
            <div class='view overlay' style='height: 330px; width: 100%;'> \
              <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATIMAGEN+"' class='card-img-top' height='320'> \
              <a href='Tienda.php?catNombre="+datos[i].CATNOMBRE+"'><div class='mask rgba-white-slight'></div></a> \
            </div> \
            <div class='card-body text-center px-1 py-2'> \
              <h6 class='font-weight-bold text-uppercase'> \
                <a class='dark-grey-text' href='Tienda.php?catNombre="+datos[i].CATNOMBRE+"'>"+datos[i].CATNOMBRE+"</a> \
              </h6> \
            </div> \
          </div></div>"
              }
          }
          contenedor+="\n\</div>"
          for(var j=0; j<datos.length-1; j++){

              var a=0;
              contenedor += "<div class='carousel-item row row-cols-5 no-gutters'>";

              for(var k=1; k<6; k++){

                  if((k+j)<datos.length){
                      contenedor+="\n\<div class='col float-left p-2 text-left'><div class='card align-items-center'> \
            <div class='view overlay' style='height: 330px; width: 100%;'> \
              <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[k+j].CATIMAGEN+"' class='card-img-top' height='320'> \
              <a href='Tienda.php?catNombre="+datos[k+j].CATNOMBRE+"'><div class='mask rgba-white-slight'></div></a> \
            </div> \
            <div class='card-body text-center px-1 py-2'> \
              <h6 class='font-weight-bold text-uppercase'> \
                <a class='dark-grey-text' href='Tienda.php?catNombre="+datos[k+j].CATNOMBRE+"'>"+datos[k+j].CATNOMBRE+"</a> \
              </h6> \
            </div> \
          </div></div>"
                  }else{
                      contenedor+="\n\<div class='col float-left p-2 text-left'><div class='card align-items-center'> \
            <div class='view overlay' style='height: 330px; width: 100%;'> \
              <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[a].CATIMAGEN+"' class='card-img-top' height='320'> \
              <a href='Tienda.php?catNombre="+datos[a].CATNOMBRE+"'><div class='mask rgba-white-slight'></div></a> \
            </div> \
            <div class='card-body text-center px-1 py-2'> \
              <h6 class='font-weight-bold text-uppercase'> \
                <a class='dark-grey-text' href='Tienda.php?catNombre="+datos[a].CATNOMBRE+"'>"+datos[a].CATNOMBRE+"</a> \
              </h6> \
            </div> \
          </div></div>"
                      a++;
                  }

              }
              contenedor+="\n\</div>"

          }
          $("#categoriasDestacadas").html(contenedor);

          //VERSION MOVIL
          contenedor = "";
          for(var i=0; i<datos.length ; i++){
              if(i==0){
                  contenedor += "<div class='carousel-item justify-content-center no-gutters p-2 text-left active'>";
                  contenedor+="\n\<div class='card align-items-center'> \
            <div class='view overlay' style='height: 238.078px; width: 100%;'> \
              <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATIMAGEN+"' class='card-img-top'> \
              <a href='Tienda.php?catNombre="+datos[i].CATNOMBRE+"'><div class='mask rgba-white-slight'></div></a> \
            </div> \
            <div class='card-body text-center' style='padding: .1rem;'> \
              <h5 class='my-3'> \
                <strong> \
                  <a class='dark-grey-text' href='Tienda.php?catNombre="+datos[i].CATNOMBRE+"'>"+datos[i].CATNOMBRE+"</a> \
                </strong> \
              </h5> \
            </div> \
          </div></div>"
              }else{
                  contenedor += "<div class='carousel-item justify-content-center p-2 text-left no-gutters '>";
                  contenedor+="\n\<div class='card align-items-center'> \
            <div class='view overlay' style='height: 238.078px; width: 100%;'> \
              <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATIMAGEN+"' class='card-img-top'> \
              <a href='Tienda.php?catNombre="+datos[i].CATNOMBRE+"'><div class='mask rgba-white-slight'></div></a> \
            </div> \
            <div class='card-body text-center' style='padding: .1rem;'> \
              <h5 class='my-3'> \
                <strong> \
                  <a class='dark-grey-text' href='Tienda.php?catNombre="+datos[i].CATNOMBRE+"'>"+datos[i].CATNOMBRE+"</a> \
                </strong> \
              </h5> \
            </div> \
          </div></div>"
              }
          }
          $("#categoriasDestacadasCelular").html(contenedor);
      }
  });

}

//-- FUNCION MOSTRAR PRODUCTOS DESTACADOS--
vistaWeb.prototype.mostrarProductosDestacados = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarProductosDestacados.php',
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
            data=datos;
            var contenedor = "";
            switch(datos[0].COMPDESTACADOS){
              case "0": contenedor+=""; break;
              case "1":
                contenedor +="<div class='bg-light1 container-fluid pt-5 pb-2 text-center'> \
              <h3 class='font-weight-bold mb-4 pb-2  wow fadeIn'>Productos de alta calidad</h3> \
              <p class='grey-text w-responsive mx-auto mb-5 wow fadeIn'>Los mejores acabados, diseños y modelos a tu alcance.</p> \
              <div class='card-deck mb-4 row justify-content-center'>";
                for(var i=0; i<datos.length ; i++){
                    contenedor += "<div class='col-12 wow fadeIn' style='min-width:150px; max-width:250px;'> \
                    <div class='card m-1' id='"+datos[i].PRODCODIGO+"' onclick='vWeb.mostrarProducto(this)'> \
                        <div class='view overlay zoom'> \
                            <img class='card-img-top DESTACADO1' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' style='cursor:pointer;' height='200px'> \
                        </div> \
                        <div class='card-body'> \
                            <p class='titulo font-weight-bold text-uppercase mb-1'>"+datos[i].PRODNOMBRE+"</p> \
                            <hr class='bg-light3 my-0' style='width: 60%; height:3px;'> \
                            <hr class='bg-primary my-1' style='width: 20%; height:3px;'> \
                            <div class='text-right'> \
                                <a class='btn bg-primary btn-sm py-0 px-1'>Ver más</a>  \
                            </div> \
                        </div> \
                    </div> \
                    </div>";

                }
                contenedor += "</div>  \
              <div class='modal fade' id='modalDescripcion' tabindex='-1' role='dialog'> \
                <div class='modal-dialog modal-dialog-centered' role='document'></div> \
              </div> \
          </div>"
                break;
              case "2":
                contenedor += "<div class='container mt-5'> \
            <section class='dark-grey-text text-center'> \
              <h3 class='font-weight-bold mb-4 pb-2'>Productos de alta calidad</h3> \
              <p class='grey-text w-responsive mx-auto mb-5'>Los mejores acabados, diseños y modelos a tu alcance.</p> \
              <div class='row justify-content-center'>";                
                for(var i=0; i<datos.length ; i++){
                    contenedor += "<div class='col-lg-3 col-md-6 mb-4 justify-content-center d-flex align-items-stretch'> \
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

                }
                contenedor += "</div> \
            </section> \
          </div>";
                break;
                
              case "3":
                contenedor += "<div class='container mt-5'>  \
            <section class='dark-grey-text text-center'>  \
              <h3 class='font-weight-bold mb-2 pb-2'>Productos de alta calidad</h3>  \
              <p class='grey-text w-responsive mx-auto mb-2'>Los mejores acabados, diseños y modelos a tu alcance.</p>  \
                <div class='row justify-content-center'>";                
                for(var i=0; i<datos.length ; i++){
                    contenedor += "<div class='col-lg-3 col-md-6 p-2 text-left'>  \
          <div class='card' id='"+datos[i].PRODCODIGO+"' onclick='vWeb.mostrarProducto(this)'>  \
              <div class='view overlay zoom'>  \
                  <img class='card-img-top DESTACADO3' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' style='cursor:pointer; height:40vh;'>  \
              </div>  \
              <div class='card-body'>  \
                  <p class='mb-2 font-dark4'>"+datos[i].MARCNOMBRE+"</p>  \
                  <p class='titulo mb-1'>"+datos[i].PRODNOMBRE+"</p>  \
                  <p class='mb-2 font-dark4'>COD "+datos[i].PRODCODIGOES+"</p>  \
                  <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>  \
              </div>  \
          </div>  \
          </div>";

                }
                contenedor += "</div> \
            </section> \
          </div>";
                break;
            }

            $("#DESTACADOS").html(contenedor);
        }
    });
};

//-- FUNCION MOSTRAR INFORMACION DE LA EMPRESA --
vistaWeb.prototype.mostrarInformacionNosotros = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosNosotros.php',
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
            $("#quienesSomos div p").html(datos.NOSTDESCRIPCION);
			$("#mision div p").html(datos.NOSTMISION);
			document.getElementById('imgMision').src = datos.NOSTMISION_IMAGEN;
			$("#vision div p").html(datos.NOSTVISION);
			document.getElementById('imgVision').src = datos.NOSTVISION_IMAGEN;

        }
    });
};

//-- VALIDAR INFORMACION DE CONTACTANOS EN LA WEB --
vistaWeb.prototype.validar = function(){
    var asunto=$("#asunto").val();
    var correo=$("#correo").val();
    var mensaje=$("#mensaje").val();    
    
    if(asunto == null || asunto.length == 0 || /^\s+$/.test(asunto)){
        alert('ERROR: El campo asunto no debe ir vacío o lleno de solamente espacios en blanco');
        $("#asunto").focus();
    }
    else if(mensaje == null || mensaje.length == 0 || /^\s+$/.test(mensaje)){
        alert('ERROR: El campo mensaje no debe ir vacío o lleno de solamente espacios en blanco');
        $("#mensaje").focus();
    }
    else if(asunto.length<3 || asunto.length>60){
        alert('ERROR Nombre: Tamaño mínimo : 3. Tamaño máximo: 60');
        $("#asunto").focus();
    }
    else if(mensaje.length<4 || mensaje.length>400){
        alert('ERROR Mensaje: Tamaño mínimo: 4. Tamaño máximo: 400');
        $("#mensaje").focus();
    }
    else if(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(correo)){
            vWeb.insertarMensajeContactanos();
        }else{
            alert("Correo incorrecto");
        }
};

//-- FUNCION GUARDAR MENSAJE DE CONTACTANOS EN LA BD --
vistaWeb.prototype.insertarMensajeContactanos = function(){
    var $datos={
        '_correo': $("#correo").val(),
        '_asunto': $("#asunto").val(),
        '_mensaje': $("#mensaje").val()
    }
    
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_EnviarCorreo.php',
        type: 'POST',
        data: $datos,
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
				console.log("Información no enviada");
            }
            else{
				console.log("Error no identificado");
            }
        },
        success: function(msg){
            if(msg.response == 0){
                console.log("No se envió el mensaje");
            }
            else{
                console.log("Mensaje enviado correctamente");
                $("#correo").val("");
                $("#asunto").val("");
                $("#mensaje").val("");
            }
        }
    });
};

/*=============================================
    FUNCIONES INFORMACION DE FILTROS
=============================================*/

/* --> MOSTRAR TODOS LAS CATEGORIAS EN EL MENU DE LA TIENDA */ 
vistaWeb.prototype.mostrarCategoriasFiltros = function(categoria){

    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarCategorias.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("No se pudo establecer conexion con el servidor");
            }
            else{
                console.log("Error no identificado.");
            }
        },
        success: function(datos){
            if(datos.response == 0){
                console.log('ERROR: '+datos.message);
            }
            else{
                var categorias = "";
                var categorias2 = "";
                for (var i=0;i<datos.length;i++){
                    if(datos[i].CATNOMBRE==categoria){
                      categorias+="<li class='col btn p-1 active'><img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATICONO+"' width='60'><p class='px-2'>"+datos[i].CATNOMBRE+"</p></li>"
                    }else{
                      categorias+="<li class='col btn p-1'><img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATICONO+"' width='60'><p class='px-2'>"+datos[i].CATNOMBRE+"</p></li>"
                    }

                    categorias2+="<li class='btn col-5 col-sm-3 bg-primary p-1'><img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATICONO+"' width='50'><br>"+datos[i].CATNOMBRE+"</li>"

                }
                $("#categorias ul").html(categorias);
                $("#filtroCategoriasContent ul").html(categorias2);
              
            }
        }
    });
  
}
      
/* --> MOSTRAR TODOS LAS MARCAS SEGUN LA CATEGORIA SELECCIONADA */ 
vistaWeb.prototype.mostrarMarcasFiltros = function(opcion){

    var $categoria={
        '_categoria': opcion
    }

    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarMarcasXProducto.php',
        type: 'POST',
        data: $categoria,
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("No se pudo establecer conexion con el servidor");
            }
            else{
                console.log("Error no identificado.");
            }
        },
        success: function(datos){
            if(datos.response == 0){
                $("ul.marcas").html("<p class='font-dark4 text-center'>Sin resultados</p>");
            }
            else{
                $("ul.marcas").html("");
                var marcas = ""
                for (var i=0;i<datos.length;i++){
                    marcas+="<li class='list-group-item'>  \
                        <div class='custom-control custom-checkbox'>  \
                            <input type='checkbox' class='"+datos[i].MARCCODIGO+" custom-control-input' id='"+datos[i].MARCCODIGO+"'>  \
                            <label class='custom-control-label pt-1 pl-2' for='"+datos[i].MARCCODIGO+"'>"+datos[i].MARCNOMBRE+"</label>  \
                        </div>  \
                    </li>"
                }
                $("ul.marcas").html(marcas);
            }
        }
    });
  
}
      
/* --> MOSTRAR TODOS LOS TAGS SEGUN LA CATEGORIA SELECCIONADA */ 
vistaWeb.prototype.mostrarTagsFiltros = function(opcion){

    var $categoria={
        '_categoria': opcion
    }

    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarTagsXProducto.php',
        type: 'POST',
        data: $categoria,
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("No se pudo establecer conexion con el servidor");
            }
            else{
                console.log("Error no identificado.");
            }
        },
        success: function(datos){
            if(datos.response == 0){
                $("ul.tags").html("<p class='font-dark4 text-center'>Sin resultados</p>");
            }
            else{
                $("ul.tags").html("");
                var tags = [];
                var evaluar = [];
                for (var i=0;i<datos.length;i++){

                  if(i==0){
                    tags=datos[i].PRODTAGS.split(";");
                  }else{
                    evaluar=datos[i].PRODTAGS.split(";");
                    
                    for (var j=0;j<tags.length;j++){
                      for( var k=0;k<evaluar.length;k++){
                        if( $.trim(evaluar[k]) == $.trim(tags[j]) ){
                          evaluar.splice(k, 1);
                        }
                      }
                    }
                    if(evaluar.length > 0){tags.push( $.trim(evaluar[0]) );}
                  }
                }
                var content="";
                for( var i=0;i<tags.length;i++){
                  tags[i] = $.trim(tags[i]); 
                  content+="<li class='list-group-item'>  \
                        <div class='custom-control custom-checkbox'>  \
                            <input type='checkbox' class='"+tags[i]+" custom-control-input' id='"+tags[i]+"'>  \
                            <label class='custom-control-label pt-1 pl-2' for='"+tags[i]+"'>"+tags[i]+"</label>  \
                        </div>  \
                    </li>"
                }
                $("ul.tags").html(content);
            }
        }
    });
  
}
      
/*=============================================
    FUNCION MOSTRAR PRODUCTOS X CATEGORIA
=============================================*/

var total, paginas;
var totalP, paginasP;

/* --> SELECCIONAR CATEGORIA */ 
vistaWeb.prototype.mostrarProductosXCategoria = function(opcion){
    var $categoria={
        '_categoria': opcion
    }
    $.ajax({
		url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarProductos.php',
        type: 'POST',
        data: $categoria,
        datatype:'json',
        error: function(error){	
            if(error.status == 401){
                console.log("Categoria incorrecta");
            }
            else{
                console.log("Error no identificado");
            }
        },
        success: function(datos){
            data=datos;
            if(datos.response==0){
                var vacio="<div class='container text-center m-5 p-5'><h1 class='h1-responsive font-weight-bold grey-text'>NO DISPONIBLE </h1><i class='fa fa-lock fa-4x p-5 grey-text'></i></div>"
                $("#content").html(vacio);
            }else{
                vWeb.generarPaginacion(datos);
            }
        }
    });
};

/* --> GENERAR PAGINACION [FILTRO] */ 
vistaWeb.prototype.generarPaginacion = function(datos){

    total = datos.length;
    paginas=0;

    //CANTIDAD DE PAGINAS
    if(total%8==0){
        paginas=total/8;
    }else{
        paginas=(total/8)+1;
        paginas=Math.floor(paginas);
    }

    //GENERAR CONTENEDOR
    $('#PAGINACION').bootpag({
        total: paginas,
        page: 1,
        maxVisible: 5,
        activeClass: 'activePage',
        disabledClass: 'disabled'
    }).on("page", function(event, num){
      
        vWeb.generarProductos(totalP, paginasP, data,num);
    });
    vWeb.generarProductos(total, paginas, data,1);
  
    totalP=total;
    paginasP=paginas;

};
      
/* --> GENERAR CUADRICULA DE PRODUCTOS */ 
vistaWeb.prototype.generarProductos = function(total, paginas, datos,num){
    var primero=(num-1)*8;
    var ultimo=num*8;
    var contenido = "";
    
    if(paginas==num){
        ultimo=total;
    }
    for(var i=primero; i<ultimo; i++){
        contenido += "<div class='col-12 col-sm-6 col-md-4 col-lg-3 p-2'>\n\
        <div class='card' id='"+datos[i].PRODCODIGO+"' onclick='vWeb.mostrarProducto(this)'>\n\
            <div class='view overlay zoom'>\n\
                <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"'>\n\
            </div>\n\
            <div class='card-body'>\n\
                <p class='mb-2 font-dark4'>"+datos[i].MARCNOMBRE+"</p>\n\
                <p class='mb-1 titulo'>"+datos[i].PRODNOMBRE+"</p>\n\
                <p class='mb-2 font-dark4'>COD "+datos[i].PRODCODIGOES+"</p>\n\
                <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>\n\
            </div>\n\
        </div>\n\
        </div>";
    
    }
    $("#content").html(contenido);
};

/* --> REDIRIGIR AL PRODUCTO */ 
vistaWeb.prototype.mostrarProducto = function(cod){

  var $datos={
      '_codigo': cod.id
  }

  $.ajax({
      url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_DetalleProducto.php',
      type: 'POST',
      data: $datos,
      dataType: 'json',
      error: function(error){
          if(error.status == 401){
              console.log("No se pudo establecer conexion con el servidor");
          }
          else{
              console.log("Error no identificado.");
          }
      },
      success: function(datos){
          if(datos.response == 0){
              console.log('ERROR: '+datos.message);
          }
          else{
            
              sessionStorage.clear();
            
              //GUARDAR DATA

              sessionStorage["Producto-presentacion"]=datos.PRODPRESENTACION;
              sessionStorage["Producto-descripcion"]=datos.PRODDESCRIPCION;
            
              sessionStorage["Producto-nombre"]=datos.PRODNOMBRE;
              sessionStorage["Producto-codigoEs"]=datos.PRODCODIGOES;
              sessionStorage["Producto-imagen"]=datos.PRODIMAGEN;
              sessionStorage["Producto-codMarca"]=datos.CODMARCA;
              sessionStorage["Producto-marcaNombre"]=datos.MARCNOMBRE;
              sessionStorage["Producto-marcaImagen"]=datos.MARCIMAGEN;
              sessionStorage["Producto-tags"]=datos.PRODTAGS;
              sessionStorage["Producto-fichaTec"]=datos.PRODFICHATEC;
              sessionStorage["Producto-catCodigo"]=datos.CATCODIGO;
              sessionStorage["Producto-catNombre"]=datos.CATNOMBRE;
              sessionStorage["Producto-destacado"]=datos.PRODDESTACADO;

              window.location.href = "Producto";

          }
      }
  });
  
};

var vWeb = new vistaWeb();
vWeb.mostrarInformacionEmpresa();
