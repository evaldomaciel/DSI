<?php
//recuperar as variaveis do formulario
$email = $_POST["email"];
$texto = $_POST["texto"];
//enviar o email
$header = "From:".$email;
$header .="Bcc:".$email;
mail("flmendes@gmail.com", "email do site", $texto, $header);
//conecta ao banco
//inseri registros no banco
?>
