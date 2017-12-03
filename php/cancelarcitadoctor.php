<?php
if(!empty($_POST)){
	$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");	
	foreach($_POST as $field_name=>$val){
		$field_id=strip_tags(trim($field_name));
		$val=strip_tags(trim(mysqli_real_escape_string($conexion,$val)));
		$split_data=explode(':',$field_id);
		$field_name=$split_data[0];
//		echo "UPDATE datosusuario set cita='0' where idusuario='$val'";
//		echo "UPDATE horarios set paciente='' where id='$field_name'";
		if(!empty($field_name)&&!empty($val)){			
			mysqli_query($conexion,"UPDATE datosusuario set cita='0' where dni='$val'") or mysqli_error();
			mysqli_query($conexion,"UPDATE horarios set paciente='' where id='$field_name'") or mysqli_error();
			echo"true";
		}else{
			echo"false";
		}
	}
}
?>