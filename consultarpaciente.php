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
	<title>Datos del paciente</title>
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
				<a href="frmdoctor.php" class="navbar-brand" style="color: white;">Doctor
				<?php
					
					echo $_SESSION['nombre'];
					?>
				</a>
				</a>
			</div>		
			<div class="collapse navbar-collapse" id="miMenu">
				<ul class="nav navbar-nav">						
					<li><a href="citasdoctor.php" style="color: white;">Citas</a></li>	
												
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="php/cerrarsesion.php" style="color: white;">Salir</a></li>	
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="container-fluid">
<div class="panel panel-default">
    <div class="panel-heading">HORARIO</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>HORAS</th>
					<th>PACIENTE</th>	
					<th>Datos personales</th>				
					<th>ACCION</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');				     
					 $user=$_SESSION['consultado'];
				     $result=mysqli_query($conexion,"SELECT * FROM datosusuario where nombre='$user'");				    
				     while ($usuarios=mysqli_fetch_array($result)){					 
					 echo "<tr><td id='id:$user' class='cam_editable'>".$user."</td>";
					 echo "<td id='dni:$user' class='cam_editable'>".$usuarios['dni']."</td>";
				     echo "<td id='nombre:$user' class='cam_editable'>".$usuarios['nombre']."</td>";
					 echo "<td id='apellido:$user' class='cam_editable'>".$usuarios['apellido']."</td>";
					 //////////////////////////////////////
					 echo "<td id='sangre:$user' class='cam_editable'>".$usuarios['sangre']."</td>";
					 echo "<td id='direccion:$user' class='cam_editable'>".$usuarios['direccion']."</td>";
					 echo "<td id='correo:$user' class='cam_editable'>".$usuarios['correo']."</td>";
					 echo "<td id='telefono:$user' class='cam_editable'>".$usuarios['telefono']."</td>";
					 echo "<td id='fecha:$user' class='cam_editable'>".$usuarios['fecha']."</td>";
					 echo "<td id='sexo:$user' class='cam_editable'>".$usuarios['sexo']."</td>";
					 echo "<td id='regimen subsidiario:$user' class='cam_editable'>".$usuarios['regimensubsidiario']."</td>"; 
					 echo"</tr>";
					 }
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
<!--//////////////////////////////////////////////////-->
	<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/maindoctor.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/messages_es.js" type="text/javascript"></script>
<script src="js/additional-methods.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>