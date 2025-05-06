<?php
	$a = 10;
	$a = 9;
	$a = 5.5;
	$a = "segunda";

	// echo $a."<br>";

			# 0   1  2     3
	$b = [10, 9, 5.5, "segunda"];

	echo $b[0]."<br>";
	echo $b[1]."<br>";
	echo $b[2]."<br>";
	echo $b[3]."<br>";

	$b[0]++;
	$b[1] %= 2;
	$b[2] += 0.5;
	$b[3] .= " feira";

	echo "<pre>";print_r($b);echo "</pre>";

	$notas = [
		"Fernando" => 8.9,
		"Marin" => 7,
		"Kurumi" => 4.5
	];

	echo "Fernando tirou nota ".$notas["Fernando"];
	echo "<hr>";

	$n = [
		[10, 20, 30],
		[40, 50, 60],
		[70, 80, 90]
	];

	 // echo print_r($n);
	echo $n[2][0]."<br>";
	echo $n[0][2]."<br>";
	echo $n[1][1]."<br>";

	echo "<hr>";

	$aluno = [
		["nome" => "Fernando", "nota" => 9],
		["nome" => "Marin", "nota" => 7],
		["nome" => "Kurumi", "nota" => 4.5]
	];

	echo $aluno[1]["nome"]." tirou nota ".$aluno[1]["nota"]."<br>";

	echo "<hr>";

	$uf = ["SP", "RJ", "MG", "ES", "TO", "BA", "SE", "AM", "PB"];

	echo count($uf)."<br>";

	sort($uf);

	for ($i = 0; $i < count($uf); $i++) {
		echo $uf[$i]."<br>";
	}

	echo "<hr>";

	$mercado = [
		"fruta" => "caju",
		"verdura" => "alface",
		"bebida" => "leite"
	];

	foreach ($mercado as $pos => $valor) {
		echo "$pos: $valor <br>";
	}
?>

<!-- <pre>
teste de           escrita
outro teste        escrita
</pre> -->
