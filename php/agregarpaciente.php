<?php
if(!empty($_POST)){
$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");	
	
	$dni=$_POST['dni'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido']; 
	$sangre=$_POST['sangre'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$fecha=$_POST['fecha'];
	$sexo=$_POST['sexo'];
	$password= $_POST['password'];
	$password2=$_POST['password2'];

	$password=hash('sha512',$password);
	$password2=hash('sha512',$password2);
	$tipo='usuario';
	$consultardni="SELECT * FROM datosusuario where dni='$dni'";
	$resultadodni=mysqli_query($conexion,$consultardni);
	$busquedadni=mysqli_fetch_array($resultadodni);

	$consultarusuario="SELECT * FROM usuarios where idUsuario='$dni'";
	$resultadousuario=mysqli_query($conexion,$consultarusuario);	
	$busquedausuario=mysqli_fetch_array($resultadousuario);

	if(empty($busquedadni) && empty($busquedausuario)){
	if (!empty($dni) && strlen($dni)==8 && is_numeric($dni)&& !empty($nombre) && strlen($nombre)>=5 && !empty($apellido) && strlen($apellido)>=5 && !empty($sangre) && !empty($direccion) && strlen($direccion)>=10 && filter_var($correo, FILTER_SANITIZE_EMAIL) && !empty($telefono) && strlen($telefono)==9 && is_numeric($telefono) && !empty($sexo)  && !empty($fecha) && !empty($password) && strlen($password)>=8 && !empty($password2) && strlen($password2)>=8 && $password2===$password){		
		$insertar="INSERT INTO usuarios (idUsuario,nombre, password, tipo) VALUES ('$dni','$nombre', '$password', '$tipo')";
        mysqli_query($conexion,$insertar) or die ("NO se pudo insertar usuario");
		$insertar="INSERT INTO datosusuario (dni, nombre, apellido, sangre, direccion, correo, telefono, fecha, sexo, cita) VALUES ('$dni', '$nombre', '$apellido', '$sangre', '$direccion', '$correo', '$telefono','$fecha', '$sexo', 0)";
        mysqli_query($conexion,$insertar) or die ("NO se pudo insertar datos personales");
        mysqli_close($conexion);
			echo"true";
		}}else{
		    if (!empty($busquedacedula)){
				echo "El Dni ya existe";
			}
		    if (!empty($busquedausuario)){
				echo "el Dni ya está registrado";
			}	
		}
}
?>