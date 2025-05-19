<?php
echo "Substitua a linha tracejada para que a saída seja:

bebida
limpeza
carne: <br>";
$mercado=[
		"bebida" => "refri",
		"limpeza" => "detergente",
		"carne"=>"picanha"
];

foreach ($mercado as $ind=>$valor) echo "$ind <br>"; ##

echo "<hr>";

echo "Selecione a alternativa correta para criar uma variável em PHP com nome login, para resgatar o dado digitado em um campo <input>, observando o aspecto de segurança, evitando o que dado tenha sido enviado e mostrado na barra de URL. <br>";
# Ignore a mensagem de erro
$login=$_POST["login"]; ##

echo "<hr>";

echo "Selecione a alternativa correta para gerar a seguinte saída para o navegador:  

0 3 6 9 <br>";
for($i=0;$i<11;$i+=3){echo "$i ";} ##

echo "<hr>";

echo "Selecione a alternativa correta com a criação da tag <form> para que os dados sejam encaminhados para o arquivo 'cad.php', de forma segura sem que os dados apareçam na barra de url. <br>";
# Alternativa correta:
# <form method="post" action="cad.php"> ##

echo "<hr>";

echo '<?php
$estudante =
[
    ["TBD","Fulano",123456789],
    ["TRC","Beltrano",234567890],
    ["TADS","Sicrano",345678901,7.5],
    ["CC","Belarmina",123443211],
    ["SI","João",123412345],
    ["TJD","Abelardo",432143211]
];

?>

Selecione a alternativa correta para que a saída seja:

Estudante: Abelardo<br>';
$estudante =
[
		["TBD","Fulano",123456789],
		["TRC","Beltrano",234567890],
		["TADS","Sicrano",345678901,7.5],
		["CC","Belarmina",123443211],
		["SI","João",123412345],
		["TJD","Abelardo",432143211]
];

echo $estudante[5][1]."<br>"; ##

echo "<hr>";

echo "Selecione a alternativa correta para gerar a seguinte saída para o navegador:  

5 4 3 2<br>";
for($i=5;$i>1;$i--){echo "$i ";} ##

echo "<hr>";

echo 'Analise o código e selecione a alternativa correta para que a saída seja:

Adamastor

$nome=["Abelardo","Josefa","Camile","Josualdo","Adamastor"];<br>';
$nome=["Abelardo","Josefa","Camile","Josualdo","Adamastor"];

echo $nome[4]; ##

echo "<hr>";

echo 'Analise o código a seguir:

<?php
$mercado=[
    "bebida" => "refri",
    "limpeza" => "detergente",
    "carne"=>"picanha"
];
//--------

?>

Substitua a linha tracejada para que a saída seja:

refri
detergente
picanha<br>';
$mercado=[
		"bebida" => "refri",
		"limpeza" => "detergente",
		"carne"=>"picanha"
];

foreach ($mercado as $ind=>$valor) echo "$valor <br>"; ##

echo "<hr>";

echo 'Selecione a alternativa correta para gerar a seguinte saída para o navegador:  

0 2 4 6 8 10 12<br>';
for($i=0;$i<=12;$i+=2){echo "$i ";} ##

echo "<hr>";

echo 'Analise o código abaixo:

<?php
$estudante =
[
    ["TBD","Fulano",123456789],
    ["TRC","Beltrano",234567890],
    ["TADS","Sicrano",345678901,7.5],
    ["CC","Belarmina",123443211],
    ["SI","João",123412345],
    ["TJD","Abelardo",432143211]
];

?>

Selecione a alternativa correta para que a saída seja:

Estudante: Fulano<br>';
$estudante =
[
		["TBD","Fulano",123456789],
		["TRC","Beltrano",234567890],
		["TADS","Sicrano",345678901,7.5],
		["CC","Belarmina",123443211],
		["SI","João",123412345],
		["TJD","Abelardo",432143211]
];

echo "Estudante: ".$estudante[0][1]; ##

echo "<hr>";

echo 'Analise o código a seguir:

<?php
$naval=[
    ["água","submarino","água"],
    ["avião","água","água","ilha"],
    ["água","água","barco"],
    ["água","água","avião"],
    ["água","submarino","água"],
    ["veleiro","água","água"],
    ["água","água","barco"],
];

//----

?>

Substitua a linha tracejada para que a saída seja:

avião<br>';
$naval=[
		["água","submarino","água"],
		["avião","água","água","ilha"],
		["água","água","barco"],
		["água","água","avião"],
		["água","submarino","água"],
		["veleiro","água","água"],
		["água","água","barco"],
];

echo $naval[3][2]; ##

echo "<hr>";

echo 'Analise o código abaixo:

<?php
$estudante =
[
    ["TBD","Fulano",123456789],
    ["TRC","Beltrano",234567890],
    ["TADS","Sicrano",345678901,7.5],
    ["CC","Belarmina",123443211],
    ["SI","João",123412345],
    ["TJD","Abelardo",432143211]
];

?>

Selecione a alternativa correta para que a saída seja:

Estudante: João<br>';
$estudante =
[
		["TBD","Fulano",123456789],
		["TRC","Beltrano",234567890],
		["TADS","Sicrano",345678901,7.5],
		["CC","Belarmina",123443211],
		["SI","João",123412345],
		["TJD","Abelardo",432143211]
];

echo "Estudante: ".$estudante[4][1]; ##

echo "<hr>";

echo 'Analise o código e selecione a alternativa correta para que a saída seja:

Josualdo

<?php
$nome=["Abelardo","Josefa","Camile","Josualdo","Adamastor"];
?><br>';
$nome=["Abelardo","Josefa","Camile","Josualdo","Adamastor"];

echo $nome[3]; ##

echo "<hr>";

echo 'Analise o código e selecione a alternativa correta para que a saída seja:

Abelardo


<?php
$nome=["Abelardo","Josefa","Camile","Josualdo","Adamastor"];


?><br>';
$nome=["Abelardo","Josefa","Camile","Josualdo","Adamastor"];

echo $nome[0]; ##

echo "<hr>";

echo 'Analise o código:

<?php
$a=10;$b=20;$c=30;$d=40;
$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);
?>

Selecione a alternativa contendo as variáveis com valor = false
*<br>';
$a=10;$b=20;$c=30;$d=40;
$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);

echo "e: $e <br>";
echo "f: $f <br>";
echo "g: $g <br>";
echo "h: $h <br>";

# $f, $g ##

echo "<hr>";

echo 'Analise o código a seguir:

<?php
$naval=[
    ["água","submarino","água"],
    ["avião","água","água","ilha"],
    ["água","água","barco"],
    ["água","água","avião"],
    ["água","submarino","água"],
    ["veleiro","água","água"],
    ["água","água","barco"],
];

//----

?>

Substitua a linha tracejada para que a saída seja:

barco<br>';
$naval=[
		["água","submarino","água"],
		["avião","água","água","ilha"],
		["água","água","barco"],
		["água","água","avião"],
		["água","submarino","água"],
		["veleiro","água","água"],
		["água","água","barco"],
];

echo $naval[6][2]; ##

echo "<hr>";

echo 'Substitua a linha tracejada do código do script.js abaixo para que a saída seja:

0 1
0 2
1 1
1 2
2 1
2 2

<?php
------------------------- {
  for($j=1;$j<3;$j++){
    echo "$i $j <br>";
  }
}
?><br>';
for($i=0;$i<3;$i++) {
	for($j=1;$j<3;$j++){
		echo "$i $j <br>";
	}
}

# for($i=0;$i<3;$i++) ##

echo "<hr>";

echo 'Analise o código:

<?php
$num=10;
---------{
	echo "$num é par";
}
else{
	echo "$num é ímpar";
}
?>

Selecione a alternativa para substituir a linha tracejada com o código para verificar se o número é par ou ímpar, mostrando como saída:

10 é par<br>';
$num=10;
if($num%2==0) { ##
	echo "$num é par";
}
else{
	echo "$num é ímpar";
}

echo "<hr>";

echo 'Analise o código:

<?
$a=10;$b=20;$c=30;
$d=($a<=$b)&&($c<=30);
$e=($b<=$a)||($c<=10);
$f=($a==="10")?"OK":"Não OK";
$g=($b===20)?"OK":"Não OK";
?>

Leia as afirmações:

I - $d = true
II - $e = false
III - $f = Não OK
IV - $g = OK<br>';
$a=10;$b=20;$c=30;
$d=($a<=$b)&&($c<=30);
$e=($b<=$a)||($c<=10);
$f=($a==="10")?"OK":"Não OK";
$g=($b===20)?"OK":"Não OK";

echo "d: $d <br>";
echo "e: $e <br>";
echo "f: $f <br>";
echo "g: $g <br>";

# Todas as afirmações estão corretas ##

echo "<hr>";

echo 'Analise o código a seguir:

<?php
$naval=[
    ["água","submarino","água"],
    ["avião","água","água","ilha"],
    ["água","água","barco"],
    ["água","água","avião"],
    ["água","submarino","água"],
    ["veleiro","água","água"],
    ["água","água","barco"],
];

//----

?>

Substitua a linha tracejada para que a saída seja:

ilha<br>';
$naval=[
		["água","submarino","água"],
		["avião","água","água","ilha"],
		["água","água","barco"],
		["água","água","avião"],
		["água","submarino","água"],
		["veleiro","água","água"],
		["água","água","barco"],
];

echo $naval[1][3]; ##
?>