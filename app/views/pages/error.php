<?php require APPROOT . '/views/pages/partials/header.php'; ?>

  <!-- logo section -->
  <section id="logo">
    <!-- logo & title -->
    <div class="flex flex-col mx-auto items-center pt-8 h-36 bg-primaryDark">
      <img src="<?php echo URLROOT; ?>/img/logo.svg" alt="">
      <p class="hidden p-4 text-white text-lg md:block">
        Gestión de Recursos Humanos
      </p>
    </div>
    <!-- background design -->
    <div class="flex bg-primaryDark h-10">
      <div class="skew-y-6 h-48 w-full bg-primaryDark"></div>
      <div class="-skew-y-6 h-48 w-full bg-primaryDark"></div>
    </div>
  </section>

  <!-- flex form section -->
  <section id="error_page" class="flex flex-col items-center">
    
    <div class="absolute rounded-md bg-white px-8 mx-4 drop-shadow-md md:w-96">
      <div class="flex flex-col items-center space-y-10 text-center py-10">
        <p>No tiene permisos para acceder a esta página. </p>
        <a href="<?php echo URLROOT; ?>/users/index" class="p-2 w-1/2 rounded-md text-center text-white text-lg bg-cta hover:bg-ctaDark">Volver a Inicio</a> 
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="bg-light mt-auto">
    <div class="flex justify-center space-x-2 py-4 text-center text-dark">
      <p> &copy; <span id="year"></span> by </p>
      <a href="https://www.grupoperti.com.mx/page/inicio" target="_blank"><?php echo APPNAME; ?></a>
    </div>
  </footer>

<?php require APPROOT . '/views/pages/partials/footer.php'; ?>