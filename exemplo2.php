<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Segundo Exemplo PHP</title>
<style>
</style>
</head>
<body>
<div>
<?php

$n1 = $_GET["a"];
$n2 = $_GET["b"];

echo "<h2> Valores recebidos: $n1 e $n2</h2>";
?>
</div>
</body>
</html>