
<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombrea'];

if($varsesion==null || $varsesion = ''){
	echo 'Usted no tiene autorizacion';
	die(); 
}

?>

<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php'; ?>

<body class="docente">
   <div class="filtro">
		<nav class="navbar navbar-expand-md sticky-top navbar-dark" style="background-color: #2e5a90;">
		  <a class="navbar-brand fontb" href="index.php">Simatti</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		  	<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <div class="navbar-nav mr-auto ml-auto text-center">
		      <a class="nav-item nav-link" href="inicioa.php">Docentes</a>
		      <a class="nav-item nav-link active" href="buscar.php">Buscar</a>
		      <a class="nav-item nav-link" href="#">Agregar</a>
		      <a class="nav-item nav-link" href="modificar.php">Eliminar</a>
		    </div>

		    <div class="navbar-nav text-center">
			
		
		<li class="nav-item dropdown">	
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Mi cuenta
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><?php echo $_SESSION['nombrea']?></a>
          <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logouta.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
      </li>

		    </div>

		  </div>
		</nav>
<div class="container busqueda mt-5">
    
		<div class="text-center mx-auto box2 p-4">
		<h1 class="text-center wow fadeIn title" style="color: white;">Resultados de la busqueda</h1><br>
		<div class="table-responsive-md wow fadeIn">
		<table class="table table-sm table-striped table-dark table-bordered pb-5"><tr>
        <?php
error_reporting(0);
require_once("conexion.php");
               $tabla = $_POST['tabla'];
            
           if($_POST[tabla]=='usuarios') {echo"
            <tr>
            <th scope='col'>Nodo</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Apellido</th>
            <th scope='col'>Categoria</th>
            <th scope='col'>Funcion</th>
            <th scope='col'>Nivel</th>
            </tr>";}
            if($_POST[tabla]=='calabozo') {echo"
            <tr>
            <th scope='col'>Codigo</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Ubicacion</th>
            </tr>";}
            if($_POST[tabla]=='juzgado' || $_POST[tabla]=='clase') {echo"
            <tr>
            <th scope='col'>Codigo</th>
            <th scope='col'>Nombre</th>
            </tr>";}

$busq = mysqli_query($conexion,"SELECT * FROM $_POST[tabla] WHERE $_POST[campo] LIKE '$_POST[buscar]%'")
or die("Problema en la consulta de datos".mysqli_error($conexion));

while($resul = mysqli_fetch_array($busq))
{
	if($_POST[tabla]=='usuarios'){
    echo "<tr>";
	echo "<td>$resul[0]</td>";
	echo "<td>$resul[1]</td>";
	echo "<td>$resul[2]</td>";
	echo "<td>$resul[3]</td>";
	echo "<td>$resul[4]</td>";
	echo "<td>$resul[5]</td>";
	echo "</tr>";
    }
    if($_POST[tabla]=='estudiante'){
    echo "<tr>";
	echo "<td>$resul[0]</td>";
	echo "<td>$resul[1]</td>";
	echo "<td>$resul[2]</td>";
	echo "</tr>";
    }
    if($_POST[tabla]=='clase'){
    echo "<tr>";
	echo "<td>$resul[0]</td>";
	echo "<td>$resul[1]</td>";
	echo "</tr>";
    }
}
?>
            </table></div><br>


<div class="form-row wow fadeIn">
<div class="col">
<input class="form-control btn btn-primary" type="button" onclick="location.href='bus.php';" value="Nueva busqueda">
    </div>
    <div class="col">
    <form method="post" action="total.php">
<input type="hidden" value="<?php echo $tabla;?>" name="tabla">
<input class="form-control btn btn-success" type="submit" value="Mostrar todos">
    </form>
    </div>   
            </div>
 </div>
		</div>
	<!--<div class="container">
		<div class=" text-center mr-auto ml-auto">
		<h1 class="text-center ml-auto mr-auto portada">Resultados de la busqueda</h1><br><br><br>
		<table class="table table-striped table-dark table-bordered"><tr>
            <tr>
            <th scope='col'>Nombre</th>
            <th scope='col'>Contraseña</th>
            <th scope='col'>Fecha de registro</th>
            </tr>
<?php/*
error_reporting(0);
require_once("conexion.php");

$busq = mysqli_query($conexion,"SELECT * FROM docentes WHERE $_POST[campo] LIKE '$_POST[buscar]%'")
or die("Problema en la consulta de datos".mysqli_error($conexion));

while($resul = mysqli_fetch_array($busq))
{
	echo "<tr>";
	echo "<td>$resul[1]</td>";
	echo "<td>$resul[2]</td>";
	echo "<td>$resul[3]</td>";
	echo "</tr>";
}*/
?>
            </table>



<input class="btn boton1" type="button" onclick="javascript:location.href='buscar.php';" value="Nueva busqueda" />
<input class="btn boton1" type="button" onclick="javascript:location.href='inicioa2.php';" value="Mostrar todos" />
 </div>
		</div>-->
	</div>
	<?php include 'view/foot.php'; ?>
</body>
</html>