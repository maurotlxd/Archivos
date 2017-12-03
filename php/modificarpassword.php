<?php
if(!empty($_POST)){
	session_start();
	$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");
	$vieja=$_POST['password0'];
	$nueva=$_POST['password1'];
	$vieja=hash('sha512', $vieja);
	$nueva=hash('sha512', $nueva);
    $usuario=$_SESSION['nombre'];
	$sql="SELECT * FROM usuarios WHERE idUsuario='$usuario'";	
	$consulta=mysqli_query($conexion,$sql)or die(mysqli_error());
	if($fila=mysqli_fetch_array($consulta,MYSQL_ASSOC)){		
		if ($fila['password']==$vieja){
//			echo "antigua contraseña correcta";
			mysqli_query($conexion,"UPDATE usuarios set password='$nueva' where idUsuario='$usuario'");
			echo "contraseña cambiada";
		}else{
			echo "antigua contraseña incorrecta";
		}
	}
}

?>