<!DOCTYPE html>
<html lang="es">
<!--Datos del Head-->
<?php include 'view/head.php'; ?>

<body class="docente">
   <div class="filtro">
       <!--Barra de Navegacion-->
        <?php include 'view/navbar.php'; ?>

        <div class="container mt-5 pb-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="portada">
                        <h1>SIMATTI</h1> 
                        <p>Bienvenido al inicio de sesión docente</p>
                        <img src="img/Soacha.png">
                    </div>
                </div>	

                <div class="col-sm-6">
                    <div class="formulario p-5 mb-5">
                        <form action="logind.php" method="post">
                            <h1>INICIAR SESIÓN</h1>
                            <label for="nombred"> USUARIO:</label><br>
                            <input class="formularios" type="text" name="nombred" required="required"><br>
                            <label for="identificacion">CONTRASEÑA:</label> <br><input class="formularios" type="password" name="passwordd" required="required"><br>
                            <input class="boton1" type="submit" name="submit" value="ENTRAR">
                            <input type="button" class="boton1" value="INICIAR COMO ADMINISTRADOR" onclick="location.href='ingresoa.php';"><br><br>
                            <p id="pass"><a href="registro.php"> ¿Olvidaste tu contraseña? </a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <?php include 'view/foot.php'; ?>
</body>
</html>
