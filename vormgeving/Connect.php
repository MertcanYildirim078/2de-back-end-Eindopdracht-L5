<?php
	function connect() {
		$servername = "localhost";
		$dbname = "databank_php";
		$username = "root";
		$password = "";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}

		return $conn;
	}
		
		function getStuffAndConnect($id) {
			$connection = connect();
			$query = "SELECT * FROM characters where id = $id";

			$statement = $connection->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();

			return $result;
			
		}
?>