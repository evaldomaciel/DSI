<?
//print_r($_SERVER);
for($i=0; $i < count($_SERVER); $i++){
  echo($_SERVER[$i]);
}
foreach($_SERVER as $valor){
  echo($valor."<br>");
}
?>
