<?php

/* Conexion con mysqli POO*/
    $host="localhost";
    $user="root";
    $pw="";
    $db="registro";

    $mysqli = new mysqli($host, $user, $pw, $db);
    if($mysqli->connect_errno):
    echo"
    Problema al conectar con la base de datos".$mysqli->connect_errno;
    endif;

/* Conexion con mysqli estructurado
	$host="localhost";
	$user="root";
	$pw="";
	$db="registro";
	
	$conexion = mysqli_connect($host,$user,$pw)
	or die("Problema al conectar con el servidor".mysqli_error($conexion));
	
	mysqli_select_db($conexion,$db)
	or die("Problema al conectar con labase de datos".mysqli_error($conexion));
*/
/* Conexion con PDO

   <?php
    $conexion = 'mysql:host=localhost;dbname=registro';
	$user="root";
	$pw="";
	
try{
    $mbd = new PDO($conexion,$user,$pw);
    echo 'Conectado';
}
catch (PDOException $e){
        print "¡Error!:" . $e->getMessage() . "<br/>";
        die();
}
*/