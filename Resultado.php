<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RESULTADO</title>
</head>
<body>
<?php
//VARIABLES:
$KIA=$_POST['KIA'];
$GAS=$_POST['GAS'];
$H2S=$_POST['H2S'];
$RM=$_POST['RM'];
$IND=$_POST['IND'];
$CIT=$_POST['CIT'];
$URE=$_POST['URE'];
$MOV=$_POST['MOV'];
$LIS=$_POST['LIS'];
$ORN=$_POST['ORN'];

$ECOLI="A/A+-++--+-";
$ECOLIINACTIVA="A/A+-++----";
$GRUPOSABC="Alc/A--+-/+----";
$GRUPOSABC1="Alc/A--++----";
$GRUPOSABC2="Alc/A--+-----";
$SSONNEI="Alc/A--+-----";
$SBOYDII="Alc/A--+-----";
$SFLEXNERI="Alc/A--+-/+----";
$SFLEXNERI1="Alc/A--++----";
$SFLEXNERI2="Alc/A--+-----";
$EDWARSIELLA="Alc/A++++--++";
$ETARDA="Alc/A++++--++";
$HOSHINAE="Alc/A+++---++";
$SALMONELLA="Alc/A+++-+-++";
$STYPHI="Alc/A+++---+-";
$SPARATYPHIA="Alc/A-++---++";
if ($KIA=="A/A") {
	$CFREUNDII="A/A+++-++/-+-";
	$CFREUNDII1="A/A+++-+++-";
	$CFREUNDII2="A/A+++-+-+-";
}else{
	$CFREUNDII="Alc/A+++-++/-+-";
	$CFREUNDII1="Alc/A+++-+++-";
	$CFREUNDII2="Alc/A+++-+-+-";
}
$CKOSERI="";
$KPNEUMONIAE="";
$KOXYTOCA="";
$EAEROGENES="";
$ECLOACAE="";
$HALVEI="";
$PAGGLOMERANS="";
$SMARCESCENS="";



$RESULTADO=$KIA.$GAS.$H2S.$RM.$IND.$CIT.$URE.$MOV.$LIS;

//PROCEDIMIENTO
if ($RESULTADO==$ECOLI) {
	echo "E.COLI<br>";
}
if ($RESULTADO==$ECOLIINACTIVA) {
	echo "E.COLIINACTIVA<br>";
}
if ($RESULTADO==$GRUPOSABC) {
	echo "GRUPOS A,B,C";
}
?>
</body>
</html>