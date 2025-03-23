<?php
  $a = 10;
  $b = "10";

  echo "Igualdade = ".($a == $b)."<br>"; // 1
  echo "Idêntico = ".($a === $b)."<br>"; //
  echo "Não igual = ".($a != $b)."<br>"; //
  echo "Não Idêntico = ".($a !== $b)."<br>"; // 1

  $c = ($a != $b);

  var_dump($c); // bool(false)
?>
