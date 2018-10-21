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
		<nav class="navbar navbar-expand-md sticky-top navbar-dark" style="background-color: var(--simatti);">
		  <a class="navbar-brand fontb" href="index.php"><i class="fas fa-pencil-alt"></i> SIMATTI</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		  	<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <div class="navbar-nav mr-auto ml-auto text-center">
		      <a class="nav-item nav-link" href="#">Docentes</a>
		      <a class="nav-item nav-link active" href="#">Buscar</a>
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

	<div class="container ">
		<div class="text-center mx-auto box shadow">
		<h2>Buscar profesores</h2><br>
            <form id="form1" name="form1" method="post" action="buscar2.php">
                <label for="select">Buscar por: </label>
                <select class="form-control" name="campo" id="select">
                    <option value="nombred">Nombre</option>
                    <option value="passwordd">Contraseña</option>
                    <option value="fecharegd" selected="selected">Fecha de registro</option>
                </select><br><br>
                <input class="form-control" placeholder="ingrese aqui el dato" type="search" name="buscar"><br><br>
                <div class="form-row">
                <div class="col">
                <input class="form-control form-control-lg btn btn-success" type="submit" value="BUSCAR">
                    </div>
                    <div class="col">
                <input class="form-control form-control-lg btn btn-first" type="button" onclick="javascript:location.href='inicioa.php';" value="CANCELAR">
                    </div>
                </div>
            </form>
            </div>
		</div>
	</div>
	<?php include 'view/foot.php'; ?>
</body>
</html>