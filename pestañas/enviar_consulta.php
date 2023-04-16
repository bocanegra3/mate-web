<?php
$nombre_form=$_POST['nombre'];
$apellido_form=$_POST['apellido'];
$email_form=$_POST['email'];
$mensajes_form=$_POST['mensajes'];

$conexion= mysqli_connect('localhost','root','','mate_web') or exit ("NO se pudo realidad la conexion");

mysqli_query($conexion, "INSERT INTO consultas VALUES ('','$nombre_form', '$apellido_form', '$email_form', '$mensajes_form')");

mysqli_close($conexion);

header("location:contacto.php?ok");
