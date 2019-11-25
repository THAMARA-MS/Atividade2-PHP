<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Quarto Exemplo PHP - Função Ternário</title>
<style>
</style>
</head>
<body>
<div>
<?php

echo "<center><h2>Função Ternário</h2></center>";


$n1 = $_GET["a"];
$n2 = $_GET["b"];
$tipo = $_GET["op"];

echo "Os valores passados foram: $n1 e $n2 <br>";
echo "<br>";

$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

echo "O resultado sera: $r ";
echo "<br>";

?>
</div>
</body>
</html>