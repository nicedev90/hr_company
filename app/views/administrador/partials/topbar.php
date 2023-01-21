<!-- barra de direccion, usuario y busqueda -->
<section id="topbar" class="flex justify-end md:justify-between items-center py-2 px-4 border-b">
   <!-- direccion -->
   <div class="hidden flex w-auto md:block">
      <a href="#" class="px-3">Recursos Humanos > <?php echo $_SESSION["user_perfil"] ?> ><?php echo $data ?> </a>
   </div>
   <!-- busqueda y usuario-->
   <div class="flex md:ml-5 md:justify-around space-x-6">

      <!-- busqueda -->
      <div class="flex w-auto items-center px-4 space-x-2 text-xl rounded-full bg-neutral">
         <input type="search" class="p-1 text-sm rounded-full outline-none bg-neutral md:focus:w-56 focus:border">
         <button class=""><i class="fa-solid fa-search"></i></button>
      </div>

      <!-- usuario -->
      <div class="relative flex w-full items-center space-x-6 text-xl">
         <i class="fa-solid fa-bell"></i>
         <button id="btn-perfil" class="flex justify-around items-center text-white rounded-full py-2 px-2 space-x-2 bg-cta hover:bg-ctaLight md:px-4">
            <img src='data:image/jpeg;base64,".base64_encode($_SESSION["user_img"])."'>
            <p class="hidden md:block"><?php echo $_SESSION["user_nombre"] ?></p>
         </button>
      </div>
   </div>

       <!-- colocar clase absolute para que se despliegue encima del contenido, fixed dentro del mismo div,  -->
      <div id="perfil" class="hidden absolute bg-primaryDark flex-col items-center text-white w-64 shadow-lg top-32 right-0 ">
         <a href="" class="w-full text-center py-4 hover:bg-ctaLight"><?php echo $_SESSION["user_perfil"] ?></a>
         <a href="<?php echo URLROOT; ?>/administrador/perfil" class="w-full text-center py-4 border-t hover:bg-ctaLight">Ver Perfil</a>
         <a href="<?php echo URLROOT; ?>/users/logout" class="w-full text-center py-4 border-t hover:bg-ctaLight">Cerrar sesion</a>
      </div>
</section>