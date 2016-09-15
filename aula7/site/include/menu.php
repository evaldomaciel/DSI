<div id="navBar">
  <div id="search">  </div>
  <div id="sectionLinks">
    <ul>
    <?php
    if(empty($_GET["codigo_menu"])){
        $codigo_menu = 1;
    }else{
      $codigo_menu = $_GET["codigo_menu"];
    }
    $sql = "SELECT * FROM conteudo
        WHERE menu_codigo = $codigo_menu";
    $retorno = mysql_query($sql) or die(mysql_error());
    while($conteudo = mysql_fetch_array($retorno)){
    ?>
      <li><a href="index.php?codigo_menu=<?=$codigo_menu?>&codigo_conteudo=<?=$conteudo["codigo"]?>"><?=$conteudo["descricao"]?></a></li>
      
    <?php } ?>
    </ul>
  </div>
  <div class="relatedLinks">
    <h3>&nbsp;</h3>
  </div>
</div>

