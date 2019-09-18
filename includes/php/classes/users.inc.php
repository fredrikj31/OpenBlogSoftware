<?php

	include_once 'database.inc.php';

	class Users {

		public function login() {
			

			$sql = "SELECT * FROM `Users` WHERE `Username`='$Username' AND `Password`='$HashPassword'";
		}

		private function hashPassword($Password) {
			hash('sha512', $Password);
		}

	}

?>