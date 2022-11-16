<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/Resultado.css">
	<title>RESULTADO</title>
</head>
<body>
<div class="contenedor-resultado">	
<p class="titulo">RESULTADO</p>
<p class="subtitulo">Hola, hemos encontrado las siguientes entorobacterias.</p>
<!--COGIGO PHP-->	
<?php
include("Variables.php");

//PROCEDIMIENTO
if ($RESULTADO==$ECOLI) {
	echo "<p class='texto-resultado'>E.COLI</p>";
	echo "<img src='IMG/ecoli.jpeg' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>La E. coli es una bacteria que se encuentra en los intestinos de las personas y los animales, en el medioambiente y, a veces, también en los alimentos y el agua sin tratar. La mayoría de los tipos de E. coli son inofensivos y son parte de un tracto intestinal sano.</p>";
}
if ($RESULTADO==$ECOLIINACTIVA) {
	echo "E.COLIINACTIVA<br>";
}
if ($RESULTADO==$GRUPOSABC||$RESULTADO==$GRUPOSABC1||$RESULTADO==$GRUPOSABC2) {
	echo "GRUPOS A,B,C";
}
if ($RESULTADO==$SSONNEI) {
	echo "S.SONNEI";
}
if ($RESULTADO==$SBOYDII) {
	echo "S.BOYDI";
}
if ($RESULTADO==$SFLEXNERI||$RESULTADO==$SFLEXNERI1||$RESULTADO==$SFLEXNERI2) {
	echo "S.FLEXNERI";
}
if ($RESULTADO==$EDWARSIELLA) {
	echo "EDWARSIELLA";
}
if ($RESULTADO==$ETARDA) {
	echo "E.TARDA";
}
?>
	</div>
</body>
</html>