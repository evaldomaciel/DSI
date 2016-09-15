<?php
//recuperar o parametro
$email = trim($_GET["email"]);
//verificar se realmente foi recuperado um parametro
if(empty($email)){
  header("Location:listar.php?msg=Selecione um aluno!");
  exit();
}
//conectar ao servidor de banco
mysql_connect("localhost", "root", "") or die(mysql_error());
//selecionar o banco de dados
mysql_select_db("escola") or die(mysql_error());
//criar comando sql
$sql = "DELETE FROM alunos WHERE email='$email'";
//executar comando sql
mysql_query($sql) or die(mysql_error());
mysql_close();
//redirecionar para listar
header("Location:listar.php?msg=Registro excluido com sucesso!");
exit();
?>

