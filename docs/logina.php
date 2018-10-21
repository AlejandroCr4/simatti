<?php 
    session_start();
    $nombrea=$_POST['nombrea'];
	$_SESSION['nombrea'] = $nombrea;
    $passworda=$_POST['passworda'];
 
	$conexion=mysqli_connect("localhost", "root", "", "registro");
	$consulta="SELECT * FROM admins WHERE nombrea='$nombrea' and passworda='$passworda'";
    $result=mysqli_query($conexion, $consulta);
	
	$filas=mysqli_num_rows($result);
	
    if($filas>0){
    echo "<script>
	alert('Bienvenido, $nombrea');
	location.href='inicioa.php'</script>";
    }
    else{
		echo "<script>
	alert('Datos incorrectos');
	location.href='ingresoa.php'</script>";

    } 
mysqli_free_result($result);
mysqli_close($conexion);	
