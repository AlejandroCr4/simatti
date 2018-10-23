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
		<?php include 'view/navadmin.php'; ?>

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
