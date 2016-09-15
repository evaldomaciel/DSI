<?php
if(empty($_COOKIE["login"])){
  header("Location:login.php?erro=Usuario não logado!");
  exit();
}
?>
Bem vindo <?=$_COOKIE["nome"]?>
