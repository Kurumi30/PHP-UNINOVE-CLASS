<?php
	session_start();

	// Jeito do professor
	if (count($_SESSION) == 0) {
		// echo "Sessão vazia";

		header("Location: /pg10_01.php");
		
		exit();
	}

	// Jeito do Fernando
	// if (!isset($_SESSION['user']) && !isset($_SESSION['email'])) {
	// 	header("Location: /pg10_01.php");
	
	// 	// exit();
	// }

	echo "Nome: ".$_SESSION["user"]."<br>";
	echo "Email: ".$_SESSION["email"]."<br>";

	echo "<pre>";print_r($_SESSION);echo "</pre>";
?>

<br><a href="pg10_01.php">PG10_01</a>
