<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Exercicio-8 PHP</title>
<style>
</style>
</head>
<body>
<h2>Exercício 8: Faça um código que tenha duas variáveis do tipo string:
$x que irá receber o conteúdo: “abc”
E a variável variante que irá receber o valor de $x adicionado do conteúdo “def”
Mostre em linhas separadas as frases:</br>
O conteúdo da variável X é: ____ ;</br>
A variável ABC criada recebeu o valor de ____;</br>
OBS: Passe o atual da variável $atual por URL e mostre o valor de cada variável na frente
da frase, usando a concatenação.</h2>
<div>
<?php
$x = "abc";
$$x = "def";

echo "<br>O valor de x é: ". $x;
echo "<br>";

echo "<br>A variável ABC criada recebeu o valor de: ". $abc; 
echo "<br>";
?>
</div>
</body>
</html>