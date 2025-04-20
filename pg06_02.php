<?php
  $semaforo = "amarelo";

  if ($semaforo == "verde") {
    echo "Passe!";
  } elseif ($semaforo == "vermelho") {
    echo "Pare!";
  } else if ($semaforo == "amarelo") {
    echo "Atenção!";
  } else {
    echo "Erro por desconhecido!";
  }
?>
