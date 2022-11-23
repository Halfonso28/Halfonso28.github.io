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
	<strong>TRIBU:</strong> Escherichiea.<br>
	<strong>GÉNERO:</strong> Escherichie A.<br>
	<strong>PATOGENIA Y PATOLOGIA:</strong> La cepas patogenas expresan factores de virulencia que les
	permite colonizar mucosas y luego causar enfermedades. Este microorganismo se asocia a
	multiples enfermedades, incluida la gastroenteritis e infecciones extraintestinales, como las
	urinarias y meningitis. <br>
	<strong>MECANISMO DE CONTAGIO:</strong> Se propagan a través del agua o los alimentos contaminados y
	del contacto con animales o personas.<br>
	<strong>MORFOLOGIA:</strong> Basilo Gram negativo, no porulado, es móvil ya que tiene flagelos y mide
	solo 1 μm de longitud por 0.35 μm de ancho.
	<br></p>";
}
if ($RESULTADO==$ECOLIINACTIVA) {
	echo "<p class='nombre-resultado'>E.COLI INACTIVA</p>";
	echo "<img src='IMG/ECOLI.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> Escherichiea.<br>
	<strong>GÉNERO:</strong> Escherichie A.<br>
	<strong>PATOGENIA Y PATOLOGIA:</strong> La cepas patogenas expresan factores de virulencia que les
	permite colonizar mucosas y luego causar enfermedades. Este microorganismo se asocia a
	multiples enfermedades, incluida la gastroenteritis e infecciones extraintestinales, como las
	urinarias y meningitis. <br>
	<strong>MECANISMO DE CONTAGIO:</strong> Se propagan a través del agua o los alimentos contaminados y
	del contacto con animales o personas.<br>
	<strong>MORFOLOGIA:</strong> Basilo Gram negativo, no porulado, es móvil ya que tiene flagelos y mide
	solo 1 μm de longitud por 0.35 μm de ancho.
	<br></p>";
}
if ($RESULTADO==$SSONNEI) {
	echo "<p class='nombre-resultado'>S.SONNEI</p>";
	echo "<img src='IMG/SSONNEI.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> ESCHERICHIEA.<br>
	<strong>GÉNERO:</strong> SHIGELLA.<br>
	<strong>PATOLOGIA:</strong> La enfermedad más frecuente es la gatroenteritis (shigelosis), una diarrea acuosa
	inicial (a veces con sangre) que evoluciona a los 1-2 días a cólico abdominal.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Transmisión fecal-oral, el ser humano es el unico reservorio de
	estas bacterias.<br>
	<strong>MORFOLOGIA:</strong> Shigella sonnei es una bacteria en forma de bastón, con una longitud máxima
	de 1,7 μm y un diámetro cercano a la mitad de esta longitud.
	<br></p>";
}
if ($RESULTADO==$SBOYDII) {
	echo "<p class='nombre-resultado'>S.BOYDI</p>";
	echo "<img src='IMG/SBOYDII.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> ESCHERICHIEA.<br>
	<strong>GENERO:</strong> SHIGELLA.<br>
	<strong>PATOGENIA:</strong> La shigelosis es una enfermedad bacteriana aguda que afecta al intestino, causada
	por bacterias del género Shigella. La distribución de la enfermedad es mundial, siendo endémica
	en climas tanto tropicales como templados.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> El mecanismo de transmisión es fecal-oral. La infección puede
	ocurrir por contacto personapersona o por la ingestión de alimentos o agua contaminados. La
	transmisión de la enfermedad a través de los alimentos no es frecuente en los países
	industrializados si se compara con la propagación por contacto directo, pero cuando se produce,
	se asocia con grandes brotes. Las moscas también pueden actuar como vehículo de transmisión,
	contaminando los alimentos sin proteger.<br>
	<strong>MORFOLOGIA:</strong> Shigella Boydii es una bacteria en forma de bastón, con una longitud máxima de
	1,7 μm y un diámetro cercano a la mitad de esta longitud. Su pared celular es simple, compuesta
	de peptidoglicános, sin ácidos teicoicos y lipoteicoicos, sin cápsula.
	<br></p>";
}
if ($RESULTADO==$ETARDA) {
	echo "<p class='nombre-resultado'>E.TARDA</p>";
	echo "<img src='IMG/ETARDA.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> EDWARSIELLEA E.<br>
	<strong>GENERO:</strong> EDWARSIELLA.<br>
	<strong>PATOGENIA:</strong> Es un agente causal de la septicemia y necrosis tisular en peces de agua
	dulce y salada, en humanos causa gastroenteritis, infección del tracto urinario, meningitis
	y celulitis.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> La exposición al medio ambiente acuático o a animales
	exóticos, enfermedades hepáticas preexistentes y hábitos alimentarios, como la ingestión
	de peces y de mariscos crudos.
	<br></p>";
}
if ($RESULTADO==$HOSHINAE) {
	echo "<p class='nombre-resultado'>HOSHINAE</p>";
	echo "<img src='IMG/HOSHINAE.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> EDWARSIELLA.<br>
	<strong>GENERO:</strong> EDWARSIELLA.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Se ha aislado de pájaros, reptiles y agua, por el momento no
	se ha asociado a enfermedades en humanos.<br>
	<strong>MORFOLOGIA:</strong> Bacilo gramnegativo flagelado lo que lo hace móvil y mide 0,8-1,2μm de
	ancho x 2,0-3,0 μm de largo.
	<br></p>";
}
if ($RESULTADO==$SALMONELLA) {
	echo "<p class='nombre-resultado'>SALMONELLA</p>";
	echo "<img src='IMG/SALMONELLA.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> SALMONELLA E.<br>
	<strong>GENERO:</strong> SALMONELLA.<br>
	<strong>PATOGENIA:</strong> Evade las defensas de las células intestinales sin ser destruida y comienza a
	dividirse dentro de está. Posteriormente, pasa a la sangre y produce una infección sistémica,
	multiplicándose en macrófagos, y localizándose en hígado, bazo, médula ósea etc.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Se transmiten al ser humano por ingestión de microorganismos
	en un alimento proveniente de animales infectados o contaminado por las heces de un
	animal o persona infectada. La carne de pollo y los huevos son una de las mayores fuentes de
	toxiinfección alimentaria en el hombre.<br>
	<strong>MORFOLOGIA:</strong> Bacilo gramnegativo, anaerobio facultativo, de 24 μm de largo por 0,6 μm de
	ancho, que muestra colonias de entre 2 y 3 mm de diámetro, de color blanco gris y textura
	viscosa, cuando se aíslan en placas de agarsangre durante 24h a 37o C.
	<br></p>";
}
if ($RESULTADO==$STYPHI) {
	echo "<p class='nombre-resultado'>S.TYPHI</p>'";
	echo "<img src='IMG/STYPHI.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> SALMONELLA E.<br>
	<strong>GENERO:</strong> SALMONELLA.<br>
	<strong>PATOGENIA:</strong> Se multiplica en el epitelio de la submucosa, después de lo cual entra el torrente
	circulatorio y se disemina por el cuerpo. La multiplicación ocurre otra vez en el bazo y en el
	hígado, para que después la bacteria sea liberada en grandes cantidades al torrente sanguíneo.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> La bacteria penetra al organismo a través del consumo de agua o
	aliementos contaminados. S. typhi causa la fiebre tifoidea en humanos, quienes son sus únicos
	hospedantes.<br>
	<strong>MORFOLOGIA:</strong> Bacilos Gram negativos, sin capsula miden de 24 μm de largo por 0,6 μm de ancho.
	<br></p>";
}
if ($RESULTADO==$SPARATYPHIA) {
	// code...
}
?>
</div>
</body>
</html>