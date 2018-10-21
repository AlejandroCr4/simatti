<?php 
   session_start();
    $nombred=$_POST['nombred'];
	$_SESSION['nombred'] = $nombred;
    $passwordd=$_POST['passwordd'];
 
	$conexion=mysqli_connect("localhost", "root", "", "registro");
	$consulta="SELECT * FROM docentes WHERE nombred='$nombred' and passwordd='$passwordd'";
    $result=mysqli_query($conexion, $consulta);
	
	$filas=mysqli_num_rows($result);
	
    if($filas>0){
    echo "<script>
	alert('Bienvenido, $nombred');
	location.href='inicio.php'</script>";
    }
    else{
		echo "<script>
	alert('Datos incorrectos');
	location.href='ingreso.php'</script>";

    } 
	
mysqli_free_result($result);
mysqli_close($conexion);	
