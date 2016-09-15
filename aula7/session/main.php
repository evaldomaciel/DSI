<?php
session_start();
if(empty($_SESSION["login"])){
  header("Location:login.php?erro=Usuario não logado!");
  exit();
}
?>
Bem vindo <?=$_SESSION["nome"]?>
