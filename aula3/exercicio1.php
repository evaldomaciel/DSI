<?php
$texto = "O Gmail representa uma tentativa de criar um novo conceito de webmail, baseado na idéia de que não é preciso excluir mensagens e qualquer mensagem deve ser localizada facilmente. Os recursos mais importantes são";
//efetuar um explode do texto, retirando os espaços
$arTexto = explode(" ", $texto);
//construir um array temporario com as 10 palavras
for($i=0; $i < count($arTexto); $i++){
  if($i>9)
    break;
  $tmp[] = $arTexto[$i];
   
}
//adicionar espaço utilizando o implode e depois
$novoTexto = implode(" ", $tmp);
//concatenas com "..."
echo($novoTexto."...");
//Resultado :
//O Gmail representa uma tentativa de criar um novo conceito...
?>
