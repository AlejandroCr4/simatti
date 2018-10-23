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
        <?php include 'view/navadmin.php'; ?>
        <div class="container busqueda mt-5">

            <div class="text-center mx-auto box2 p-4">
                <h1 class="text-center wow fadeIn title" style="color: white;">Resultados de la busqueda</h1><br>
                <div class="table-responsive-md wow fadeIn">
                    <table class="table table-sm table-striped table-hover table-dark table-bordered">
                        <thead>
                            <tr>
                                <?php
error_reporting(0);
require_once("conexion.php");
               $tabla = $_POST['tabla'];
            
           if($_POST[tabla]=='usuarios'){
            echo"
            <th>ID</th>
            <th>Nombre</th>
            <th>Identificacion</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Fecha de registro</th>";
           }
            if($_POST[tabla]=='calabozo'){
            echo"
            <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Ubicacion</th>";
            }
            if($_POST[tabla]=='juzgado' || $_POST[tabla]=='clase'){
            echo"
            <tr>
            <th>Codigo</th>
            <th>Nombre</th>";
            }
?>
                            </tr>
                        </thead>
                        <?php
$busq = mysqli_query($conexion,"SELECT * FROM $_POST[tabla] WHERE $_POST[campo] LIKE '$_POST[buscar]%'")
or die("Problema en la consulta de datos".mysqli_error($conexion));
echo "<tbody>";
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
            echo "</tbody>";
?>

                    </table>
                </div><br>


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