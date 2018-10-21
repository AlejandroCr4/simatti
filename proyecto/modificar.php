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
          <a class="dropdown-item" href="logouta.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
      </li>

		    </div>

		  </div>
		</nav><br>

	<div class="container">
		<h1 class="text-center ml-auto mr-auto portada">Modificar y/o eliminar profesores</h1><br><br>
<form class="form" name='ejecuta' method='post' action='modificar2.php'>
<table class="table table-striped table-dark table-bordered">
<tr>
<td>Numero de registro</td>
<td>Nombre</td>
<td>Password</td>
<td>Modificar <i class="fas fa-pencil-alt"></i></td>
<td>Eliminar <i class="fas fa-trash-alt"></i></td>
</tr>

                <?php
                require_once("conexion.php");
                header('Content-Type: text/html; charset=ISO-8859-1');
                /* Obtener todos los datos que esten contenidos
                en la tabla con una consulta */

                $sql = "SELECT * FROM docentes";
                $resultado = mysqli_query($conexion,$sql);


                $i = 0; //iniciamos nuestro cont en cero
                /*el siguiente bucle nos permite obtener la informacion obtenida
                de la ejecucion de la sentencia de sql */
              
                while($row = mysqli_fetch_row($resultado))
                {
                    echo "<tr>
                    <td><input type='hidden' name='idd[$i]' value='".$row[0]."' />".$row[0]."</td>
                    <td><input type='text' size='20px' required='required' name='nombred[$i]' value='".$row[1]."' /></td>
                    <td><input type='text' size='20px' required='required' name='passwordd[$i]' value='".$row[2]."' /></td>

                    <td><input type='radio' name='seleccion[$i]' value='modifica".$row[0]."'></td>

                    <td><input type='radio' name='seleccion[$i]' value='elimina".$row[0]."'></td>
                    <tr>";
                    ++$i;
                }

                ?>
                </table>
                <input class="btn boton1" type="submit" value="Enviar">
                <input class="btn boton1" type="button" onclick="javascript:cambiapag();" value="Cancelar">
                </form>

                <script>
                function cambiapag()
                {
                    location.href="inicioa.php"
                }
                </script>

		</div>
	</div>
</body>
<footer class="fixed-bottom">
Copyright © 2018 Desarrollado por INGPSI
</footer>
</html>
