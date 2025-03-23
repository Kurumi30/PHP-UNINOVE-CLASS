<?php
  $a = 50;
  $b = 120;
  $c = ($a <= $b);
  $d = !($a <= $b);

  var_dump($c); // bool(true)

  echo "<hr>";

  var_dump($d); // bool(false)
?>
