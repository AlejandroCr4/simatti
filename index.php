<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php';?>

<body class="bodie">
    <nav class="navbar navbar-expand-md sticky-top navbar-dark shadow" style="background-color: var(--simatti);">
        <a class="navbar-brand fontb" href="index.php"><i class="fas fa-pencil-alt"></i> Simatti</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto ml-auto text-center">
                <a class="nav-item nav-link active" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                <a class="nav-item nav-link" href="#aboutus">¿Quienes somos?</a>
                <a class="nav-item nav-link " href="#infor">FAQ</a>
            </div>
            <?php if(!isset($_SESSION["nombre"])){?>
            <div class="navbar-nav text-center">
                <a class="nav-item nav-link" href="registro.php"><i class="fas fa-user"></i> Registrate</a>
            </div>
            <?php } else { ?>
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
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Facil y Accsequible</h5>
                    <p>Puedes ingresar a esta plataforma desde tu dispositivo movil o computador</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Herramientas TIC</h5>
                    <p>En Simatti podras encontrar diversas herramientas para desarrollar tus tareas y trabajos, desde videos, textos hasta guias</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Aprendizage seguro</h5>
                    <p>desde esta plataforma estudiantes y maestros podran conectarse y compartir dudas y respuestas frente las actividades</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!-- estructura principal de la pagina-->
    <div class="header">
        <div class="start">
            <span class="division wow fadeInUp">
                Simatti
            </span>
            <p class="wow fadeInUp">Esta es una plataforma enfocada al desarrollo de tareas y actividades con participacion activa de estudiantes, estudiantes y padres de familia o acudientes.<br>
                Si eres profesor o administrativo inicia sesion dando click en algunas de los botones de abajo<br>
                Si eres estudiante o acudiente da click en iniciar como estudiante</p>
            <h4 class="text-center wow fadeInUp">Iniciar como:</h4>
            <div class="text-center btn-group row d-flex flex-row justify-content-center wow fadeInUp">
                <input class="inicios btn btn-lg btn-outline-light" type="button" value="Estudiante" onclick="location.href='ingreso.php';">
                <input class="inicios btn btn-lg btn-outline-light" type="button" value="Padre" onclick="location.href='ingresop.php';">
                <input class="inicios btn btn-lg btn-outline-light" id="aboutus" type="button" value="Docente" onclick="location.href='ingresod.php';">
                <input class="inicios btn btn-lg btn-outline-light" type="button" value="Administrador" onclick="location.href='ingresoa.php';">
            </div>
        </div>
    </div>

    <section class="info">
        <h2 class="wow fadeInUp">¿Quienes somos?</h2>
        <p class="wow fadeInUp">
            Simatti es un proyecto iniciado por estudiantes de Uniminuto de Tecnologia en informatica y Psicologia, el objetivo del proyecto el reforzar el desarrollo de tareas y actividades con ayuda de una plataforma web en donde los padre puedan ver las actividades y tareas pendientes de sus hijos y los docentes puedan subir las actividades a un lugar fiable y seguro.<br>
            Junto a los padres de familia se quiere llevar un desarrollo de actividades pendientes, mejorando en gran medida el conocimiento que tienen los padres frente a las actividades y tareas que sus hijos tienen.
        </p>
    </section>

    <div class="body">
        <div class="arise">
            <span class="division">
                inicia ya
            </span><br>
            <input class="btn btn-lg btn-light" type="button" value="Registrate">
        </div>
    </div>

    <section class="info">
        <h2>Apoya el futuro de tus hijos</h2>
        <p>
            Enseñar es dejar una huella en la vida de una persona
        </p>
    </section>


    <div class="foot">
        <div class="arise">
            <span class="division">
                Educación
            </span>
        </div>
    </div>

    <section class="info infor" id="infor">
        <h2>Preguntas frecuentes</h2>
        <p>
            <strong>¿Que hace la app?</strong><br>
            La app permitirá a los docentes de una institución educativa a subir material para realizar ya sean actividades o tareas para sus estudiantes<br><br>
            <strong>¿Que me permite hacer?</strong><br>
            Te ayudará a ti como docente a subir todos los trabajos para los estudiantes a una plataforma donde podrás estar al pendiente más fácil de todos las tareas.<br>
            Te ayudará a ti como estudiante a estar pendiente y al tanto de todas las tareas que tienes pendientes poder hacer<br>
            Te ayudará a ti como padre a estar al pendiente de todos los deberes que tu hijo tiene<br><br>
            <strong>¿Cómo puedo utilizarla?</strong><br>
            Para usar la aplicación solo tendrás que ingresar a la página web desde tu navegador favorito e ingresar directamente, antes de esto si es que no tienes una cuenta puedes registrarte desde la página de registro de la aplicación.<br><br>
            <strong>¿Desde donde puedo ingresar?</strong><br>
            Puedes ingresar desde un computador o dispositivo con acceso a internet a la página oficial de la aplicación o descargando la app<br><br>
            <strong>¿Quién tiene acceso a esa plataforma y/o app?</strong><br>
            puede ingresar solo las personas que sean de la institución educativa que estén registradas en la plataforma
        </p>
    </section>

    <div class="footer">
        <div class="arise">
            <span class="division">
                Desarrollo social
            </span>
        </div>
    </div>
    <?php include 'view/foot.php'; ?>
</body>
</html>