<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombrea'];

if($varsesion==null || $varsesion = ''){
	header("location:error.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php'; ?>

<body class="docente">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['nombrea']?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Mi cuenta</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logouta.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                </div>
            </li>
        </div>

		  </div>
		</nav><br>

	<div class="container mt-3">
		<div class="row">
		<div class="col-sm ">
            <div class="box1 my-4 p-4 border">
            <h1 class="text-center">Bienvenido</h1>
            <hr>
		    Bienvenido administrador, aqui podra realizar los cambios en la base de datos de estudiantes y docentes
		    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quis non ipsum fugiat et sit eaque fuga aperiam eveniet, similique nostrum eius ipsa. Sequi eligendi veniam ex tempore soluta. Obcaecati.
		    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure doloribus non alias et deserunt, necessitatibus fugiat beatae veritatis! Animi facilis voluptas at, nemo perferendis similique debitis culpa. Dolores, tenetur, non!
		    <hr>
		    Lorem ipsum.
		    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur id sed molestiae maiores rem reiciendis quam tempore autem aut consequatur suscipit animi magni omnis, modi iure porro neque. Modi pariatur voluptates provident, miboriosam incidunt rem necessitatibus animi, consectetur sed laudantium dolorem consequuntur quasi, harum numquam veritatis suscipit magnam assumenda! Tempora modi deserunt dolores, inventore praesentium laborum doloribus accusamus vitae quidem?
		    </div>
		</div>
		<div class="col-sm mb-5">
		<h1 class="text-center portada">Bases de datos</h1>
                <form class="mx-auto">
                <input class="btn boton1" type="button" onclick="javascript:location.href='agregar.php';" value="Editar 'Estudiantes'">
                <input class="btn boton1" type="button" onclick="javascript:location.href='inicioa2.php';" value="Editar 'Docentes'">
                <input class="btn boton1" type="button" onclick="javascript:location.href='logouta.php';" value="Salir">
                </form>
            </div>
            </div>
		</div>
	</div>
	<?php include 'view/foot.php'; ?>
</body>
</html>
