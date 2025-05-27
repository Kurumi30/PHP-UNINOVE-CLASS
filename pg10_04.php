<?php
	session_start();
	
	// Destruindo a sessão
	session_destroy();
	
	// Limpando os dados da variável $_SESSION
	$_SESSION = array();
	
	echo 'Sessão destruída.';
?>

<br><a href="pg10_02.php">PG10_02</a>
