<?php
if(!empty($_POST)){
	$conexion=(mysqli_connect("localhost","sistema4_citasmauro",'citasMedicas'));
mysqli_select_db($conexion,'sistema4_citas') or die ("no se encuentra la bd");	
	foreach($_POST as $field_name=>$val){
		$field_id=strip_tags(trim($field_name));
		$val=strip_tags(trim(mysqli_real_escape_string($conexion,$val)));
		$split_data=explode(':',$field_id);
		$id=$split_data[1];
		$field_name=$split_data[0];
		if($field_name=="dni"){
			$consultarcedula="SELECT * FROM datosusuario where dni='$val'";
			$resultadocedula=mysqli_query($conexion,$consultarcedula);
			$busquedacedula=mysqli_fetch_array($resultadocedula);
			if(empty($busquedacedula)){
				if(!empty($id)&&!empty($field_name)&&!empty($val)){					 
					mysqli_query($conexion,"UPDATE datosusuario set $field_name='$val' where dni='$id'");
					echo "registro modificado correctamente";
				}else{
					echo "no se pudo actualizar";
				}
			}else{
				
				
					echo "dni";
				
			}
		}else{
			if(!empty($id)&&!empty($field_name)&&!empty($val)){
				    echo "UPDATE datosusuario set $field_name='$val' where dni='$id'";
					mysqli_query($conexion,"UPDATE datosusuario set $field_name='$val' where dni='$id'");
					echo"registro modificado correctamente";
				}else{
					echo"no se pudo actualizar";
				}
		}
	}
}
?>