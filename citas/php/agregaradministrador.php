<?php
if(!empty($_POST)){
	$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");
	$dni=$_POST['dni'];
	$nombre=$_POST['nombre'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
$password=hash('sha512', $password);
$password2=hash('sha512', $password2);


	$tipo='admin';
	$id=null;
	$consultarusuario="SELECT * FROM usuarios where idUsuario='$dni'";
	$resultadousuario=mysqli_query($conexion,$consultarusuario);
	$busquedausuario=mysqli_fetch_array($resultadousuario);
	if(empty($busquedausuario)){
	
	     if (!empty($dni) && strlen($dni)==8 && !empty($nombre) && strlen($nombre)>=5 && !empty($password) && strlen($password)>5  && strlen($password2)>5 && !empty($password2) && $password2===$password){
			
			
		$insertar="INSERT INTO usuarios (idUsuario,nombre, password, tipo) VALUES ('$dni','$nombre', '$password', '$tipo')";
        mysqli_query($conexion,$insertar) or die ("NO se pudo insertar");
        mysqli_close($conexion);
			echo"true";
		}
}
	 else{
		    if(!empty($busquedausuario)){
				echo "El número de dni ya existe";
			}
		}

}
?>