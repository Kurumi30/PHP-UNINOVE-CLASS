<?php
	echo "<h2>While</h2>";

	$i = 0;

	while ($i < 5) {
		echo "$i ";
		
		$i++;
	}

	echo "<hr>";

	/*
			1) Valor inicial?
			R: O valor inicial é 0
			2) Condição?
			R: A condição é enquanto $i for menor que 5
			3) Contador?
			R: O contador é i++, incrementando 1 a cada looping
			4) Quantas vezes o looping foi executado?
			R: Foi executado 5 vezes
			5) Qual o valor que tornou a condição como falsa?
			R: Quando o valor se tornou 5, assim ele para o looping.
	*/

	// 10, 11, 12, 13
	// 10 contador começa
	// $ < 14 $i <= 14
	// $i++
	// 14 o contador para

	// 4, 3, 2, 1, 0
	$c = 4;

 	while ($c >= 0) {
		echo "$c ";

		$c--;
	}

	echo "<hr>";

	// 1) 4
	// 2) $i >= 0 $I > -1
	// 3) i--
	// 4) 5
	// 5) -1

	// 0, 2, 4, 6, 8, 10
	// 1) 0
	// 2) $i <= 10
	// 3) i += 2
	// 4) 6 foi executado
	// 5) 12
	$x = 0;

	while ($x <= 10) {
		echo "$x ";

		$x += 2;
		// POG: $x++;$x++;
	}

	echo "<hr>";
	echo "<h2>Do While</h2>";

	// O do-while executa pelo menos uma vez o looping pra depois checar a condição
	$i = 0;

	do {
		echo "$i ";
		
		$i++;
	} while ($i < 5);

	echo "<hr>";
	echo "<h2>For</h2>";

	for ($i = 0; $i < 5; $i++) echo "$i ";

	echo "<hr>";
	echo "<h2>For aninhada</h2>";

	for ($i = 0; $i < 2; $i++) { // ext # ponteiro do minuto
		for ($j = 0; $j < 3; $j++) { // int # ponteiro do segundo
			echo "$i $j <br>";
		}
	}

	/*
	$i $J
	0 0
	0 1
	0 2
	1 0
	1 1
	1 2
	*/

	echo "<hr>";

	/*
	3 2
	3 3
	3 4
	4 2
	4 3
	4 4
	*/

	for ($i = 3; $i < 5; $i++) {
		for ($j = 2; $j < 5; $j++) {
			echo "$i $j <br>";
		}
	}

	echo "<hr>";

	$tabuada = 2;
	echo "Tabuada - $tabuada <br>";
	for ($i = 0; $i <= 10; $i++) {
		echo "$tabuada x $i = ".($tabuada * $i)."<br>";
	}
?>
