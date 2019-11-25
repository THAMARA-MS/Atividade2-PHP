<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Exercicio-7 PHP</title>
<style>
</style>
</head>
<body>
<h2>Exercício 7: Use o exercício 5 e faça uma referência a variável $a.
Faça esse procedimento no momento em que a variável $b receberá o valor de $a.
Mostre em linhas separadas as frases:</br>
O valor de A é: ____ ;</br>
O valor de B é: ____;</br>
OBS: Passe o atual da variável $atual por URL e mostre o valor de cada variável na frente
da frase, usando a concatenação.</br></h2>
<div>
<?php
$a = 3;
$b=$a+5;



echo "<br>O valor de A é: ". $a;
echo "<br>";

echo "<br>O valor de B é: ". $b;
echo "<br>";
?>
</div>
</body>
</html>