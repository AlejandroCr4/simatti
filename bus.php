<!DOCTYPE html>
<html lang="es">
<?php include 'view/head.php'; ?>

<body class="docente">
   <div class="filtro">
    <?php include 'view/navbar.php'; ?>
    <div class="container">
        <div class="mx-auto box">
            <div class="form mx-auto">
                <h1 class="text-center">Buscar</h1>
                <hr>
                <form id="form1" class="form-group" method="post" action="">
                    <div class="form-row align-center">
                        <div class="form-group col-md-9">

                            <select form="form1" class="form-control form-control form-control-sm mb-3" name="seleccion" id="seleccion">
                                <option selected value="alerta">Selecciona la tabla para buscar los datos</option>
                                <option value="docente">Docentes</option>
                                <option value="usuarios">Estudiantes</option>
                                <option value="clase">Clases</option>
                                <option value="padre">Padres</option>

                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <input class=" btn btn-sm btn-primary" type="submit" value="Seleccionar" name="bus">
                        </div>
                    </div>
                    <small class="form-text text-muted mb-3">Los datos seran buscados en la tabla que elija</small>
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" onclick="location.href='bus.php';">
                        <i class="fas fa-undo-alt"></i> Reiniciar
                    </button>
                </form>

                <?php


    if(isset($_POST['bus'])){
    $seleccion = $_POST['seleccion'];
        
        if($seleccion=='alerta'){
            echo "<script>
            alert('Seleccione alguna de las tablas en la lista');
            location.href='bus.php';
            </script>";
            }
        
        if($seleccion=='usuarios'){
            echo"   <form id='form1' name='form1' class='form-group' method='post' action='buscar2.php'>
                <input type='hidden' value='usuarios' name='tabla'>
                <label for='select'>Buscar por: </label>
                <select class='form-control form-control-sm' name='campo' id='select'>
                    <option value='id'>ID</option>
                    <option value='nombre'>Nombre</option>
                    <option value='identificacion'>Identificacion</option>
                    <option value='password'>Password</option>
                    <option value='fechanac'>Fecha de nacimiento</option>
                    <option value='sexo'>Genero</option>
                    <option value='fechareg'>Fecha de registro</option>
            </select><br>";
        }
        
        if($seleccion=='arma'){
            echo"<script>
            location.href='arma.php'
            </script>";  
        }
        
        if($seleccion=='armxpol'){
            echo"<script>
            location.href='armxpol.php'
            </script>";
        }
        
        if($seleccion=='calabozo'){
            echo"   <form id='form1' name='form1' class='form-group' method='post' action='buscar2.php'>
                <input type='hidden' value='calabozo' name='tabla'>
                <label for='select'>Buscar por: </label>
                <select class='form-control form-control-sm' name='campo' id='select'>
                    <option value='codcal'>Codigo</option>
                    <option value='nomcal'>Nombre</option>
                    <option value='ubicacion'>Ubicacion</option>
                </select><br>";
        }
        if($seleccion=='calxdel'){
            echo"<script>
            location.href='calxdel.php'
            </script>";
        }
        
        if($seleccion=='caso'){
            echo"<script>
            location.href='caso.php'
            </script>";
        }
        
        if($seleccion=='categoria'){
            echo"<script>
            location.href='categoria.php'
            </script>";
        }
        
        if($seleccion=='delincuente'){
            echo"<script>
            location.href='delincuente.php'
            </script>";
        }
        
        if($seleccion=='delxcas'){
            echo"<script>
            location.href='delxcas.php'
            </script>";
        }
        
        if($seleccion=='juzgado'){
            echo"   <form id='form1' name='form1' class='form-group' method='post' action='buscar2.php'>
                <input type='hidden' value='juzgado' name='tabla'>
                <label for='select'>Buscar por: </label>
                <select class='form-control form-control-sm' name='campo' id='select'>
                    <option value='codjuz'>Codigo</option>
                    <option value='nombrejuz'>Nombre</option>
                </select><br>";
        }
        
        if($seleccion=='policia'){
            echo"   <form id='form1' name='form1' class='form-group' method='post' action='buscar2.php'>

                <input type='hidden' value='policia' name='tabla'>
                <label for='select'>Buscar por: </label>
                <select class='form-control form-control-sm' name='campo' id='select'>
                    <option value='nodocpol'>Nodo</option>
                    <option value='nombrepol'>Nombre</option>
                    <option value='apellidopol'>Apellido</option>
                    <option value='codcat'>Categoria</option>
                    <option value='funcionpol'>Funcion</option>
                    <option value='superior'>Nivel</option>
                </select><br>";
        }
        
        if($seleccion=='polxcas'){
            echo"<script>
            location.href='polxcas.php'
            </script>";
        }
    

        echo"  <div class='input-group mb-3'>
        <label for='polbus'>Dato a buscar:</label>
        <div class='input-group mb-2'>
        
        <div class='input-group-prepend'>
          <div class='input-group-text'><i class='fas fa-search'></i></div>
        </div>
        
        <input class='form-control form-control-sm' placeholder='Ingrese aqui el dato a buscar' type='search' name='buscar' id='polbus' required>
      </div>
        </div>
        <div class='form-row'>
    <input type='button' class='mx-2 mb-3 col btn btn-dark btn-lg' style='border: solid 1px #dbdce257' onclick='javascript:location.href='inicioa.php';' value='Cancelar'>
    <input class='mx-2 mb-3 col btn boton btn-primary btn-lg' style='border: solid 1px #dbdce257' value='Buscar $seleccion' type='submit' name='subpolicia'>
    </div>
           <small class='form-text text-muted mb-3'>Los datos seran buscados en la tabla <span class=' text-success'> $seleccion</span></small>
<button type='button' class='btn btn-sm btn-outline-primary' data-toggle='modal'onclick='javascript:location.href='policia.php';'>
 <i class='fas fa-undo-alt'></i> Regresar al formulario de registro 
</button>

            </form>";
    }
?>
            </div>
        </div>
    </div>
    </div>
    <?php include 'view/foot.php'; ?>
</body>

</html>