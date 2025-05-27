<?php
	session_start();
	
	// Removendo o dado 'usuario'
	unset($_SESSION['usuario']);

	echo "<pre>";print_r($_SESSION);echo "</pre>"; 

	// Verificando se foi removido
	if (!isset($_SESSION['usuario'])) {
		echo 'O usuário foi removido da sessão.';
	}
?>
