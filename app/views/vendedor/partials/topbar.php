<!-- barra de direccion, usuario y busqueda -->
<section id="topbar" class="flex items-center py-2 px-4 border-b">
  <!-- direccion -->
  <div class="hidden flex w-1/2 md:block">
    <a href="#" class="px-1 text-sm"><?php echo APPNAME; ?> > <?php echo $_SESSION["user_perfil"]; ?> </a>
  </div>

  <!-- busqueda y usuario-->
  <div class="flex w-full md:justify-end md:space-x-8">

    <!-- busqueda -->
    <div class="flex w-full px-4 space-x-4 rounded-full bg-neutral md:w-auto">
      <input type="search" class="w-full md:w-auto py-3 px-1 rounded-full outline-none bg-neutral md:p-0 md:focus:w-64">
      <button id="search" class="px-2"><i class="fa-solid fa-search text-xl"></i></button>
    </div>

    <!-- usuario -->
    <div class="hidden flex md:space-x-4 md:block md:w-max">
      <button id="notification"  class="px-2"><i class="fa-solid fa-bell text-xl"></i></button>
      <button id="btn-perfil" class="text-white rounded-full bg-cta hover:bg-ctaLight md:space-x-2 md:py-1 md:px-4">
        <!-- <img src="data:image/jpeg;base64,'.base64_encode($_SESSION['user_img']).'"> -->
        <span class="hidden md:block"><?php echo $_SESSION["user_nombre"]; ?></span>
      </button>
    </div>

    <!-- colocar clase absolute para que se despliegue encima del contenido, fixed dentro del mismo div,  -->
    <div id="perfil" class="hidden absolute bg-primaryDark flex-col items-center text-white w-56 shadow-lg rounded-xl mt-10 right-6 md:right-14">
      <a href="" class="w-full text-center py-4 hover:bg-ctaLight"><?php echo $_SESSION["user_perfil"] ?></a>
      <a href="<?php echo URLROOT; ?>/vendedores/perfil" class="w-full text-center py-4 border-t hover:bg-ctaLight">Ver Perfil</a>
      <a href="<?php echo URLROOT; ?>/users/logout" class="w-full text-center py-4 border-t hover:bg-ctaLight">Cerrar sesion</a>
    </div>

  </div>

</section>