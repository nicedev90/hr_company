<?php 
	class Vendedores extends Controller {
		private $vendedor;
		private $coordinador;

		public function __construct() {
			$this->vendedor = $this->model('Vendedor');
			// $this->coordinador = $this->model('Coordinador');
		}

		public function index() {
			if (isset($_SESSION['user_perfil'])) {
				$userView = strtolower($_SESSION['user_perfil']);

				$data = ['page' => 'index'];

				$this->view($userView . '/index', $data);
			} else {
				$this->view('pages/login');
			}
		}

		public function lista_clientes() {
			if (isset($_SESSION['user_perfil'])) {
				$userView = strtolower($_SESSION['user_perfil']);

				$data = ['page' => 'lista_clientes'];

				$this->view($userView . '/lista_clientes', $data);
			} else {
				$this->view('pages/login');
			}
		}

		public function lista_vacantes() {
			if (isset($_SESSION['user_perfil'])) {
				$userView = strtolower($_SESSION['user_perfil']);

				$data = ['page' => 'lista_vacantes'];
				
				$this->view($userView . '/lista_vacantes', $data);
			} else {
				$this->view('pages/login');
			}
		}

	}
?>