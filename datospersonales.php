<?php
session_start();
 
if (!isset($_SESSION['nombre'])){
      header('Location: index.php');
}
          ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Mis datos personales</title>
</head>
<body>
   <div class="container-fluid quitarPadding">
	<nav class="navbar navbar-default barraAzul">
		<div class="container-fluid quitarPadding">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="frmusuario.php" class="navbar-brand" style="color: white;">Usuario
				<?php
					
					echo $_SESSION['nombre'];
					?>
				</a>
			</div>		
			<div class="collapse navbar-collapse quitarPadding" id="miMenu">
				<ul class="nav navbar-nav">
					<li><a href="datospersonales.php" style="color: white;">Datos personales</a></li>
					<li><a href="horarios.php" style="color: white;">Horarios</a></li>	
													
				</ul>
				<ul class="nav navbar-nav navbar-right quitarMargin">
					<li><a onclick="cambiar();" href="#" style="color: white;">Cambiar contraseña</a></li>
					<li><a href="php/cerrarsesion.php" style="color: white;">Salir</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="container-fluid">
<div class="panel panel-default">
    <div class="panel-heading">MIS DATOS PERSONALES</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>NOMBRE DE USUARIO</th>
					<th>CEDULA</th>	
					<th>NOMBRE</th>	
					<th>APELLIDO</th>	
					<th>SANGRE</th>	
					<th>DIRECCION</th>	
					<th>CORREO</th>	
					<th>TELEFONO</th>	
					<th>FECHA DE NACIMIENTO</th>	
					<th>SEXO</th>	
											
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
					 $user=$_SESSION['nombre'];
				     $result=mysqli_query($conexion,"SELECT * FROM datosusuario where dni='$user'");				    
				     while ($usuarios=mysqli_fetch_array($result)){					 
					 echo "<tr><td id='id:$user' class='cam_editable'>".$user."</td>";
					 echo "<td id='dni:$user' class='cam_editable' contenteditable='true'>".$usuarios['dni']."</td>";
				     echo "<td id='nombre:$user' class='cam_editable' contenteditable='true'>".$usuarios['nombre']."</td>";
					 echo "<td id='apellido:$user' class='cam_editable' contenteditable='true'>".$usuarios['apellido']."</td>";
					 //////////////////////////////////////
					 echo "<td id='sangre:$user' class='cam_editable' contenteditable='true'>".$usuarios['sangre']."</td>";
					 echo "<td id='direccion:$user' class='cam_editable' contenteditable='true'>".$usuarios['direccion']."</td>";
					 echo "<td id='correo:$user' class='cam_editable' contenteditable='true'>".$usuarios['correo']."</td>";
					 echo "<td id='telefono:$user' class='cam_editable' contenteditable='true'>".$usuarios['telefono']."</td>";
					 echo "<td id='fecha:$user' class='cam_editable' contenteditable='true'>".$usuarios['fecha']."</td>";
					 echo "<td id='sexo:$user' class='cam_editable' contenteditable='true'>".$usuarios['sexo']."</td>";
					  
					 echo"</tr>";
					 }
				?>				
			</tbody>					
		</table>
	</div>
	</div>	
	</div>
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">cambiar contraseña</h4>
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>vieja contraseña</label>
                  <input  name="password0" id="p" class="form-control" type="password"required>
                </div>
                <div class="form-group">
                  <label>nueva contraseña</label>
                  <input  name="password1" id="p3" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita nueva password</label>
                  <input  name="password2" id="p4" class="form-control" type="password" required>
                </div> 
                 <button type="submit" class="btn btn-Azul btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cambiar
                </button> 
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
<!--//////////////////////////////////////////////////-->	
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/messages_es.js" type="text/javascript"></script>
<script src="js/additional-methods.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script type="text/javascript">        
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>