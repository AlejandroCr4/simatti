<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php';?>

<body class="administrador">
   <div class="filtro">
        <!--Barra de Navegacion-->
        <?php include 'view/navbar.php'; ?>

        <div class="container mt-5 pb-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="portada">
                        <h1>SIMATTI</h1> 
                        <p>Bienvenido al inicio de sesión para administradores</p>
                        <img src="img/Soacha.png">
                    </div>
                </div>	

                <div class="col-sm-6">
                    <div class="formulario p-5 mb-5">
                        <form action="logina.php" method="post">
                            <h1>INICIAR SESIÓN</h1>
                            <label for="nombrea"> USUARIO:</label><br>
                            <input type="text" name="nombrea" pattern="[A-Za-z0-9_-]{1,15}" required="required"><br>
                            <label for="identificacion">CONTRASEÑA:</label> <br>
                            <input type="password" name="passworda" pattern="[A-Za-z0-9_-]{1,15}" title="Caracteres no admitidos" required="required"><br>
                            <input class="btn boton1" type="submit" name="submit" value="ENTRAR">
                            <input type="button" class="btn boton1" value="INICIAR COMO DOCENTE" onclick="location.href='ingresod.php';"><br><br>
                            <p id="pass"><a href="registro.php"> ¿Olvidaste tu contraseña? </a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'view/foot.php';?>
</body>
</html>
