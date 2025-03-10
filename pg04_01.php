<?php
  $_var = false;

  echo $_var."<br>";

  var_dump($_var);

  echo "<hr>";

  $nome = "Fernando";
  $nota = 7.8;
  $nota = (int)$nota; # Buscando a parte inteira do número

  echo $nome." você tirou ". $nota."<br>";
  echo "$nome você tirou $nota<br>";

  echo "<hr>";

  define("PI", 3.14);

  echo "PI = ".PI;
?>
