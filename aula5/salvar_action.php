<?php
//recupera os registro
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//verificar os registros
if(empty($nome)){
  $erro .= "NOME NAO INFORMADO!";
}
if(empty($email)){
  $erro .= "E-MAIL NAO INFORMADO!";
}
if(empty($senha)){
  $erro .= "SENHA NAO INFORMADA!";
}
//caso registro esteja ok
if(empty($erro)){
    //inclui dado no banco
    //conectar ao banco
    mysql_connect("localhost", "root", "")
        or die("Erro ao conectar ao banco:".mysql_error());
    //selecionar o database
    mysql_select_db("escola")
        or die("Erro ao selecionar o database: ".mysql_error());
        
    //executar comando
    $sql = "UPDATE alunos SET nome='$nome', senha='$senha' WHERE email='$email'";
    mysql_query($sql)
        or die("Erro no SQL: ".mysql_error());

    mysql_close();
    header("Location:listar.php");
    exit();
}else{
    //caso registro errado
    //redireciona para incluir.php
    header("Location:editar.php?erro=$erro&email=$email");
    exit();

}

?>
