<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Exercicio-5 PHP</title>
<style>
</style>
</head>
<body>
<h2>Exercício 5: Receba um ano para a variável $atual, mostre o valor recebido.
Mostre qual o ano anterior ao ano informado. Faça o decremento antes de exibir o valor da variável.</br>
OBS: Passe o atual da variável $atual por URL e mostre todas as informações em uma mesma linha, usando a concatenação.</h2>
<div>
<?php

$atual = $_GET["a"];

echo "<br>Valor que foi recebido: ". $atual;

$atual=++$atual;

echo "<br>";
echo "<br>O ano anterior é: " . $atual;

?>
</div>
</body>
</html>