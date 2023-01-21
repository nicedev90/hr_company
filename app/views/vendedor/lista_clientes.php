<?php require APPROOT . '/views/vendedor/partials/header.php'; ?>

  <!-- wrapper dashboard -->
  <div class="flex min-h-screen">

    <!-- sidebar -->
    <?php require APPROOT . '/views/vendedor/partials/sidebar.php'; ?>

    <!-- background dashboard -->
    <div class="flex flex-col w-full bg-primaryDark">

      <!-- mobile navbar -->
      <?php require APPROOT . '/views/vendedor/partials/mobile.php'; ?>
      
      <!-- main dashboard container -->
      <div class="rounded-2xl m-2 bg-neutralLight md:px-1 md:m-4 md:ml-0 md:h-full">

        <!-- topbar -->
        <?php require APPROOT . '/views/vendedor/partials/topbar.php'; ?>

        <!-- main section -->
        <section id="main" class="py-1 px-2 md:py-0">

          <!-- table container -->
          <div class="m-2 p-2 rounded-xl w-full mx-auto space-y-3 bg-white shadow">
            <!-- title -->
            <div class="text-dark text-xl font-bold text-center">
              <h2>Clientes</h2>
            </div>
            
            <!-- responsive table container -->
            <div class="flex flex-col mt-2 shadow md:space-y-0 space-y-2">

              <div class="hidden md:flex justify-around text-neutralLight bg-primaryDark">
                <!-- columnas -->
                <div class="w-44 p-2 border-r">Empresa</div>
                <div class="w-44 p-2 border-r">Responsable</div>
                <div class="w-44 p-2 border-r">Correo</div>
                <div class="w-24 p-2 border-r">Telefono</div>
                <div class="w-36 p-2 border-r">Direccion</div>
                <div class="w-32 p-2 border-r">Referencia</div>
                
                <div class="w-24 p-2">Acciones</div>
              </div>

              <!-- filas -->
              <div class="flex flex-col space-y-3 md:space-y-0 ">

                <div class="odd:bg-neutral even:bg-neutralLight w-full md:flex justify-around md:px-0 text-sm text-dark border border-dark md:border-none ">

                  <div class="flex items-center p-1 px-3 border-b border-dark md:p-0   md:w-44 md:border-none">
                    <div class="w-1/4 font-bold md:hidden">Empresa :</div>
                    <p class="w-3/4">Lorem em ipsum dolor, sit amet. Lorem ipsum dolor, sit amet consectetur.</p>
                  </div>

                  <div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-44 md:border-none">
                    <div class="w-1/4 font-bold md:hidden">Responsable :</div>
                    <p class="w-3/4">Lorem ipsum dolor, sit amit amet. Lorem ipsum dolor, sit amet consectetur.</p>
                  </div>

                  <div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-44 md:border-none">
                    <div class="w-1/4 font-bold md:hidden">Email :</div>
                    <p class="w-3/4">Lorem ipsum dolor, psum dolor, sit amet. Lorem ipsum dolor, sit amet consectetur.</p>
                  </div>

                  <div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-24 md:border-none">
                    <div class="w-1/4 font-bold md:hidden">Telefono :</div>
                    <p class="w-3/4">+501949260 Lorem ipsum dolor, sit amet.</p>
                  </div>

                  <div class="flex items-center p-1 px-3 border-b border-dark md:p-0  md:w-36 md:border-none">
                    <div class="w-1/4 font-bold md:hidden">Direccion :</div>
                    <p class="w-3/4">Lorem ipsum dolor, sit amet consectetur. Lorem ipsum dolor, sit amet consectetur.</p>
                  </div>

                  <div class="flex items-center p-1 px-3 border-b border-dark md:p-0 md:w-32 md:border-none">
                    <div class="w-1/4 font-bold md:hidden">Ubicacion :</div>
                    <p class="w-3/4">Lorem ipsum dolor, </p>
                  </div>
                  
                  <div class="flex md:p-0 md:w-24">
                    <div class="w-1/2 flex items-center hover:bg-ctaDark hover:text-white text-xl justify-center">
                      <p class="md:hidden">Eliminar</p>
                      <i class="fa-solid fa-trash-can px-2"></i>
                    </div>
                    <div class="w-1/2 flex items-center justify-center hover:text-white hover:bg-ctaDark text-xl">
                      <p class="md:hidden">Editar</p>
                      <i class="fa-solid fa-edit px-2"></i>
                    </div>
                  </div>
                </div>

              </div>
      
            </div>
          </div>

        </section>

      </div>
    </div>
  </div>

<?php require APPROOT . '/views/vendedor/partials/footer.php'; ?>