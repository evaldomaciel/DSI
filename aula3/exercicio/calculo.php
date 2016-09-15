<?php
//RECUPERAR AS VARIAVEIS SUBMETIDAS ATRAVES DO FORMULARIO
$capital = (double)$_REQUEST["capital"];
$duracao = (double)$_REQUEST["duracao"];
$juro = (double)$_REQUEST["juro"]/100;

//VERIFICAR AS VARIAVEIS
if(empty($capital)){
  $erro .= "<li>CAPITAL NÃO INFORMADO</li>";
}
if(empty($duracao)){
  $erro .= "<li>DURAÇÃO NÃO INFORMADO</li>";
}
if(empty($juro)){
  $erro .= "<li>JURO NÃO INFORMADO</li>";
}

if(empty($erro)){
    //calcular o montante eo juros
    //aplicar a formula
    $montante = $capital*(1+$juro*$duracao);
    $juro_obtido = $montante - $capital;
    header("Location:ok.php?montante=$montante&juro_obtido=$juro_obtido");
    exit();
}else{
    //redireciono para pagina de formulario
    header("Location:index2.php?erro=$erro");
    exit();

}

?>



