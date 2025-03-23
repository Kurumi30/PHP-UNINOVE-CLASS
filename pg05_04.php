<?php
  $a = 50;
  $b = 120;
  $c = 200;

  $e = (($a <= $b) && !($a >= $c));

  var_dump($e);

  $f = (($a <= $b) || ($a >= $c));

  var_dump($f);

  $g = (($a <= $b) xor !($c <= $a));

  var_dump($g);
?>
