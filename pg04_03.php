<?php
  $a = 10;
  $b = 2;
  $a += $b; // $a = $a + $b
  $b -= 5; // $b = $b - 5

  echo "a = ".$a;
  echo "<br>b = ".$b;

  $c = 11;
  $d = 6;
  $c %= $d; // $c = $c % $d
  $d += $a; // $d = $d + $a

  echo "<br>c = ".$c;
  echo "<br>d = ".$d;

  echo "<hr>";

  echo '($a += $b) $a = $a + $b => '.$a.'<br>';
  echo '($b -= 5) $b = $b - 5 => '.$b.'<br>';
  echo '($c %= $d) $c = $c % $d => '.$c.'<br>';
  echo '($d += $a) $d = $d + $a => '.$d.'<br>';

  echo "<hr>";

  $mail = "outlook";
  $nome = "fernando";
  $nome .= "zhu"; // adiciona uma string ao final da outra
  $nome .= "@$mail.com";

  echo "<br>".$nome;
?>
