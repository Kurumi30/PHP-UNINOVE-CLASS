<?php
	// Cria a constante DATABASE com o valor database.sqlite3
	define("DATABASE", "database.sqlite3");

	try {
		// Conecta ao banco de dados, caso exista o arquivo, caso não, cria um novo (definido na constante DATABASE)
		$pdo = new PDO('sqlite:'.DATABASE);

		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e -> getMessage();

		exit;
	}

	// echo "conectado"; // comentar esta linha após testar
?>
