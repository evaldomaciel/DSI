<?php
function conectar($banco, $host="localhost", $user="root", $senha=""){
  mysql_connect($host, $user, $senha)
    or die(mysql_error());
}
//iniciando a declara��o da minha fun��o de nome muda_string
function muda_string($string){
  $string .=" mais alguma coisa!";
}
?>
