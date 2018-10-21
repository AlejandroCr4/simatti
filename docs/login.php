<?php 
   session_start();
    $nombre=$_POST['nombre'];
	$_SESSION['nombre'] = $nombre;
    $password=$_POST['password'];
 
	$conexion=mysqli_connect("localhost", "root", "", "registro");
	$consulta="SELECT * FROM usuarios WHERE nombre='$nombre' and password='$password'";
    $result=mysqli_query($conexion, $consulta);
	
	$filas=mysqli_num_rows($result);
	
    if($filas>0){
    echo "<script>
	alert('Bienvenido, $nombre');
	location.href='inicio.php'</script>";
    }
    else{
		echo "<script>
	alert('Datos incorrectos');
	location.href='ingreso.php'</script>";

    } 
	
mysqli_free_result($result);
mysqli_close($conexion);	
