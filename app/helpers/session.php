<?php 
	session_start();

	function userLoggedIn() {
		if (isset($_SESSION['user_id'])) {
			return true;
		} else {
			return false;
		}
	}

?>