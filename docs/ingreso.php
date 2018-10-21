<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php'; ?>

<body class="bodie">
<div class="filtro">
        <!--Barra de Navegacion-->
        <?php include 'view/navbar.php'; ?>

    <div class="container mt-5 pb-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="portada mb-5">
                    <h1>SIMATTI</h1>
                    <p>Plataforma para la ayuda academica en el desarrollo de actividades y tareas</p>
                    <img class="img-fluid" src="img/Soacha.png">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="formulario p-5 mb-5">
                    <form action="login.php" method="post">
                        <h1>INICIAR SESIÓN</h1>
                        <label for="nombre"> USUARIO:</label><br>
                        <input type="text" name="nombre" required="required"><br>
                        <label for="identificacion">CONTRASEÑA:</label><br>
                        <input type="password" name="password" required="required"><br>
                        <input class="btn boton1" type="submit" name="submit" value="ENTRAR">
                        <a href="registro.php"><input type="button" class="btn boton1" value="REGISTRARSE">
                        </a><br><br>
                        <p id="pass"><a href="registro.php"> ¿Olvidaste tu contraseña? </a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'view/foot.php'; ?>
</body>
</html>