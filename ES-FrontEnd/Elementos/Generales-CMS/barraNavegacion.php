    
    <!-- MENU SUPERIOR-->
    <nav id="navbarCMS" class="navbar navbar-expand-lg navbar-dark fixed-top">

        <!-- BOTON EXPANSIBLE--> 
        <button class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- TITULO -->
        <a class="navbar-brand ml-2" href="CMS-Inicio"></a>

        <!-- CONTENIDO-->
        <ul class="nav ml-auto mr-2 d-none d-lg-block">
          <li class="nav-item dropdown">

            <!--Nombre de usuario-->
            <a class="nav-link dropdown-toggle" id="navbarUser" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Micha con patas</a>

            <!--Opciones de usuario-->
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarUser">
              <a class="dropdown-item" href="#">Mi cuenta</a>
              <a class="dropdown-item" href="#">Configuración</a>
              <a class="dropdown-item" href="#">Cerrar sesión</a>
            </div>

          </li>
        </ul>

    </nav>

    <!-- MENU LATERAL-->
    <div id="navbarText"  class="sidebar pb-5">
      <ul class="list-sidebar pb-3">

        <!-- LOGO-->
        <div class="logo text-center my-3"></div>

        <!-- MENU INICIO-->
        <li> 
            <a href="CMS-Inicio"> 
                <i class="fas fa-home"></i>
                <span class="nav-label"> Inicio </span>
            </a>
        </li>

        <!-- MENU INFORMACION GENERAL-->
        <li> 
            <a href="CMS-InfGeneral"> 
                <i class="fas fa-users"></i>
                <span class="nav-label"> Información general</span>
            </a>
        </li>
        
        <!-- MENU ACERCA DE LA EMPRESA-->
        <li> 
            <a href="CMS-AcercaEmpresa"> 
                <i class="fas fa-info-circle"></i>
                <span class="nav-label"> Acerca de la empresa</span>
            </a>
        </li>

        <!-- MENU COMPONENTES-->
        <li> 
            <a href="#" data-toggle="collapse" data-target="#dashboard1" aria-expanded="true"> 
                <i class="fas fa-boxes"></i>
                <span class="nav-label"> Componentes</span> 
                <span class="fa fa-chevron-left pull-right mt-2"></span> 
            </a>
            <ul class="sub-menu collapse show" id="dashboard1">
                <!--<li><a href="CMS-Componente-Navegador"> Navegador </a></li>
                <li><a href="CMS-Componente-Encabezado"> Encabezados </a></li>-->
                <li><a href="CMS-Componente-Carrusel"> Carrusel de imágenes </a></li>
                <li><a href="CMS-Componente-Banner"> Banner 1</a></li>
                <li><a href="CMS-Componente-Banner2"> Banner 2</a></li>
                <li><a href="CMS-Componente-ProdDestacados"> Productos Destacados</a></li>
                <li><a href="CMS-Componente-Marcas"> Marcas </a></li>
                <!--<li><a href="CMS-Componente-Banner3"> Banner 3</a></li>
                <li><a href="CMS-Componente-Footer"> Pie de página</a></li>-->
                
            </ul>
        </li>
        
        <!-- MENU PLUGGINS-->
        <!--<li> 
            <a href="#" data-toggle="collapse" data-target="#dashboard4" aria-expanded="true"> 
                <i class="fas fa-splotch"></i>
                <span class="nav-label"> Pluggins</span> 
                <span class="fa fa-chevron-left pull-right mt-2"></span>
            </a>
            <ul class="sub-menu collapse show" id="dashboard4">
                <li><a href="CMS-Pluggin-Preloading"> Preloading </a></li>
                <li><a href="CMS-Pluggin-Chat"> Chatbox</a></li>
                <li><a href="CMS-Pluggin-Extras"> Extras</a></li>
                
            </ul>
        </li>-->

        <!-- MENU PRODUCTOS-->
        <li> 
            <a href="#" data-toggle="collapse" data-target="#dashboard2" aria-expanded="true"> 
                <i class="fas fa-shipping-fast"></i> 
                <span class="nav-label"> Productos </span> 
                <span class="fa fa-chevron-left pull-right mt-2"></span> 
            </a>
            <ul class="sub-menu collapse show" id="dashboard2">
                <li><a href="CMS-Producto-Agregar"> Agregar producto </a></li>
                <li><a href="CMS-Producto-Actualizar"> Editar producto </a></li>
                <li><a href="CMS-Producto-Eliminar"> Eliminar producto </a></li>
            </ul>
        </li>
        
        <!-- MENU CONFIGURACION-->
        <!--<li> 
            <a href="CMS-Configuracion"> 
                <i class="fas fa-cog"></i>
                <span class="nav-label"> Configuración</span>
            </a>
        </li>-->
        
        <!-- MENU USUARIO-->
        <!--<li class="d-lg-none"> 
            <a href="#" data-toggle="collapse" data-target="#dashboard3" class="collapsed"> 
                <i class="fas fa-address-book"></i> 
                <span class="nav-label"> Usuario </span> 
                <span class="fa fa-chevron-left pull-right mt-2"></span> 
            </a>
            <ul class="sub-menu collapse" id="dashboard3">
                <li><a onclick="vistaNuevoProducto()"> Mi cuenta </a></li>
                <li><a onclick="vistaEditarProducto()"> Configuración </a></li>
                <li><a onclick="vistaEliminarProducto()"> Cerrar sesión </a></li>
            </ul>
        </li>-->

      </ul>
    </div>