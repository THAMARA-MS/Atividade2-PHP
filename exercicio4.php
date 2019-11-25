<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Exercicio-4 PHP</title>
<style>
</style>
</head>
<body>
<h2>Exercício 4: Receba um ano para a variável $atual, mostre o valor recebido.
Mostre qual o ano anterior ao ano informado. Faça o decremento depois de exibir o valor da variável.</br>
OBS: Passe o atual da variável $atual por URL e mostre todas as informações em uma mesma linha, usando a concatenação.</h2>
<div>
<?php

$atual = $_GET["a"];

echo "<br>Valor que foi recebido: ". $atual;
echo "<br>";
$atual=$atual--;

echo "<br>";
echo "<br>O ano anterior é: " . $atual;

?>
</div>
</body>
</html>