<?php
$data = "11/07/2005";
$arData = explode("/", $data);
$novaData = $arData[2]."-".$arData[1]."-".$arData[0];
echo($novaData);
?>
