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
  

	<title>Bienvenido administrador</title>
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
				<a href="frmadmin.php" class="navbar-brand" style="color: white;">Administrador
				<?php
					
					echo $_SESSION['nombre'];
					?>
				</a>
			</div>		
			<div class="collapse navbar-collapse" id="miMenu">
				<ul class="nav navbar-nav">
					<li><a href="administradores.php" style="color: white;"><i class="glyphicon glyphicon-plus"></i> Administradores</a></li>
					<li><a href="doctores.php" style="color: white;"><i class="glyphicon glyphicon-plus"></i> Doctores</a></li>					
					<li><a href="pacientes.php" style="color: white;"><i class="glyphicon glyphicon-plus"></i> Pacientes</a></li>	
					<li><a href="citas.php" style="color: white;"><i class="glyphicon glyphicon-plus"></i> Citas</a></li>										
<!--					<li><a href="cambiarpassword.php">cambiar contraseña</a></li>							-->
									
				</ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a onclick="cambiar();" href="#" style="color: white;"><i class="glyphicon glyphicon-pencil"></i> Cambiar contraseña</a></li>
          <li><a href="php/cerrarsesion.php" style="color: white;"><i class="glyphicon glyphicon-remove"></i> Salir </span></a></li>           
        </ul>
			</div>
		</div>
	</nav>
</div>

<div class="jumbotron barraAzul">
 <div class="container">
 <div class="row">
 <div class="col-lg-8">
   <h2 style="color: white;"><i class="glyphicon glyphicon-home"></i>  Bienvenido al panel de administrador</h2>
 </div>

   
 </div>

 
   
 </div>
</div>
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Cambiar Contraseña</h4>
            </div>
            <form role="form"  id= "frmcambiar" name="frmcambiar" onsubmit="cambiarpassword(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>vieja contraseña</label>
                  <input  name="password0" id="p" class="form-control" type="password" required>
                </div>
                <div class="form-group">
                  <label>nueva contraseña</label>
                  <input  name="password1" id="p3" class="form-control" type="password" required>
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
</body>