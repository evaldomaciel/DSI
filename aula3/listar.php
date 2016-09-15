<?=$_GET["msg"]?>
<?php
//conectar ao servidor de banco de dados
mysql_connect("localhost", "root", "") or die(mysql_error());
//selecionar o banco de dados
mysql_select_db("escola");
//executar o comando sql select
$sql = "SELECT email, nome, senha FROM ALUNOS ";
$resultado = mysql_query($sql) or die(mysql_error());
//fechar a conexão com o servidor de banco de dados
mysql_close();
//formatar a saida pra tela
?>
<a href="incluir.php">Incluir</a>
<table border="1">
    <tr>
        <td>E-Mail</td>
        <td>Nome</td>
        <td colspan="2">Senha</td>
    </tr>
    
<?php
while($dados = mysql_fetch_array($resultado)){
?>
    <tr>
        <td><?=$dados["email"]?></td>
        <td><?=$dados["nome"]?></td>
        <td><?=$dados["senha"]?></td>
        <td>
            <a href="deletar.php?email=<?=$dados["email"]?>">
                Del.
            </a>
        </td>
        <td><a href="editar.php">Ed.</a></td>
    </tr>
<?php
}
?>
</table>
