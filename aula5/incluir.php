<?php
if(!empty($_GET["erro"])){
?>
<script language="JavaScript">
        alert('<?=$_GET["erro"]?>');
</script>
<?php
}
?>
<form method="POST" action="incluir_action.php">
<table>
    <tr>
         <td>E-Mail</td>
         <td><input type="text" name="email" /></td>
    </tr>
    <tr>
         <td>Nome</td>
         <td><input type="text" name="nome" /></td>
    </tr>
    <tr>
         <td>Senha</td>
         <td><input type="password" name="senha" /></td>
    </tr>
    <tr>
       <td><input type="submit" value="Incluir" /></td>
    </tr>
</table>
</form>


Cidade 
