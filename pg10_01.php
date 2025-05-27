<?php
	session_start();

	$_SESSION["user"] =  "Fernando";
	$_SESSION["email"] = "fernando@email.com";

	echo "Nome: ".$_SESSION["user"]."<br>";
	echo "Email: ".$_SESSION["email"]."<br>";
?>

<br><a href="pg10_02.php">PG10_02</a>
