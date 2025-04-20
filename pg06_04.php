<?php
  $senha = '123';
  
  // Usando MD5 (INSEGURO)
  $hash_md5 = md5($senha);
  echo "MD5: " . $hash_md5 . "\n";

  if (md5("123") == $hash_md5) {
    echo "Senha ok!";
  } else {
    echo "Senha incorreta!";
  }

  echo "<hr>";
  
  // Hash armazenado no banco de dados
  $hash_armazenado = password_hash($senha, PASSWORD_DEFAULT);
  
  // Usuário digita a senha
  $senha_digitada = '123';
  
  // Verifica se a senha está correta
  if (password_verify($senha_digitada, $hash_armazenado)) {
      echo 'Senha correta!';
  } else {
      echo 'Senha incorreta!';
  }
?>
