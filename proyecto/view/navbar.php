<nav class="navbar navbar-expand-md sticky-top navbar-dark shadow" style="background-color: var(--simatti);">
    <a class="navbar-brand fontb" href="index.php"><i class="fas fa-pencil-alt"></i> SIMATTI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <!--se ejecuta en caso de que no haya ninguna sesion-->
<?php if(!isset($_SESSION["nombre"])){?>
    <div class="navbar-nav mx-auto text-center">
            <a class="nav-item nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
        </div>
        
        <div class="navbar-nav text-center">
            <a class="nav-item nav-link active" href="#"><i class="fas fa-user"></i> Iniciar sesión</a>
        </div>
        <?php } else{?>
               <div class="navbar-nav mx-auto text-center">
                <a class="nav-item nav-link" href="inicio.php">Asignaturas</a>
                <a class="nav-item nav-link" href="#">Evaluaciones</a>
                <a class="nav-item nav-link" href="#">Tareas</a>
            </div>
        <div class="navbar-nav text-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['nombre']?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Mi cuenta</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                </div>
            </li>
        </div>
        <?php } ?>
    </div>
</nav><br>