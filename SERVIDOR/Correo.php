<?php
$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Comentario=$_POST['Comentario'];
$Asunto="Formulario Rellenado Correctamente!";
$Mensaje="Nombre: ".$Nombre."<br> Correo: $Correo<br> Mensaje: ".$_POST['$Mensaje'];

if (mail('laelhernandez@cetis17.edu.mx',$Asunto,$Mensaje)) {
    echo "Corre Enviado Correctamente!";
}
?>