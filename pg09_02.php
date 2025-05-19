<?php
	$nomes = ["Fulano","Beltrano","Sicrano", "Astrogildo", "Bete"];
	$total = count($nomes);

	echo "Foram encontradas $total nomes no array.<br>";
	echo "Primeiro valor do array: ".$nomes[0]."<br>";
	echo "Último valor do array: ".$nomes[count($nomes)-1];
	echo "<hr>";

	for($i = 0; $i < count($nomes); $i++){
		echo $nomes[$i]."<br>";
	}

	echo "<hr>";

	$uf=["SP","RJ","ES","MG"];

	echo "<pre>";print_r($uf);echo "</pre>";

	array_push($uf, "TO");
	array_push($uf, "BA");
	array_push($uf, "RN");
	array_push($uf, "PR");

	array_pop($uf);

	echo "<pre>";print_r($uf);echo "</pre>";

	sort($uf);

	echo "<pre>";print_r($uf);echo "</pre>";
?>
