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
  <section id="form_login" class="flex flex-col items-center">
    
    <div class="absolute rounded-md bg-white px-8 py-6 mx-4 drop-shadow-md md:w-96">
      <!-- form login -->
      <form class="flex flex-col" action="<?php echo URLROOT; ?>/users/login" method="post">
        
        <div class="mb-10 space-y-2 md:mb-6">
          <h5 class="mx-6 text-dark text-lg font-bold text-center">
            ¡Bienvenido al Sistema de Gestión de Recursos Humanos!
          </h5>
          <?php if(isset($data['error'])) : ?>
          <div class="w-full p-2 bg-neutral text-center text-lg text-dark">
             <?php echo $data['error']; ?>
          </div>
          <?php endif; ?>
        </div>

        <div id="email-group" class="relative flex flex-col mb-6 space-y-1">

          <label for="email" class="text-primaryDark">Correo electrónico</label>
          <div class="flex border rounded-md items-center space-x-4 px-4 py-2">
            <i class="fa-solid fa-user text-ctaDark fa-1x"></i>
            <input id="email" type="email" name="email" class="w-full text-sm focus:outline-none" placeholder="Ingrese su correo" required>
          </div>

          <div id="email-check" class="absolute bottom-0 left-0 w-full h-1 "></div>
        </div>

        <div id="pass-group" class="relative flex flex-col mb-6 space-y-1">

          <div class="flex justify-between">
            <label for="password" class="text-primaryDark">Contraseña</label>
            <a href="<?php echo URLROOT; ?>/users/forgot" class="text-sm text-dark">¿Olvidaste tu contraseña?</a>
          </div>
          
          <div class="flex border rounded-md items-center space-x-4 px-4 py-2">
            <i class="fa-solid fa-key text-ctaDark fa-1x"></i>
            <input id="password" type="password" name="password" class="w-full text-sm focus:outline-none" placeholder="Ingrese su contraseña" required>
            <i id="show" class="fa-solid fa-eye text-dark fa-1x"></i>
          </div>

          <div id="pass-check" class="absolute bottom-0 left-0 w-full h-1 "></div>
          
        </div>

        <div class="mb-6">
          <button type="submit" class="w-full p-3 rounded-md font-bold text-white bg-cta hover:bg-ctaDark">Iniciar Sesión</button>
        </div>

        <div id="ipVisitor" class="text-center text-dark"> Dirección IP: <?php echo $data['ip']; ?></div>
        
      </form>     
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