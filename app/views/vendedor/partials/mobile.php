      <nav id="navbar" class="flex justify-between py-2 bg-primaryDark md:hidden">

        <!-- mobile logo -->
        <div id="logo-mobile" class="w-1/3 px-4">
          <img src="<?php echo URLROOT; ?>/img/logo-bco.png" alt="">
        </div>
        <!-- mobile hamburger menu -->
        <button id="menu-btn" class="block hamburger mr-4 md:hidden focus:outline-none">
          <span class="hamburger-top bg-neutralLight"></span>
          <span class="hamburger-middle bg-neutralLight"></span>
          <span class="hamburger-bottom bg-neutralLight"></span>
        </button>
    
      </nav>

      <!-- mobile hamburger menu -->
      <div class="md:hidden">
        <!-- colocar clase absolute para que se despliegue encima del contenido, fixed dentro del mismo div,  -->
        <div id="menu" class="hidden absolute bg-primaryDark flex-col items-center text-white w-96 shadow-lg top-14 right-0">
          <a href="<?php echo URLROOT; ?>/vendedores/index" class="w-full text-center py-4 hover:bg-ctaLight">Inicio</a>
          <a href="<?php echo URLROOT; ?>/vendedores/lista_clientes" class="w-full text-center py-4 border-t hover:bg-ctaLight">Clientes</a>
          <a href="<?php echo URLROOT; ?>/vendedores/lista_vacantes" class="w-full text-center py-4 border-t hover:bg-ctaLight">Requerimientos</a>
        </div>
      </div>