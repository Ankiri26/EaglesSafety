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

      <!-- CUERPO-->
      <div class="px-1 px-md-5 mb-5">

          <!--TITULO-->
          <h3 class="titulo">AGREGAR UN NUEVO PRODUCTO</h3>

          <!--CONTENIDO DEL FORMULARIO-->
          <div>

            <!-- DETALLE DEL PRODUCTO-->
            <div class="row mt-5 justify-content-center">

              <!-- IMAGEN-->
              <div class="col-lg-6 text-center">
                <form id="form">
                  <img id="previewFoto" src="ES-FrontEnd/Elementos/Imagenes/Icons/sinImagen.png" class="img-fluid mb-2 pb-4 border w-100">
                  <label for="foto" class="botonSecundario">CAMBIAR IMAGEN</label>
                  <input id="foto" class="inputImagen" name="archivo1" type="file" accept="image/*">
                  <input type="text" hidden id="estado">
                </form>
              </div>

              <!-- PRESENTACION DEL PRODUCTO-->
              <div class="col-lg-5 text-center text-md-left mb-4">

                <!-- TITULO-->
                <input id="titulo" class="h2-responsive text-center text-md-left font-weight-bold dark-grey-text mb-1 w-100" type="text" placeholder="Nombre del producto">
                <input id="codigo" class="text-center text-md-left font-weight-bold dark-grey-text mb-1 w-100" type="text" placeholder="Código del producto">

                <!-- TAGS-->
                <div class='row m-0 mt-3 mb-4 justify-content-center justify-content-md-start w-100'>
                  <p class='mx-1 px-2 py-1 mb-0 small text-white rounded black'><i class='fas mr-1 fa-shield-alt'></i>Seguridad</p>
                  <p class='mx-1 px-2 py-1 mb-0 small text-white rounded bg-primary'><i class='fas mr-1 fa-balance-scale'></i>Calidad</p>
                  <p class='mx-1 px-2 py-1 mb-0 small text-white rounded bg-enfasis3'><i class='fas mr-1 fa-trophy'></i>Garantía</p>
                </div>

                <!-- DESCRIPCION-->
                <div class="font-weight-normal">
                  
                  <!-- MENU DE EDICION -->
                  <div class="menu-edit">
                      <b class="frmttxt-mn-it" data-frmt="ngrto" title="Bold">B</b>
                      <i class="frmttxt-mn-it fa" data-frmt="itlco" title="Italic" style="font-style: italic;">I</i>
                      <u class="frmttxt-mn-it" data-frmt="sblnhdo" title="Underline">U</u>
                      &nbsp;&nbsp;❘&nbsp;&nbsp;
                      <div class="frmttxt-mn-gp extra-frmt" title="Extra">
                          <span><s>S</s>²</span>
                          <div class="frmttxt-mn-drpdn">
                              <s class="frmttxt-mn-it" data-frmt="rscdo" title="strikethrough">S</s>
                              <span class="frmttxt-mn-it" data-frmt="sbrlnhdo" data-val="overline" title="overline" style="text-decoration: overline;">O</span>
                              <span class="frmttxt-mn-it sobrescrito" data-frmt="sbrscrto" title="superscript"><span>X</span>²</span>
                              <span class="frmttxt-mn-it subscrito" data-frmt="sbscrto" title="subscript"><span>X</span>₂</span>
                          </div>
                      </div>
                      &nbsp;&nbsp;
                      <div class="frmttxt-mn-gp tipo-lista fa fa-list" title="List">
                          <div class="frmttxt-mn-drpdn">
                              <span class="frmttxt-mn-it fa fa-list-ul" data-frmt="tplist1" title="unordered"><span></span></span>
                              <span class="frmttxt-mn-it fa fa-list-ol" data-frmt="tplist2" title="ordered"><span></span></span>
                          </div>
                      </div>
                      &nbsp;&nbsp;&nbsp;❘&nbsp;&nbsp;
                      <div class="frmttxt-mn-gp fonte-tmnho" title="Font size">
                          <span>T<small>↕</small></span>
                          <ul class="frmttxt-mn-drpdn">
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="12px">12px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="14px">14px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="16px">16px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="18px">18px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="20px">20px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="22px">22px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="24px">24px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="26px">26px</li>
                              <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="28px">28px</li>
                          </ul>
                      </div>
                      &nbsp;&nbsp;
                      <div class="frmttxt-mn-gp texto-cor fa fa-tint" title="Color">
                          <div class="frmttxt-mn-drpdn">
                              <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(255, 255, 255)" style="background: #FFFFFF;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(247, 218, 100)" style="background: #F7DA64;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(250, 197, 28)" style="background: #FAC51C;"></span>
                              <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(251, 160, 38)" style="background: #FBA026;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(243, 121, 52)" style="background: #F37934;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(209, 213, 216)" style="background: #D1D5D8;"></span>
                              <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(213, 170, 170)" style="background: #D5AAAA;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(235, 107, 86)" style="background: #EB6B56;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(226, 80, 65)" style="background: #E25041;"></span>
                              <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(184, 49, 47)" style="background: #B8312F;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(170, 213, 170)" style="background: #AAD5AA;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(97, 189, 109)" style="background: #61BD6D;"></span>
                              <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(0, 168, 133)" style="background: #00A885;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(128, 110, 128)" style="background: #806E80;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(149, 64, 129)" style="background: #954081;"></span>
                              <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(84, 172, 210)" style="background: #54ACD2;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(44, 130, 201)" style="background: #2C82C9;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(71, 85, 119)" style="background: #475577;"></span>
                              <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(0, 0, 0)" style="background: #000000;"></span>
                              <span class="frmttxt-mn-it rmv" data-frmt="txtcor" data-val="#888888" style="background: #F1F1F1;">×</span><!-- Usado como remoção de cor de texto ou fundo -->
                              <div class="frmttxt-mn-mp" data-mnpl="txtcortp">
                                  <input id="tipo-cor1" type="radio" name="tipo-cor" value="1" checked><label for="tipo-cor1">Text</label>
                                  <input id="tipo-cor2" type="radio" name="tipo-cor" value="2"><label for="tipo-cor2">Background</label>
                              </div>
                          </div>
                      </div>
                      &nbsp;&nbsp;
                      <span class="frmttxt-mn-it fa fa-ban" data-frmt="lmpfrmt" title="Clear formatting"></span>
                  </div>

                  <!-- CONTENIDO EDITABLE -->
                  <div id="presentacion" class="box-txt" contenteditable="true">Presentación del producto</div>


                  <div class="caracteristicas">
                    <p>
                      <span class="font-weight-bold">Producto de: </span><img id="previewMarca" height="30">
                      <select id="marca"><option value="-">Seleccionar marca</option></select>
                    </p>
                    <p><span class="font-weight-bold">Categoría: </span><select id="categoria"><option value="-">Seleccionar categoría</option></select></p>
                    <p><span class="font-weight-bold">Tags: </span><input id="tags" type="text" class="w-50" placeholder="Ejemplo: MSA; arnes; casco"></p>
                    <p>
                      <span class="font-weight-bold">Compartir: </span>
                      <span class="compartir">
                        <button type="button" class="btn py-1 px-2 px-xl-4 white-text" style="background: #3b5998;"><i class="fab fa-facebook-f"></i></button>
                        <button type="button" class="btn py-1 px-2 px-xl-4 white-text" style="background: #0082ca;"><i class="fab fa-linkedin-in"></i></button>
                        <button type="button" class="btn py-1 px-2 px-xl-4 white-text" style="background: #25d366;"><i class="fab fa-whatsapp"></i></button>
                      </span>
                    </p>
                  </div>

                </div>

              </div>

              <!-- DETALLES ESPECIFICOS-->
              <div class="col-12 col-lg-11">

                <!-- MENU DE OPCIONES-->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link bg-light1 font-weight-bold font-dark4 active" id="informacionGeneral-tab" data-toggle="tab" href="#informacionGeneral" role="tab" aria-controls="informacionGeneral"
                      aria-selected="true">Información general</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-light1 font-weight-bold font-dark4" id="fichaTecnica-tab" data-toggle="tab" href="#fichaTecnica" role="tab" aria-controls="fichaTecnica"
                      aria-selected="false">Ficha técnica</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-light1 font-weight-bold font-dark4" id="Comentarios-tab" data-toggle="tab" href="#Comentarios" role="tab" aria-controls="Comentarios"
                      aria-selected="false">Comentarios</a>
                  </li>
                </ul>

                <!-- CONTENIDO-->
                <div class="tab-content border" id="myTabContent">
                  <div class="tab-pane fade show active" id="informacionGeneral" role="tabpanel" aria-labelledby="informacionGeneral-tab">
          
                      <!-- MENU DE EDICION -->
                      <div class="menu-edit">
                          <b class="frmttxt-mn-it" data-frmt="ngrto" title="Bold">B</b>
                          <i class="frmttxt-mn-it fa" data-frmt="itlco" title="Italic" style="font-style: italic;">I</i>
                          <u class="frmttxt-mn-it" data-frmt="sblnhdo" title="Underline">U</u>
                          &nbsp;&nbsp;❘&nbsp;&nbsp;
                          <div class="frmttxt-mn-gp extra-frmt" title="Extra">
                              <span><s>S</s>²</span>
                              <div class="frmttxt-mn-drpdn">
                                  <s class="frmttxt-mn-it" data-frmt="rscdo" title="strikethrough">S</s>
                                  <span class="frmttxt-mn-it" data-frmt="sbrlnhdo" data-val="overline" title="overline" style="text-decoration: overline;">O</span>
                                  <span class="frmttxt-mn-it sobrescrito" data-frmt="sbrscrto" title="superscript"><span>X</span>²</span>
                                  <span class="frmttxt-mn-it subscrito" data-frmt="sbscrto" title="subscript"><span>X</span>₂</span>
                              </div>
                          </div>
                          &nbsp;&nbsp;
                          <div class="frmttxt-mn-gp insere-crctr" title="Symbols">
                              <span>Ω∫</span>
                              <div class="frmttxt-mn-drpdn">
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">×</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">÷</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">√</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">±</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">≤</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">≥</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">≈</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">≠</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">⇒</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">⇔</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">→</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">¬</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">⊂</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">⊃</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∑</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∃</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">α</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">β</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">γ</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∆</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">Θ</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">λ</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">μ</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">ξ</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">π</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">σ</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">Ψ</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">Ω</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">δ</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∂</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∞</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∫</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">∮</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∪</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">∩</span>
                                  <span class="frmttxt-mn-it" data-frmt="insrcrctr">£</span><span class="frmttxt-mn-it" data-frmt="insrcrctr">€</span>
                              </div>
                          </div>
                          &nbsp;&nbsp;
                          <div class="frmttxt-mn-gp tipo-lista fa fa-list" title="List">
                              <div class="frmttxt-mn-drpdn">
                                  <span class="frmttxt-mn-it fa fa-list-ul" data-frmt="tplist1" title="unordered"><span></span></span>
                                  <span class="frmttxt-mn-it fa fa-list-ol" data-frmt="tplist2" title="ordered"><span></span></span>
                              </div>
                          </div>
                          &nbsp;&nbsp;&nbsp;❘&nbsp;&nbsp;
                          <div class="frmttxt-mn-gp fonte-tmnho" title="Font size">
                              <span>T<small>↕</small></span>
                              <ul class="frmttxt-mn-drpdn">
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="12px">12px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="14px">14px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="16px">16px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="18px">18px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="20px">20px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="22px">22px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="24px">24px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="26px">26px</li>
                                  <li class="frmttxt-mn-it" data-frmt="fnttmnho" data-val="28px">28px</li>
                              </ul>
                          </div>
                          &nbsp;&nbsp;
                          <div class="frmttxt-mn-gp texto-cor fa fa-tint" title="Color">
                              <div class="frmttxt-mn-drpdn">
                                  <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(255, 255, 255)" style="background: #FFFFFF;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(247, 218, 100)" style="background: #F7DA64;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(250, 197, 28)" style="background: #FAC51C;"></span>
                                  <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(251, 160, 38)" style="background: #FBA026;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(243, 121, 52)" style="background: #F37934;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(209, 213, 216)" style="background: #D1D5D8;"></span>
                                  <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(213, 170, 170)" style="background: #D5AAAA;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(235, 107, 86)" style="background: #EB6B56;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(226, 80, 65)" style="background: #E25041;"></span>
                                  <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(184, 49, 47)" style="background: #B8312F;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(170, 213, 170)" style="background: #AAD5AA;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(97, 189, 109)" style="background: #61BD6D;"></span>
                                  <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(0, 168, 133)" style="background: #00A885;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(128, 110, 128)" style="background: #806E80;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(149, 64, 129)" style="background: #954081;"></span>
                                  <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(84, 172, 210)" style="background: #54ACD2;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(44, 130, 201)" style="background: #2C82C9;"></span><span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(71, 85, 119)" style="background: #475577;"></span>
                                  <span class="frmttxt-mn-it" data-frmt="txtcor" data-val="rgb(0, 0, 0)" style="background: #000000;"></span>
                                  <span class="frmttxt-mn-it rmv" data-frmt="txtcor" data-val="#888888" style="background: #F1F1F1;">×</span><!-- Usado como remoção de cor de texto ou fundo -->
                                  <div class="frmttxt-mn-mp" data-mnpl="txtcortp">
                                      <input id="tipo-cor1" type="radio" name="tipo-cor" value="1" checked><label for="tipo-cor1">Text</label>
                                      <input id="tipo-cor2" type="radio" name="tipo-cor" value="2"><label for="tipo-cor2">Background</label>
                                  </div>
                              </div>
                          </div>
                          &nbsp;&nbsp;
                          <span class="frmttxt-mn-it fa fa-ban" data-frmt="lmpfrmt" title="Clear formatting"></span>
                      </div>

                      <!-- CONTENIDO EDITABLE -->
                      <div id="descripcion" class="box-txt" contenteditable="true">Descripción del producto</div>

                  </div>
                  <div class="tab-pane fade p-5 text-center" id="fichaTecnica" role="tabpanel" aria-labelledby="fichaTecnica-tab">
                    
                    <form id="form2">
                      <a id="previewPDF" class="btn bg-primary disabled">VER PDF</a>
                      <div class="custom-file">
                        <label class="custom-file-label" for="pdf">Seleccionar Archivo</label>
                        <input id="pdf" class="custom-file-input" name="archivo2" type="file" accept="application/pdf">
                      </div>
                      <input type="text" hidden id="estado2">
                    </form>
                    
                    
                  </div>
                  <div class="tab-pane fade p-5" id="Comentarios" role="tabpanel" aria-labelledby="Comentarios-tab">Ningun comentario</div>
                </div>
                
              </div>

            </div>

            <!--BOTONES-->
            <div class="row justify-content-center my-5">
              <div class="col-sm-4 text-center">
                  <button class="botonPrincipal btn" onclick="validarFormulario()" type="submit">Guardar</button>
              </div>
              <div class="col-sm-4 text-center">
                  <button class="botonPrincipal  btn" onclick="limpiar()" type="submit">Reestablecer </button>
              </div>
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
    
    //-- INICIALIZAR FUNCIONES--
    var mostrar=false;
    mostrarCategorias();
    mostrarMarcas()
        
    //--LLAMAR A FUNCION MOSTRAR IMAGEN AL CARGAR IMAGEN--  
    var inputFile = document.getElementById('foto');
    inputFile.addEventListener('change', vGenerales.mostrarImagen, false);    
      
    //--LLAMAR A FUNCION VER PDF AL CARGAR PDF--  
    var inputFile2 = document.getElementById('pdf');
    inputFile2.addEventListener('change', verPDF, false);
      
    //-- SELECCION DE MARCA--
    $(document).on('change', '#marca', function () {
        mostrarImagenMarca($("#marca option:selected").val());
    }); 
      
    //-- LIMPIAR CAMPOS--
    function limpiar(){
        $("#titulo").val("");
        $("#codigo").val("");
        $("#presentacion").html("Presentación del producto");
        $("#marca option[value='-']").attr("selected",true);
        $("#categoria option[value='-']").attr("selected",true);
        $("#tags").val("");
        $("#descripcion").html("Descripción del producto");
        $("#previewMarca").attr("src","ES-FrontEnd/Elementos/Imagenes/Icons/sinImagen.png");
        $("#previewFoto").attr("src","ES-FrontEnd/Elementos/Imagenes/Icons/sinImagen.png");
        
        document.getElementById("form2").reset();
      
        $('a#previewPDF').addClass("disabled");
        $('a#previewPDF').attr({target: '_blank', href  : ""});
    }

    //-- MOSTRAR CATEGORIAS --    
    function mostrarCategorias(){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarCategoria.php',
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
                    mostrarToast("error",'ERROR: '+datos.message);
                }
                else{
                    $("#categoria").html("");
                    var categorias = "<option value='-'>Seleccionar categoria</option>"
                    for (var i=0;i<datos.length;i++){
                        categorias+="\<option value='"+datos[i].CATCODIGO+"'>"+datos[i].CATNOMBRE+"</option>"
                    }
                    categorias += "\</select>"
                    $("#categoria").append(categorias);
                }
            }
        });
    }

    //-- MOSTRAR MARCAS --    
    function mostrarMarcas(){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarMarca.php',
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
                    mostrarToast("error",'ERROR: '+datos.message);
                }
                else{
                    $("#marca").html("");
                    var marcas = "<option value='-'>Seleccionar marca</option>"
                    for (var i=0;i<datos.length;i++){
                        marcas+="\<option value='"+datos[i].MARCCODIGO+"'>"+datos[i].MARCNOMBRE+"</option>"
                    }
                    marcas += "\</select>";
                    $("#marca").append(marcas);
                }
            }
        });
    }
      
    //-- MOSTRAR IMAGEN DE LA MARCA -- 
    function mostrarImagenMarca(cod){
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarMarca.php',
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
                    mostrarToast("error",'ERROR: '+datos.message);
                }
                else{
                    for(var i=0;i<datos.length;i++){
                      if( cod == datos[i].MARCCODIGO ){
                        $("#previewMarca").attr("src",datos[i].MARCIMAGEN);
                      }
                    }
                }
            }
        });
    }
      
    //-- VALIDAR DATOS INGRESADOS EN EL FORMULARIO --  
    function validarFormulario(){
    
        var R1 = $("#titulo").val();
        var R2 = $("#codigo").val();
        var R3 = $("#presentacion").html();
        var R4 = $("#tags").val();
        var R5 = $("#descripcion").html();
        
        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#titulo").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#codigo").focus();
        }
        else if(R3 == null || R3.length == 0 || /^\s+$/.test(R3)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#presentacion").focus();
        }
        else if(R4 == null || R4.length == 0 || /^\s+$/.test(R4)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#tags").focus();
        }
        else if(R5 == null || R5.length == 0 || /^\s+$/.test(R5)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#descripcion").focus();
        }
        else if(document.getElementById('foto').files.length == 0){
            if (document.getElementById('pdf').files.length == 0){
                agregarProducto()
            }else{
                guardarPDFProducto();
                if ($("#estado2").val() == "PDF GUARDADO CORRECTAMENTE"){
                    agregarProducto()
                }else{
                    mostrar=true;
                    mostrarToast("error",$("#estado2").val());
                }
            }
        }else{
            guardarImagenProducto();
            if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                if (document.getElementById('pdf').files.length == 0){
                    agregarProducto()
                }else{
                    guardarPDFProducto();
                    if ($("#estado2").val() == "PDF GUARDADO CORRECTAMENTE"){
                        agregarProducto()
                    }else{
                        mostrar=true;
                        mostrarToast("error",$("#estado2").val());
                    }
                }
            }else{
                mostrar=true;
                mostrarToast("error",$("#estado").val());
            }
            
        }
            
    } 
    
    //-- VER ARCHIVO PDF CARGADO --  
    function verPDF(){
      
      var loc = window.location;
      var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
      var url = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
      
      $('a#previewPDF').removeClass("disabled");
                      
      $('a#previewPDF').attr({target: '_blank', href  : url+"ES-FrontEnd/Elementos/Imagenes/Productos/Ficha tecnica/"+document.getElementById('pdf').files[0].name});
    }
        
    //-- GUARDAR IMAGEN DEL PRODUCTO --
    function guardarImagenProducto(){
    
      var nuevoFormulario = new FormData();   
      $("#form").find(':input').each(function() {
          var elemento= this;
          //Si recibe tipo archivo 'file'
          if(elemento.type === 'file'){
          if(elemento.value !== ''){
              for(var i=0; i< $('#'+elemento.id).prop("files").length; i++){
                  nuevoFormulario.append(elemento.name, $('#'+elemento.id).prop("files")[i]);
              }
          }              
          }
      });
      console.log(nuevoFormulario)
      $.ajax({
          url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenProducto.php",
          type: "POST",
          data: nuevoFormulario,
          contentType: false,
          processData: false,
          async:false,
          success: function(datos){
              if(datos.response==0 ){
                  $("#estado").val("ERROR AL GUARDAR LA IMAGEN: "+datos.message)
              }else{
                  $("#estado").val("IMAGEN GUARDADA CORRECTAMENTE")
              }
          }
      });
    }
      
    //-- GUARDAR PDF DEL PRODUCTO --
    function guardarPDFProducto(){
    
      var nuevoFormulario = new FormData();   
      $("#form2").find(':input').each(function() {
          var elemento= this;
          //Si recibe tipo archivo 'file'
          if(elemento.type === 'file'){
          if(elemento.value !== ''){
              for(var i=0; i< $('#'+elemento.id).prop("files").length; i++){
                  nuevoFormulario.append(elemento.name, $('#'+elemento.id).prop("files")[i]);
              }
          }              
          }
      });

      $.ajax({
          url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarPDFProducto.php",
          type: "POST",
          data: nuevoFormulario,
          contentType: false,
          processData: false,
          async:false,
          success: function(datos){
              if(datos.response==0 ){
                  $("#estado2").val("ERROR AL GUARDAR PDF: "+datos.message)
              }else{
                  $("#estado2").val("PDF GUARDADO CORRECTAMENTE")
              }
          }
      });
    }
        
    //-- AGREGAR NUEVO PRODUCTO --    
    function agregarProducto(){
        var rutaFoto1,nombreFoto1;
        var rutaPDF;
    
        if(document.getElementById('foto').files.length == 0){
          if(document.getElementById('previewFoto').src==""){
              rutaFoto1="";
          }else{
              nombreFoto1=document.getElementById('previewFoto').src.split("/Productos/");
              rutaFoto1=nombreFoto1[1];
          }
        }else{
          rutaFoto1=document.getElementById('foto').files[0].name;
        }
      
        if(document.getElementById('pdf').files.length == 0){
          rutaPDF="-";
        }else{
          rutaPDF=document.getElementById('pdf').files[0].name;
        }
        
        mostrar=true;
        
        var $datos={
            '_titulo': $("#titulo").val(),
            '_codigoEspecifico': $("#codigo").val(),
            '_presentacion': $("#presentacion").html(),
            '_codmarca': $("#marca").val(),
            '_codcategoria': $("#categoria").val(),
            '_tags': $("#tags").val(),
            '_descripcion': $("#descripcion").html(),
            '_imagen': rutaFoto1,
            '_fichaTecnica': rutaPDF
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_AgregarProducto.php',
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
                    mostrarToast("error",'ERROR: '+datos.message);
                }
                else{
                    mostrarToast("exito","Producto agregado exitosamente!");
                }
            }
        });
        
    }
        
    //-- MOSTRAR TOAST CON MENSAJE--
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
      
    //-- EDITOR DE TEXTO--  
    $(document).ready(function(){
        //Prepara menu de edição para formatação de texto. O quarto parâmetro é função a ser executada após edição no texto pelo menu, e os parâmetros são: a caixa editável, dados da seleção e exec (true/false, informando se o commando foi suportado)
        $(".menu-edit").formatTxt(function(){return $(this).parent().find(".box-txt")}, null, null, function(cx, slc, exc){
            ShowMessage(cx, slc, exc);
        });
        //Remove eventos e dados aplicados do plugin "MultiformTextEditor"
        //$.fn.formatTxt.destroy($(.menu-edit"));

        //Função padrão de resposta ao uso do plugin "formatTxt()" para atualizar e exibir mensagem de formatação não suportada
        function ShowMessage(cx, slc, exc){
            cx.keyup();//-->usado para atualizar dado, mas futuramente não será necessário quando evento "input" (detector de qualquer mudança) funcionar em todos os navegadores
            exc == false ? alert("Not supported - The command was not executed by this browser. If possible, upgrade to a newer version.") : null;
        }

        //Estrutura para exibição do menu flutuante de edição inline, ao usuário selecionar texto
        var pageX;
        var pageY;
        !window.x ? x = {} : null;
        x.Selector = {};
        x.Selector.getSelected = function() {
            var t = '';
            if(window.getSelection) {
                t = window.getSelection();
            }else if(document.getSelection) {
                t = document.getSelection();
            }else if(document.selection) {
                t = document.selection.createRange().text;
            }
            return t;
        }

        //Aplica a exibição de rótulo estilizado pelo plugin Tooltipster
        $(".menu-edit > *[title]").tooltipster({position: "top", delay: 500, speed: 100, theme: "tooltipster-light-shadow", iconTouch: false});//seta para todos os elementos filhos do menu com atributo "title"
        $(".menu-edit > * *[title]").tooltipster({position: "bottom", delay: 300, speed: 100, theme: "tooltipster-light-small", iconTouch: false});//seta para todos os elementos netos do menu com atributo "title"
    });
        
    </script>
    
</body>

</html>