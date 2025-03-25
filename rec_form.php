<?php
  echo "<h1>Recebe Form</h1>";
  echo "Count campos: ".count($_POST)."<br>"; 

  if (count($_POST) == 0) exit;

  $login = $_POST["login"];
  $password = $_POST["password"];

  $cript = md5($password, false);

  echo "Login: $login <br>";
  echo "Senha: $cript <br>";
?>