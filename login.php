<?php 
/*Inicio de sesion con mysqli POO*/

//se usan APIS de PHP para evitar injecciones sql 
//apis como validar si es que la peticion no este vacia y sea de tipo ajax
/*require 'conexion.php';*/

/*$estudiante = $mysqli->query();
//se ejecuta en caso de que la consulta tenga mas de 0 usuarios
if($usuarios->num_rows > 0):
$datos= $estudiante->fetch_assoc();
echo json_encode(array('error'=>false, 'curso' => $datos['curso']));
else:
echo json_encode(array('error'=>true));
endif;*/
//detecta si la peticion de envio de datos fue realizada desde ajax
//se ejecuta si es que la peticion no esta vacia y es de tipo AJAX
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){
    require 'conexion.php';
    sleep(1);
    session_start();
    //se especifica que caracteres son los que va a escapar la funcion de real escape
    $mysqli->set_charset('utf8');
    
    //escapa cualquiere caracter especial en los datos recibidos de usuario y contraseña desde el formulariop de logeo
    $estudiante = $mysqli->real_escape_string($_POST['nombre']);
    $password = $mysqli->real_escape_string($_POST['password']);
    //se coloca ? para especificar que la consulta recibira parametros
    if($nueva_consulta = $mysqli-> prepare("SELECT nombre, curso FROM usuarios WHERE nombre = ? AND password = ? ")){
        //traemos al parametro de la variable y con el metodo bindParam 
        //se usa ss para declar que los tipos de datos recibidos seran de tipo string
        $nueva_consulta->bind_Param('ss', $estudiante, $password);
        $nueva_consulta->execute();
        $resultado=$nueva_consulta->get_result();
        
        if($resultado->num_rows>0){
            $datos=$resultado->fetch_assoc();
            $_SESSION['usuario'] = $datos;
                echo json_encode(array('error'=>false, 'curso' => $datos['curso']));
        } else{
                echo json_encode(array('error'=>true));
        }
            $nueva_consulta->close();
    }
}
$mysqli->close();


/*Inicio de sesion con mysqli estructurado
    session_start();
    $nombre=$_POST['nombre'];
	$_SESSION['nombre'] = $nombre;
    $password=$_POST['password'];
 
	$conexion=mysqli_connect("localhost", "root", "", "registro");
	$consulta="SELECT * FROM usuarios WHERE nombre='$nombre' and password='$password'";
    $result=mysqli_query($conexion, $consulta);
	
	$filas=mysqli_num_rows($result);
	
    if($filas>0){
        echo "<script>
	alert('Bienvenido, $nombre');
	location.href='inicio.php'
    </script>";
    }

    else{
		echo "<script>
	alert('Datos incorrectos');
	location.href='ingreso.php'
    </script>";

    } 
	
mysqli_free_result($result);
mysqli_close($conexion);
*/