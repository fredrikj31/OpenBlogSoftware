<?php

	class Database {
		private $dbHost;
		private $dbUser;
		private $dbPass;
		private $dbName;

		public function connect() {
			$this->dbHost = "localhost";
			$this->dbUser = "root";
			$this->dbPass = "";
			$this->dbName = "OpenBlogSoftware";

			$conn = new mysql($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);

			return $conn;
		}
	}

?>