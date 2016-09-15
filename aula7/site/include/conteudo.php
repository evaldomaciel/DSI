<?php
if(empty($_GET["codigo_conteudo"])){
  $codigo_conteudo = 1;
}else{
  $codigo_conteudo = $_GET["codigo_conteudo"];
}

$sql = "SELECT * FROM conteudo WHERE codigo=$codigo_conteudo";
$retorno = mysql_query($sql);
$conteudo = mysql_fetch_array($retorno) or die(mysql_error());
?>
<div id="content">
  <h2 id="pageName"><?=$conteudo["titulo"]?></h2>
  <div class="story">
    <p><?
    if(empty($conteudo["texto"])){
      include("include/".$conteudo["arquivo"]);
    }
    ?></p>
  </div>
</div>

