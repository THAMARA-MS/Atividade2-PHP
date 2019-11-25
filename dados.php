<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="StyleSheet" type="text/css" href="estiloCSS.css"/>
<title>Dados - Raiz - Exemplo PHP</title>
<style>
.div:hover{background-color:white;}
</style>
</head>
<body>
<div>
<?php

$valor =$_GET["v"];
$rq = sqrt($valor);

echo "A raiz de $valor e igual a: $rq". number_format($rq,2);

?>
<a class="div" href="teste.html"><br /><br />Voltar</a>
</div>
</body>
</html>