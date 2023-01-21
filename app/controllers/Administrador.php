<?php 
	class Administrador extends Controller {
		private $admin;
		private $coordinador;
		private $reclutador;
		private $vendedor;

		public function __construct() {
			$this->admin = $this->model('Admin');
		}
	}
?>