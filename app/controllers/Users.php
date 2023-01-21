<?php 
	class Users extends Controller {

		public function __construct() {
			$this->model = $this->model('User');
		}

		// Initial view 
		public function index() {
			if (isset($_SESSION['user_perfil'])) {
				$userView = strtolower($_SESSION['user_perfil']);
				$this->view($userView . '/index');
			} else {
				$ip = $this->userIp();
				$data = ['ip' => $ip];
				$this->view('pages/login', $data);
			}
		}

		public function forgot() {
			$this->view('pages/forgot');
		}

		public function error() {
			$this->view('pages/error');
		}

		public function pending() {
			$this->view('pages/pending');
		}

		public function login() {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

				$form = [
					'email' => trim($_POST['email']),
					'pass' => trim($_POST['password']),
					'email_err' => '',
					'pass_err' => ''
				];

				if (empty($form['email'])) {
					$form['email_err'] = 'Ingrese un email válido.';
				}

				if (empty($form['pass'])) {
					$form['pass_err'] = 'Ingrese la contraseña.';
				}

				if ($this->model->findUserByEmail($form['email'])) {
					// if user is found, 'email_err' still empty
					$form['email_err'] = '';
				} else {
					$form['email_err'] = 'Usuario no registrado.';
				}

				if (empty($form['email_err']) && empty($form['pass_err'])) {
					$userLoggedIn = $this->model->login($form['email'], $form['pass']);

					if ($userLoggedIn) {
						$userActive = $userLoggedIn->estado;
					
						if ($userActive == 'Activo') {
							$email = $userLoggedIn->email;
							$password = $userLoggedIn->password;
							$status = 'Exitoso';
							$ip = $this->userIp();

							$this->createSession($userLoggedIn);
							$this->model->accessLog($email, $password, $status, $ip);
						} else {
							$email = $form['email'];
							$password = $form['pass'];
							$status = 'Fallido';
							$ip = $this->userIp();

							$this->model->accessLog($email, $password, $status, $ip);

							// user exists in DB, status = inactive
							$ip = $this->userIp();
							$data = [
								'ip' => $ip,
								'error' => "El usuario no esta activo."
							];
							$this->view('pages/login', $data);
						}
					} else {
						$email = $form['email'];
						$password = $form['pass'];
						$status = 'Fallido';
						$ip = $this->userIp();

						$this->model->accessLog($email, $password, $status, $ip);

						// user exists in DB, password don't match
						$data = [
							'ip' => $ip,
							'error' => "La contraseña es incorrecta."
						];
						$this->view('pages/login', $data);
					}
				} else {
					$email = $form['email'];
					$password = $form['pass'];
					$status = 'Fallido';
					$ip = $this->userIp();

					$this->model->accessLog($email, $password, $status, $ip);
						
					// if user not found on DB, reload index page
					$data = [
						'ip' => $ip,
						'error' => "Usuario no registrado."
					];
					$this->view('pages/login', $data);
				}

			} else {

				$data = [
					'email' => '',
					'pass' => '',
					'email_err' => '',
					'pass_err' => ''
				];

				$this->view('pages/login');
			}
		}

		public function forgotPassword() {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

				$form = [
					'email' => trim($_POST['email']),
					'email_err' => ''
				];

				if (empty($form['email'])) {
					$form['email_err'] = 'Ingrese un correo.';
				}

				$userEmail = $this->model->findUserByEmail($form['email']);

				if (empty($form['email_err'])) {
					if ($userEmail) {
						$token = bin2hex(random_bytes(50));

						$this->model->saveToken($form['email'], $token);
						$msg = "Hi there, click on this <a href='http://myweb/pages/createPassword/token=' . $token .'>link</a> to reset your password.'";
						// send Mail to user email 

						// load pending page
						$data = [
							'email' => $_POST['email']
						];
						$this->view('pages/pending', $data);

					} else {
						// if user not found on DB, reload forgot page
						$data = [
							'error' => "Usuario no registrado."
						];
						$this->view('pages/forgot', $data);
					}
				} else {
					// if user not found on DB, reload forgot page
					$data = [
						'error' => "Ingrese un correo válido."
					];
					$this->view('pages/forgot', $data);
				}

			} else {
				$this->view('pages/forgot');
			}
		}

		public function userIp() {
			switch(true) {
				case(!empty($_SERVER['HTTP_X_REAL_IP'])):
					return $_SERVER['HTTP_X_REAL_IP'];
					break;
				case(!empty($_SERVER['HTTP_CLIENT_IP'])):
					return $_SERVER['HTTP_CLIENT_IP'];
					break;
				case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
					return $_SERVER['HTTP_X_FORWARDED_FOR'];
					break;
				default:
					return $_SERVER['REMOTE_ADDR'];
			}
		}

		public function createSession($user) {
			$_SESSION['user_perfil'] = $user->perfil;
			$_SESSION['user_nombre'] = $user->nombre;
			$_SESSION['user_telefono'] = $user->telefono;
			$_SESSION['user_email'] = $user->email;
			$_SESSION['user_img'] = $user->img;
			
			if ($user->perfil == 'Administrador') {
				redirect('administrador/index');
			}

			if ($user->perfil == 'Coordinador') {
				redirect('coordinadores/index');
			}

			if ($user->perfil == 'Reclutador') {
				redirect('reclutadores/index');
			}

			if ($user->perfil == 'Vendedor') {
				redirect('vendedores/index');
			}

		}

		public function logout() {
			unset($_SESSION['user_perfil']);
			unset($_SESSION['user_nombre']);
			unset($_SESSION['user_telefono']);
			unset($_SESSION['user_email']);
			unset($_SESSION['user_img']);
			session_destroy();
			redirect('users/index');
		}
		
	}
?>