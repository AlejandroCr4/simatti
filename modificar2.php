<?php
require_once("conexion.php");

if(empty($_POST['seleccion']))
{
	echo "<script>
		alert('Seleccione modificar o eliminar');
		history.back();
		</script>";
}
else
{
	foreach ($_POST['seleccion'] as $indice => $valor)
	{
		//vamos a verificar si trae la opcion de eliminar o modificar
		$opcion = substr ($_POST['seleccion'][$indice],0,1); //extraemos la parte de la cadena que elimina y/o modifica
		switch($opcion)
		{
			//generamos la sentencia para la modificacion filtrando por el id para que solo cambie ese registro
			case 'm':
                $sql="UPDATE docentes SET
                nombred='".$_POST['nombred'][$indice]."',
                passwordd='".$_POST['passwordd'][$indice]."'WHERE idd=".$_POST['idd'][$indice];
            break;
                
			case'e':
                $sql="DELETE FROM docentes WHERE idd=".$_POST['idd'][$indice];
            break;
                
            default: 
                echo "<script>
                alert('Seleccione modificar o eliminar');
                history.back();
                </script>"; 
            break;
		}
		$resultado = mysqli_query($conexion,$sql)or die("ERROR AL EJECUTAR LA CONSULTA ".$_POST['seleccion'].":".mysqli_error($conexion));
	}
	if(!$resultado)
	{
	echo "<script>
		alert('No ha seleccionado la opcion modificar o eliminar');
		location.href='modificar.php'
		</script>";
	}
	if($resultado)
	{
		echo "<script>
		alert('Modificacion o Eliminacion ejecutada correctamente');
		location.href='modificar.php'
		</script>";
	}
}
?>