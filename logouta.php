<?php
session_start();

$varsesion = $_SESSION['nombrea'];
if($varsesion == null || $varsesion = ''){
	echo 'Usted no tiene autorizacion';
	die();
} 
session_destroy();
header("Location:ingresoa.php");
?>