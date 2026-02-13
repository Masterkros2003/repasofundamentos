<?php 
$precios=[10,20,18,30,50];
$preciosIVA = [];

for ($i=0; $i < count($precios); $i++) { 
   $preciosIVA[$i] = $precios[$i] * 1.21;
   echo$preciosIVA[$i]."<br>";
}

?>