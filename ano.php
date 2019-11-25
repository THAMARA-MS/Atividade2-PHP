<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Exercicio-10 PHP</title>
</head>
<body>
<h2></h2>
<div>
<?php

$idade = date("Y");
$ano = $_POST['a'];

$resu = $idade-$ano;



if($idade>=18){
	echo "Sua idade é de: ".$resu;
	echo "<br>";
	echo "Você pode dirigir e votar ";
	}
	
else{
	echo "Sua idade é de: ".$resu;
	echo "<br>";
	echo "Você não pode dirigir e nem votar ";
}


?>
<a class="div" href="testando.html"><br /><br />Voltar</a>
</div>
</body>
</html>