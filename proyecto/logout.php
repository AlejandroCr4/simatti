<?php
session_start();

$varsesion = $_SESSION['nombre'];
if($varsesion == null || $varsesion = ''){
	echo 'Usted no tiene autorizacion';
	die();
} 
session_destroy();
header("Location:ingreso.php");
?>