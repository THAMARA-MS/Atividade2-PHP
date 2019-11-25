<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Exercicio-9 PHP</title>
<style>
</style>
</head>
<body>
<h2>Faça um código em PHP que receba via URL os valores das notas 1 e 2.
OBS: Passe os valores das notas n1 e n2 pela URL e calcule a media entre as duas notas. Após mostrar os valores de n1 e n2 e o valor da média, mostre também a situação do aluno, se o aluno foi aprovado (se media >=6) ou reprovado (se media <6). Mostre o código executado para a professora.</h2>
<div>
<?php

$n1 = $_GET["a"];
$n2 = $_GET["b"];
$m = ($n1+$n2)/2;


echo "As media das notas são: $n1 e $n2 = $m<br>";
echo "<br>";


$sit = ($m >=6)?"APROVADO"  :"REPROVADO";

echo "O resultado sera: $sit ";
echo "<br>";

?>
</div>
</body>
</html>