<?php
//conexão com o banco
include("constante/config.php");
include("include/conexao.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$sql = "SELECT email, nome, senha FROM alunos WHERE email='$email'
AND senha='$senha'";
$retorno = mysql_query($sql)
    or header("Location:login.php?erro=".mysql_error());
$aluno = mysql_fetch_array($retorno);
//verificar o usuario.
if(mysql_num_rows($retorno) > 0){
  //registra o usuario
  setcookie("login", $email, time()+360);
  setcookie("nome", $aluno["nome"], time()+360);
  header("Location:main.php");
  exit();
}else{
  header("Location:login.php?erro=usuario não encontrado");
  exit();
}












?>
