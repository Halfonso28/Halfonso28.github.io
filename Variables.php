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


$ECOLI="A/A+-++--+-+";
$ECOLIINACTIVA="A/A+-++----+";
$SSONNEI="Alc/A--+-----+";
$SBOYDII="Alc/A--+------";
$ETARDA="Alc/A++++--+++";
$HOSHINAE="Alc/A+++---+++";
$SALMONELLA="Alc/A+++-+-+++";
$STYPHI="Alc/A+++---+--";
$SPARATYPHIA="Alc/A-++---+++";
if ($KIA=="A/A") {
	$CFREUNDII="A/A+++-++/-+--";
	$CFREUNDII1="A/A+++-+++--";
	$CFREUNDII2="A/A+++-+-+--";
}else{
	$CFREUNDII="Alc/A+++-++/-+--";
	$CFREUNDII1="Alc/A+++-+++--";
	$CFREUNDII2="Alc/A+++-+-+--";
}
$CKOSERI="Alc/A+-++++/-+-+";
$CKOSERI1="Alc/A+-+++++-+";
$CKOSERI2="Alc/A+-+++-+-+";
$KPNEUMONIAE="A/A++---++-+-";
$KOXYTOCA="A/A++--+++-++";
$EAEROGENES="A/A++---+-+++";
$ECLOACAE="A/A++---++/-+-+";
$ECLOACAE1="A/A++---+++-+";
$ECLOACAE2="A/A++---+-+-+";
$HALVEI="Alc/A+--/+---+++";
$HALVEI1="Alc/A+-+---+++";
$HALVEI2="Alc/A+-----+++";
$PMIRABILIS="Alc/A+++-+/-+++-+";
$PMIRABILIS1="Alc/A+++-++++-+";
$PMIRABILIS2="Alc/A+++--+++-+";
$MMORGANII="Alc/A+-++-+++-+";
$PRETTGERI="Alc/A+-++-+++--";
$PALCALIFACIENS="Alc/A+/--+++-+--";
$PALCALIFACIENS1="Alc/A+-+++-+--";
$PALCALIFACIENS2="Alc/A--+++-+--";
$INTERMEDIA="Alc/A--++-+---";


$RESULTADO=$KIA.$GAS.$H2S.$RM.$IND.$CIT.$URE.$MOV.$LIS.$ORN; 
?>