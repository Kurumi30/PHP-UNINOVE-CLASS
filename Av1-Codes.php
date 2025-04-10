<?php
  $a = 10;
  $b = 20;
  $c = 30;

  $d = ($a <= $b) && ($c <= 30);
  $e = ($b <= $a) || ($c <= 10);

  $f = ($a == "10") ? "OK" : "Não OK";
  $g = ($b == 20) ? "OK" : "Não OK";

  // I - $d = true
  // II - $e = false
  // III - $f = Não OK
  // IV - $g = OK

  echo "I - $d <br>"; // true
  echo "II - $e <br>"; // false
  echo "III - $f <br>"; // Não OK
  echo "IV - $g <br>"; // OK
?>

<?php
  $a = 5;
  $b = 2;
  $c = $a + $b;
  $b = 3;
  $d = $c % $b ;
  $a += $b;

  // echo "a = $a <br>"; // 8
  echo "c = $c <br>"; // 7
  echo "b = $b <br>"; // 3
  echo "d = $d <br>"; // 1
?>

<?php
  $a = 10;
  $b = 20;
  $c = 30;
  $d = 40;

  $e = ($a < $b) && ($c < $d);
  $f = !($a < $b) || !($c < $d);
  $g = !($a < $b) && ($c < $d);
  $h = !($a < $b) || ($c < $d);

  echo "e = $e <br>"; // true
  echo "f = $f <br>"; // false
  echo "g = $g <br>"; // false
  echo "h = $h <br>"; // true
?>

<?php
  $a = 5;
  $b = 2;
  $c = $a + $b; // 7

  $b += 2;

  $d = $c % $b; // 1
  $a += $b; // 7

  // 9 4 7 3
  echo "$a $b $c $d";

  echo "<hr>"
?>

<?php
  $num = 10;
  $res = ($num % 2 == 0) ? "par" : "ímpar";

  echo "$num é $res";
?>

< ?php
  $a = " dia " ;
  $b = " de " ;
  $c = " atividade " ;
  $d = " hoje " ;

  $x = $d . $a . $b . $c ;

  echo $x;
?>

<?php
  $a = 4;
  $b = 7;
  $a += $b; // 11

  $b = $b %= 4;

  echo "a = $a, b = $b";
?>

<?php
  $a = 10;
  $b = 20;
  $c = 30;
  $d = 40;

  $a += 50; # A

  $e = ($a < $b) && ($c < $d);
  $f = !($a < $b) || !($c < $d);
  $g = !($a < $b) && ($c < $d);
  $h = !($a < $b) || ($c < $d);

  // echo "e = $e <br>"; // true
  echo "f = $f <br>"; // false
  echo "g = $g <br>"; // false
  echo "h = $h <br>"; // true
?>

<?php
  $a = 10;
  $b = 20;
  $c = 30;
  $d = 40;

  $e = ($a < $b) && ($c < $d);
  $f = !($a < $b) || !($c < $d);
  $g = !($a < $b) && ($c < $d);
  $h = !($a < $b) || ($c < $d);

  echo "e = $e <br>"; // true
  echo "f = $f <br>"; // false
  echo "g = $g <br>"; // false
  echo "h = $h <br>"; // true
?>

<?php
  $a = 10;
  $b = 20;
  $c = 30;
  $d = 40;

  $c += 50; # C

  $e = ($a < $b) && ($c < $d);
  $f = !($a < $b) || !($c < $d);
  $g = !($a < $b) && ($c < $d);
  $h = !($a < $b) || ($c < $d);

  echo "e = $e <br>"; // true
  echo "g = $g <br>"; // false
  echo "h = $h <br>"; // true
?>

<?php
  $y = 2;
  $z = 3;

  $x = $y + $z % $y;

  echo "x = $x";
?>

<?php
  $y = 2;
  $z = 3;

  $x = ($y + $z) % $y;

  echo "x = $x";
?>

<?php
  $a = " dia ";
  $b = " de ";
  $c = " atividade ";
  $d = " hoje ";

  $x = $c . $d . $b . $a;

  echo $x;
?>

<?php
  $a = 10;
  $b = 20;
  $c = 30;

  $d = ($a <= $b) && ($c <= 30);
  $e = ($b <= $a) || ($c <= 10);
  $f = ($a === "10") ? "OK" : "Não OK";
  $g = ($b === 20) ? "OK" : "Não OK";

  echo "I - $d <br>"; // true
  echo "II - $e <br>"; // false
  echo "III - $f <br>"; // Nao OK
  echo "IV - $g <br>"; // OK
?>
