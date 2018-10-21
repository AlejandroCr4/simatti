<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php';?>

<body class="bodie">
    <nav class="navbar navbar-expand-md sticky-top navbar-dark" style="background-color: #2e5a90;">
        <a class="navbar-brand" href="#">Simatti</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto ml-auto text-center">
                <a class="nav-item nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
            </div>
            <div class="navbar-nav text-center">
                <a class="nav-item nav-link" href="ingreso.php">Iniciar sesión</a>
                <a class="nav-item nav-link active" href="#"><i class="fas fa-user"></i> Registrate</a>
            </div>
        </div>
    </nav><br>

    <div class="container mt-5 pb-5">
        <div class="row d-flex flex-row justify-content-around">
            <div class="col-sm-5">
                <div class="portada">
                    <h1>SIMATTI</h1>
                    <p>Plataforma para la ayuda academica en el desarrollo de actividades y tareas</p>
                    <img src="img/Soacha.png">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="formulario p-5">
                    <form action="formulario2.php" method="post" name="form" enctype="multipart/form-data">
                        <h1>REGISTRO</h1>
                        <label for="nombre">NOMBRE: </label><br>
                        <input class="formularios" type="text" name="nombre" id="nombre" size="20" maxlength="20" required="required">
                        <br>

                        <label for="identificacion">INDENTIFICACION:</label> <br>
                        <input class="formularios" type="number" name="identificacion" id="identificacion" required="required">
                        <br>

                        <label for="email">CORREO:</label> <br>
                        <input class="formularios" type="email" name="email" id="email" required="required">
                        <br>

                        <label for="password">CONTRASEÑA:</label> <br>
                        <input class="formularios" type="password" name="password" id="password" size="20" maxlength="20" required="required">
                        <br>

                        <label for="sexo">SEXO:</label> <br>

                        <div class="form-check form-check-inline d-flex flex-row justify-content-around">
                            <input class="form-check-input" type="radio" onClick="marcado=true" value="Mujer" name="sexo" id="sexo" value="Mujer">
                            <label class="form-check-label" for="sexo">Mujer</label>

                            <input class="form-check-input" type="radio" onClick="marcado=true" value="Hombre" name="sexo" id="sexo" value="Hombre">
                            <label class="form-check-label" for="sexo">Hombre</label>
                        </div>
                        <br>

                        <label for="fechanac">FECHA DE NACIMIENTO:</label> <br>
                        <input class="formularios" type="date" id="fechanac" name="fechanac">
                        <br>

                        <input class="boton1" type="submit" name="submit" id="enviar" value="REGISTRARSE" onClick="check(this.form); ch();">
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php include 'view/foot.php'; ?>d
</body>

</html>