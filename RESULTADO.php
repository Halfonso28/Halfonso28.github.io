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
<p class="subtitulo">Hola, hemos encontrado las siguientes enterobacterias.</p>
<!--COGIGO PHP-->	
<?php

include("Variables.php");

//PROCEDIMIENTO
if ($RESULTADO==$ECOLI) {
	echo "<p class='nombre-resultado'>E.COLI</p>";
	echo "<img src='IMG/ECOLI.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> Escherichiea <br>
	<strong>GÉNERO:</strong> Escherichie A <br>
	<strong>PATOGENIA Y PATOLOGIA:</strong> La cepas patogenas expresan factores de virulencia que les
	permite colonizar mucosas y luego causar enfermedades. Este microorganismo se asocia a
	multiples enfermedades, incluida la gastroenteritis e infecciones extraintestinales, como las
	urinarias y meningitis. <br>
	<strong>MECANISMO DE CONTAGIO:</strong> Se propagan a través del agua o los alimentos contaminados y
	del contacto con animales o personas.<br>
	<strong>MORFOLOGIA:</strong> Basilo Gram negativo, no porulado, es móvil ya que tiene flagelos y mide
	solo 1 μm de longitud por 0.35 μm de ancho.</p>";
}
if ($RESULTADO==$ECOLIINACTIVA) {
	echo "<p class='nombre-resultado'>E.COLI INACTIVA</p>";
	echo "<img src='IMG/ECOLI.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> Escherichiea <br>
	<strong>GÉNERO:</strong> Escherichie A <br>
	<strong>PATOGENIA Y PATOLOGIA:</strong> La cepas patogenas expresan factores de virulencia que les
	permite colonizar mucosas y luego causar enfermedades. Este microorganismo se asocia a
	multiples enfermedades, incluida la gastroenteritis e infecciones extraintestinales, como las
	urinarias y meningitis. <br>
	<strong>MECANISMO DE CONTAGIO:</strong> Se propagan a través del agua o los alimentos contaminados y
	del contacto con animales o personas.<br>
	<strong>MORFOLOGIA:</strong> Basilo Gram negativo, no porulado, es móvil ya que tiene flagelos y mide
	solo 1 μm de longitud por 0.35 μm de ancho.</p>";
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