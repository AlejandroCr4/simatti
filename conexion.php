<?php
	$host="localhost";
	$user="root";
	$pw="";
	$db="registro";
	
	$conexion = mysqli_connect($host,$user,$pw)
	or die("Problema al conectar con el servidor".mysqli_error($conexion));
	
	mysqli_select_db($conexion,$db)
	or die("Problema al conectar conlabase de datos".mysqli_error($conexion));

/*

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