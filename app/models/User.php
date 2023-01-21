<?php 
	class User {
		private $db;

		public function __construct() {
			$this->db = new Database;
		}

		public function login($email, $password) {
			$this->db->query('SELECT * FROM usuarios u INNER JOIN perfiles p ON u.perfil_id = p.id WHERE u.email = :email');
			$this->db->bind(':email', $email);

			$result = $this->db->getSingle();
			$hashed_password = $result->password;

			if ($password == $hashed_password) {
				return $result;
			} else {
				return false;
			}
		}

		public function findUserByEmail($email) {
			$this->db->query('SELECT * FROM usuarios WHERE email = :email');
			$this->db->bind(':email', $email);
			$this->db->getSingle();

			if ($this->db->rows() > 0) {
				return true;
			} else {
				return false;
			}
		}

		public function accessLog($email, $password, $status, $ip) {
			$this->db->query('INSERT INTO historial_login (email, password, status, ip) VALUES (:email, :password, :status, :ip)');
			$this->db->bind(':email', $email);
			$this->db->bind(':password', $password);
			$this->db->bind(':status', $status);
			$this->db->bind(':ip', $ip);
			$this->db->execute();
		}

		public function saveToken($email, $token) {
			$this->db->query('INSERT INTO usuarios_token (email, token) VALUES (:email, :token)');
			$this->db->bind(':email', $email);
			$this->db->bind(':token', $token);
			$this->db->execute();
		}


	}
?>