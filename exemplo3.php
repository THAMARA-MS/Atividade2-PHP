<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Terceiro Exemplo PHP - Funções Matemática</title>
<style>
</style>
</head>
<body>
<div>
<?php

echo "<center><h2>Funções Matemática</h2></center>";

$v1 = $_GET["x"];
$v2 = $_GET["y"];

echo "<br> Valores recebidos: $v1 e $v2";
echo "<br>";
echo "<br> O valor absoluto de $v2 e : ". abs($v2);
echo "<br>";
echo "<br>O valor de $v1<sup>$v2</sup>= ". pow($v1, $v2);
echo "<br>";
echo "<br>A raiz de $v1 e: ". sqrt($v1);
echo "<br>";
echo "<br>O valor de $v2 arredondado com o round e: ". round($v2);
echo "<br>";
echo "<br>O valor de $v2 arredondado com o ceil e: ". ceil($v2);
echo "<br>";
echo "<br>O valor de $v2 arredondado com o floor e: ". floor($v2);
echo "<br>";
echo "<br>A parte inteira de $v2 e: ". intval($v2);
echo "<br>";
echo "<br>O valor de $v1 em moeda e R$: ". number_format($v1,2);
echo "<br>";
echo "<br>O valor de $v1 em moeda e R$: ". number_format($v1,2,",",".");
echo "<br>";

?>
</div>
</body>
</html>