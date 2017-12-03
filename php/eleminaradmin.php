<?php

if(isset($_POST['id'])){

	$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");	
	//foreach($_POST as $field_name=>$val){
		$field_id=strip_tags(trim($_POST['id']));
		if(!empty($field_id)){
			mysqli_query($conexion,"DELETE FROM usuarios where idUsuario='$field_id'") or mysqli_error();
			echo "true";
		}else{
			echo "false";
		}
	//}
}
?>