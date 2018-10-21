<?php
include 'conexion.php';

$nombre=$_POST['nombre'];

mysqli_query($conexion,"INSERT INTO usuarios(nombre,identificacion,email,password,fechanac,sexo)
VALUES ('$_POST[nombre]','$_POST[identificacion]','$_POST[email]','$_POST[password]','$_POST[fechanac]','$_POST[sexo]')")
or die("problema al insertar datos");

echo "<script>
alert('Bienvenido ,$nombre');
location.href='ingreso.html'</script>";
