<?php
$texto = "O Gmail representa uma tentativa de criar um novo conceito de webmail, baseado na id�ia de que n�o � preciso excluir mensagens e qualquer mensagem deve ser localizada facilmente. Os recursos mais importantes s�o";
//efetuar um explode do texto, retirando os espa�os
$arTexto = explode(" ", $texto);
//construir um array temporario com as 10 palavras
for($i=0; $i < count($arTexto); $i++){
  if($i>9)
    break;
  $tmp[] = $arTexto[$i];
   
}
//adicionar espa�o utilizando o implode e depois
$novoTexto = implode(" ", $tmp);
//concatenas com "..."
echo($novoTexto."...");
//Resultado :
//O Gmail representa uma tentativa de criar um novo conceito...
?>
