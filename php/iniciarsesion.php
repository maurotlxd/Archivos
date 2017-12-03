<?php
if(!empty($_POST)){
	session_start();
	$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");	
	$user=$_POST['usuario'];
	$pass=$_POST["password"];
	
$pass=hash('sha512', $pass);

	
	$sql="SELECT * FROM usuarios WHERE idUsuario='$user'";
	$consulta=mysqli_query($conexion,$sql)or die(mysqli_error());
	if($fila=mysqli_fetch_array($consulta,MYSQL_ASSOC)){
         
		if($pass==$fila['password']){
$_SESSION['nom']=$fila['nombre'];
			$_SESSION['nombre']=$user;
			$_SESSION['tipo']=$fila['tipo'];
			echo $fila['tipo'];
		}else{
			session_destroy();
			mysqli_close($conexion);
			echo "contraseña incorrecta";
		}
		
	}else{
		session_destroy();
		mysqli_close($conexion);
		echo "Usuario Incorrecto !";
	}
}
?>