<?php
$sql = "SELECT * FROM menu";
$retorno = mysql_query($sql) or die(mysql_error());
?>
<div id="masthead">
  <h1 id="siteName">
  <img src="img/logo.gif" width="148" height="66">
  </h1>
  <div id="globalNav">
  <?php
   //inicio do loop
   while($menu = mysql_fetch_array($retorno)){
  ?>
    <a href="index.php?codigo_menu=<?=$menu['codigo']?>"> <?=$menu["descricao"]?>  </a> |
   <?php
    //final do looop
    }
   ?>
  </div>
</div>
