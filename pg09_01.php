<?php
	$color = ["red", "green", "blue", "black", "white"];

	foreach ($color as $x => $y) {
		// echo "Posição: $x, Valor: $y <br>";
		echo "$y <br>";
	}

	echo "<hr>";

	$pessoa = [
		"nome" => "João Maria",
		"idade" => 25,
		"nota" => 7.8
	];

	foreach ($pessoa as $p => $valor) echo "$p: $valor <br>";

	echo "<hr>";

	$num = [
		[10, 20, 30],
		[40, 50, 60],
		[70, 80, 90]
	];

	echo $num[0][2]."<br>";
	echo $num[2][0]."<br>";
	echo $num[1][1]."<br>";

	// for ($i = 0; $i < count($num); $i++) {
	// 	for ($j = 0; $j < count($num[$i]); $j++) {
	// 		echo $num[$i][$j]." ";
	// 	}
	// }

	foreach ($num as $linha) {
		// print_r($linha);

		foreach ($linha as $coluna) {
			echo $coluna." ";
		}
	}
?>
