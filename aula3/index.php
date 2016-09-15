<?php

header("Content-Type: text/html; Charset=UTF-8");

echo @$_GET["erro"];

?>
<form method="POST" action="cadastro.php">
<table border="0" cellspacing="5" cellpadding="2">
    <tr>
        <td>Nome da pessoa:</td>
        <td><input type="text" name="nome"  /></td>
    </tr>
    
    <tr>
        <td>Ano de Nascimento:</td>
        <td><input type="text" name="ano"  /></td>
    </tr>
    
    <!--tr>
        <td>Tempo:</td>
        <td><input type="text" name="tempo"  /></td>
    </tr-->
    
    <tr>
        <td align="right" colspan="2"><input type="submit" name="btnEnviar" value="Enviar"></td>
    </tr>
</table>
</form>