<?php
require('constante/config.php');
require('include/conexao.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- DW6 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>X25 Informatica</title>
<link rel="stylesheet" href="css/2col_leftNav.css" type="text/css">
</head>
<!-- The structure of this file is exactly the same as 2col_rightNav.html;
     the only difference between the two is the stylesheet they use -->
<body> 
<!-- aqui entra o include de topo-->
<?php include_once("include/topo.php")?>
<!-- aqui entra o include de conteudo-->
<?php include("include/conteudo.php")?>
<!--end content --> 
<!-- aqui entra o include de menu-->
<?php include("include/menu.php")?>
<!-- aqui entra o rodape -->
<?php include("include/rodape.php")?>
</body>
</html>
<? mysql_close();?>






