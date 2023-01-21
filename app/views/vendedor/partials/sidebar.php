        <!-- sidebar -->
    <div id="sidebar" class="hidden w-1/5 bg-primaryDark md:block">
      <!-- menu sidebar -->
      <div id="sidebar-menu" class="">
        <ul class="link-items flex flex-col py-3 space-y-2">

          <li class="link-item">
            <div class="p-4 bg-primaryDark">
              <img src="<?php echo URLROOT; ?>/img/logo-bco.png" alt='Logo'>
            </div>
          </li>

          <li class="<?php if ($data['page'] == 'index') {echo 'active';} else {echo 'inactive';} ?> w-auto ml-4 p-4 rounded-l-xl">
            <a href="<?php echo URLROOT; ?>/vendedores/index" class="font-bold px-2">
              <i class="fa-solid fa-home fa-1x px-2"></i> Inicio
            </a>
          </li>

          <li class="<?php if ($data['page'] == 'lista_clientes') {echo 'active';} else {echo 'inactive';} ?> w-auto ml-4 p-4 rounded-l-xl">
            <a href="<?php echo URLROOT; ?>/vendedores/lista_clientes" class="font-bold px-2">
              <i class="fa-solid fa-user fa-1x px-2"></i> Clientes
            </a>
          </li>

          <li class="<?php if ($data['page'] == 'lista_vacantes') {echo 'active';} else {echo 'inactive';} ?> w-auto ml-4 p-4 rounded-l-xl">
            <a href="<?php echo URLROOT; ?>/vendedores/lista_vacantes" class="font-bold px-2">
              <i class="fa-solid fa-print fa-1x px-2"></i> Requerimientos
            </a>
          </li>

        </ul>
      </div>
    </div>