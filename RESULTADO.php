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
elseif ($RESULTADO==$ECOLIINACTIVA) {
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
elseif ($RESULTADO==$SSONNEI) {
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
elseif ($RESULTADO==$SBOYDII) {
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
elseif ($RESULTADO==$ETARDA) {
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
elseif ($RESULTADO==$HOSHINAE) {
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
elseif ($RESULTADO==$SALMONELLA) {
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
elseif ($RESULTADO==$STYPHI) {
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
elseif ($RESULTADO==$SPARATYPHIA) {
	echo "<p class='nombre-resultado'>S.PARATYPHI A</p>";
	echo "<img src='IMG/SPARATYPHIA.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> SALMONELLEA E.<br>
	<strong>GENERO:</strong> SALMONELLEA E.<br>
	<strong>PATOGENIA:</strong> Salmonella Paratyphi, es capaz de causar una enfermedad conocida como fiebre
	paratifoidea, que se propaga desde los intestinos al torrente sanguíneo.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> La transmisión se produce tras la ingestión de comida o agua
	contaminados por heces.<br>
	<strong>MORFOLOGIA:</strong> Una bacteria con forma de bacilo, flagelada, aerobia y gram negativa.
	<br></p>";
}
elseif ($RESULTADO==$CFREUNDII||$RESULTADO==$CFREUNDII1||$RESULTADO==$CFREUNDII2) {
	echo "<p class='nombre-resultado'>C.FREUNDII</p>";
	echo "<img src='IMG/CFREUNDII.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> CITROBACTEREA E.<br>
	<strong>GENERO:</strong> CITROBACTER.<br>
	<strong>PATOGENIA:</strong> Es causante de infecciones intestinales y extraintestinales como: infecciones del
	tracto urinario (ITU) y septicemia.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Es un organismo del suelo, pero también se puede encontrar en el
	agua, las aguas residuales, los alimentos y en el tracto intestinal de animales y humanos.<br>
	<strong>MORFOLOGIA:</strong> Citrobacter freundii. es una especie de bacterias gramnegativas anaerobias
	facultativas con una longitud típica de 1 a 5 μm.
	<br></p>";
}
elseif ($RESULTADO==$CKOSERI||$RESULTADO==$CKOSERI1||$RESULTADO==$CKOSERI2) {
	echo "<p class='nombre-resultado'>C.KOSERI</p>";
	echo "<img src='IMG/CKOSERI.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> CITROBACTEREA E.<br>
	<strong>GENERO:</strong> CITROBACTER.<br>
	<strong>PATOLOGIA:</strong> Es causa de meningitis en pacientes neonatales e inmunodeprimidos como una
	infección aguda severa.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Se encuentra frecuentemente en la vía genitourinaria y el aparato
	gastrointestinal de animales y humanos como flora saprófita, pero también se contagia a través
	del agua, suelo y alimentos contaminados.<br>
	<strong>MORFOLOGIA:</strong> Bacteria oportunista con movilidad positiva, aeróbicos, rojo de metilo positivo,
	lisina negativos.
	<br></p>";
}
elseif ($RESULTADO==$KPNEUMONIAE) {
	echo "<p class='nombre-resultado'>K.PNEUMONIAE</p>";
	echo "<img src='IMG/KPNEUMONIAE.png'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> KLEBSIELLEAE.<br>
	<strong>GENERO:</strong> KLEBSIELLA.<br>
	<strong>PATOLOGIA Y PATOGENIA:</strong> Infecciones nosocomiales, neumonías, sepsis, infección del tracto
	urinario etc. Coloniza las mucosas y la piel de pacientes hospitalizados, causando sobre todo
	infecciones del tracto respiratorio y del tracto urinario.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Suele transmitirse por contacto con la piel, mucosas, heces, heridas
	u orina de una persona infectada.<br>
	<strong>MORFOLOGIA:</strong> Bacilo Gram negativo, inmovil y a naerobias facultativas. Cápsula de polisacárido
	de gran tamaño, posee una multiplicación mucoide oportunista.
	<br></p>";
}
elseif ($RESULTADO==$KOXYTOCA) {
	echo "<p class='nombre-resultado'>K.OXYTOCA</p>";
	echo "<img src='IMG/KOXYTOCA.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> KLEBSIELLEAE.<br>
	<strong>GENERO:</strong> KLEBSIELLA.<br>
	<strong>PATOLOGIA Y PATOGENIA:</strong> Dicha bacteria es un patógeno oportunista responsable de infecciones
	en el tracto urinario en un 9%, bacteriemias nosocomiales en un 14% y con relativa frecuencia en
	gastroenteritis.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> El mecanismo de transmisión de K. Oxytoca es mediante el contacto
	directo con piel infectada, mucosas infectadas, heces fecales, heridas u orina.<br>
	<strong>MORFOLOGIA:</strong> Bacilo Gram negativo, inmovil y a naerobias facultativas. Cápsula de polisacárido
	de gran tamaño, posee una multiplicación mucoide oportunista.<br>
	<br></p>";
}
elseif ($RESULTADO==$EAEROGENES) {
	echo "<p class='nombre-resultado'>ENTEROBACTER AEROGENES</p>";
	echo "<img src='IMG/EAEROGENES.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> Klebsielleae.<br>
	<strong>GÉNERO:</strong> Enterobacter.<br>
	<strong>PATOLOGÍA:</strong> Provoca septicemia, osteomielitis, y artritis séptica, así como infecciones del tracto
	urinario, gastrointestinales, del tracto respiratorio y la piel. El huésped ha estado ya debilitado,
	comúnmente reside en hospitales.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Contacto directo con la piel, mucosasde la persona afectada, fluidos o
	heridas contaminadas, objetos, materiales y superficies contaminadas.<br>
	<strong>MORFOLOGÍA:</strong> Bacilos gram negativos, anaerobios facultativos, flagelar.
	<br></p>";
}
elseif ($RESULTADO==$ECLOACAE||$RESULTADO==$ECLOACAE1||$RESULTADO==$ECLOACAE2) {
	echo "<p class='nombre-resultado'>ENTEROBACTER CLOACAE</p>";
	echo "<img src='IMG/ECLOACAE.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong>: Klebsielleae.<br>
	<strong>GÉNERO:</strong> Enterobacter.<br>
	<strong>PATOLIGÍA:</strong> Es un patógeno asociado a infecciones nosocomial principalmente bacteriemia,
	infección respiratoria, del tracto urinario y abdominal.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Agua contaminada, suelo, flora habitual de animales y ser humano,
	considerado patógeno oportunista responsable de infecciones de origen intrahospitalario,
	infecciones del tracto urinario, de las vías respiratorias, peritonitis, etc.<br>
	<strong>MORFOLOGÍA:</strong> Bacilo gram negativo, anaerobia facultativa, flagelar, su tamaño varía de 0.8 a 2.0 μm
	y de 0.3 a 0.6 μm.
	<br></p>";
}
elseif ($RESULTADO==$HALVEI||$RESULTADO==$HALVEI1||$RESULTADO==$HALVEI2) {
	echo "<p class='nombre-resultado'>HAFNIA ALVEI</p>";
	echo "<img src='IMG/HALVEI.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> Klebsielleae.<br>
	<strong>GÉNERO:</strong> Hafnia.<br>
	<strong>PATOLIGÍA:</strong> Infección bacteremia, septicemia, neumonía, de articulaciones, heridas, síndrome
	urémico hemolítico y peritonitis.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Agua, suelo, alimentos contaminados, es parte de la microbiota normal
	de mamíferos, aves, reptiles y peces.<br>
	<strong>MORFOLOGÍA:</strong> Bacilo gram negativo, aeróbico facultativo.
	<br></p>";
}
elseif ($RESULTADO==$PMIRABILIS||$RESULTADO==$PMIRABILIS1||$RESULTADO==$PMIRABILIS2) {
	echo "<p class='nombre-resultado'>PROTEUS MIRABILIS</p>";
	echo "<img src='IMG/PMIRABILIS.png' class='imagen-resultado'>";
	echo "<p class='descripcion-resultado'>
	<strong>TRIBU:</strong> Proteeae.<br>
	<strong>GÉNERO:</strong> Proteus.<br>
	<strong>PATOLOGÍA:</strong> Es un patógeno oportunista, causa infecciones en el tracto urinario o en pacientes que
	deben permanecer un largo periodo de tiempo con un catéter implantado.<br>
	<strong>MECANISMO DE CONTAGIO:</strong> Suelo, agua, contaminación fecal.
	<strong>MORFOLOGÍA:</strong> Bacilo gram negativo, mide de 1.5 a 2 μm, no forma esporas, móviles.
	<br></p>";
}
elseif (condition) {
	// code...
}
?>
</div>
</body>
</html>