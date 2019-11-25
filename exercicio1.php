<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Exercicio-1/3 PHP</title>
<style>
</style>
</head>
<body>
<h2>Exercício 1 e 3: Receba um valor de um produto na variável $preco, mostre o valor recebido.
Aplique 10% de acréscimo a esse valor e mostre concatenado a frase:</br>
O novo preço com 10% de aumento será R$ $preco.</br>
OBS: Passe o valor da variável $preco por URL e mostre cada informação em uma linha separada.</br>Vá ao exercício 1, use a função de formatação para os valores da variável preço como sendo: 
separador de milhar com o ponto e os centavos com a vírgula.</br></h2>
<div>
<?php

$preco = $_GET["p"];
$novo;

echo "<br>O valor do preço é R$: ". number_format($preco,2);
echo "<br>";

$novo = ($preco * 10)/100;
$preco+=$novo;

echo "<br>O novo preco com 10% é R$: ". number_format($preco,2,".",",");



?>
</div>
</body>
</html>