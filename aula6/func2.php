<?php
function conectar($banco, $host="localhost", $user="root", $senha=""){
  mysql_connect($host, $user, $senha)
    or die(mysql_error());
}

conectar("flavio");
conectar("flavio","maq03", "root", "123456");
?>
