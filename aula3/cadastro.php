<?php
//recuperar as variaveis capital, tempo e juros
//se variaveis estiverem vazia concatenar variavel de erro
//se variavel de erro estiver vazia, calcular e imprimir montante e juros obtidos
//caso contratio imprimir variavel de erro
//recuperar variaveis

$nome  = (string)$_POST["nome"];
$ano  = (float)$_POST["ano"];

$idade = 2016 - $ano;

if(empty($nome))
  $erro = "<li>Nome não informado</li>";

if(empty($ano))
  $erro .="<li>Ano de nascimento não informado</li>";


if(empty($erro)){
  header("Location:resultado.php?nome=$nome&idade=$idade");
  exit();
}else{
  //mostro minha mensagem de erro
  header("Location:index.php?erro=$erro");
  exit();
} 
?>