<?php
if(empty($_COOKIE["login"])){
  header("Location:login.php?erro=Usuario n�o logado!");
  exit();
}
?>
Bem vindo <?=$_COOKIE["nome"]?>
