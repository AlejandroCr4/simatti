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

<body class="administrador">
   <div class="filtro">
		<nav class="navbar navbar-expand-md sticky-top navbar-dark" style="background-color: #2e5a90;">
		  <a class="navbar-brand" href="#">Simatti</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		  	<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <div class="navbar-nav mr-auto ml-auto text-center">
		      <a class="nav-item nav-link active" href="#">Docentes</a>
		      <a class="nav-item nav-link" href="#">Buscar</a>
		      <a class="nav-item nav-link" href="#">Agregar</a>
		      <a class="nav-item nav-link" href="#">Eliminar</a>
		    </div>

		    <div class="navbar-nav text-center">
			
		
		<li class="nav-item dropdown">	
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Mi cuenta
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><?php echo $_SESSION['nombrea']?></a>
          <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
      </li>

		    </div>

		  </div>
		</nav><br>

	<div class="container">
    <div class="text-center box2 mx-auto">
		<h1 class="portada">Lista de profesores</h1><br>
		<div class="table-responsive">
			<table class="table table-sm table-striped table-hover table-dark table-bordered">
                <?php
                require_once("conexion.php");
                $registro = mysqli_query($conexion,"SELECT * FROM docentes")
                or die("problema en la consulta de datos".mysqli_error($conexion));
                echo "<thead>";
                echo "<tr>";
                echo "<th>Numero de registro</th>";
                echo "<th>Nombre</th>";
                echo "<th>Password</th>";
                echo "<th>Fecha de registro</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($fila = mysqli_fetch_array($registro))
                        {
                        echo "<tr>";
                        echo "<td>$fila[0]</td>";
                        echo "<td>$fila[1]</td>";
                        echo "<td>$fila[2]</td>";
                        echo "<td>$fila[3]</td>";
                        echo "</tr>";
                        }
                echo "</tbody>";
                ?>
                            </table>
                            </div>
                            <br>

                <form class="mx-auto">
                <div class="form-row">
                <div class="col">
                <input class="form-control btn btn-primary" type="button" onclick="javascript:location.href='agregar.php';" value="Agregar">
                </div>
                <div class="col">
                <input class="form-control btn btn-success" type="button" onclick="javascript:location.href='buscar.php';" value="Buscar">
                    </div>
                    <div class="col">
                <input class="form-control btn btn-danger" type="button" onclick="javascript:location.href='modificar.php';" value="Modificar / Borrar">
                    </div>
                    </div>
                </form>
            </div>
       </div>
		</div>
	<?php include 'view/foot.php' ?>
</body>
</html>
