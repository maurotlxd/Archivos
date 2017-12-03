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
	<title>cambbiar contraseña</title>
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
				<a href="frmadmin.php" class="navbar-brand" style="color: white;">Bienvenido
				<?php
					
					echo $_SESSION['nombre'];
					?>
				</a>
			</div>		
			<div class="collapse navbar-collapse" id="miMenu">
				<ul class="nav navbar-nav">
					<li><a href="history.back()" style="color: white;">Volver</a></li>		
					<li><a href="php/cerrarsesion.php" style="color: white"><span class="label label-danger">CERRAR SESION </span></a></li>										
				</ul>
			</div>
		</div>
	</nav>
</div>
</body>