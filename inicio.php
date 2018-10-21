<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if($varsesion==null || $varsesion = ''){
	header("location:ingreso.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php'; ?>

<body class="bodie">
    <div class="filtro">
        <?php include 'view/navbar.php'; ?>

        <div class="container mt-4 pb-5">


            <div class="card mb-5">
                <div class="form-row">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/01.png">
                        <h1>Notificaciones <span class="badge badge-danger" style="position: absolute; font-size: 0.8rem;"> 2</span></h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-bell"></i> Notificaciones</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Nuevas notificaciones <span class="badge badge-danger">2</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="card mb-5">
                <div class="form-row">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/02.png">
                        <h1>Matemáticas</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-square-root-alt"></i> Matematicas</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="card mb-5">
                <div class="form-row">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/07.png">
                        <h1>Ingles</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-award"></i> Ingles</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mb-5">
                <div class="form-row">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/04.png">
                        <h1>Español</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-book"></i> Español</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="card mb-5">
                <div class="form-row ">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/10.png">
                        <h1>Sociales</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-globe-americas"></i> Sociales</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mb-5">
                <div class="form-row ">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/06.png">
                        <h1>Ciencias</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-flask"></i> Ciencias</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="ciencias.php" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="card mb-5">
                <div class="form-row ">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/08.png">
                        <h1>Etica</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-users"></i> Etica</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mb-5">
                <div class="form-row ">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/09.png">
                        <h1>Artes</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-paint-brush"></i> Artes</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mb-5">
                <div class="form-row ">
                    <div class="col-md-3 bg-light text-center asignatura">
                        <img class="logos img-fluid card-img-left" src="img/03.png">
                        <h1>Fisica</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <div><i class="fas fa-apple-alt"></i> Fisica</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-first">Ir al curso <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include 'view/foot.php'; ?>
</body>

</html>