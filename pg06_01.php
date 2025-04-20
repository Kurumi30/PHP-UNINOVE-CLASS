<?php
  $idade = 17;
  
  if ($idade >= 18) {
    echo "Você é maior de idade.";
  } else {
    echo "Você é menor de idade.";
  }

  echo "<hr>";

  echo $idade >= 18 ? "Você é maior de idade." : "Você é menor de idade.";
?>
