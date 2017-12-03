<?php
if(!empty($_POST)){
	$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");	
	foreach($_POST as $field_name=>$val){
		echo $field_name; //codigo del horario
		echo $val; // nombre del doctor		
				if(!empty($field_name)&&!empty($val)){					 
					mysqli_query($conexion,"UPDATE horarios set doctor='$val' where paciente='$field_name'");
					echo"registro modificado correctamente";
				}else{
					echo"no se pudo actualizar";
				}
	}
}
?>