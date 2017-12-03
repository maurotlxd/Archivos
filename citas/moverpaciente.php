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
	<title>Horarios de citas</title>
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
					<li><a href="administradores.php" style="color: white;">Administradores</a></li>
					<li><a href="doctores.php" style="color: white;">Doctores</a></li>					
					<li><a href="pacientes.php" style="color: white;">Pacientes</a></li>	
					<li><a href="citas.php" style="color: white;">Citas</a></li>
														
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a onclick="cambiar();" href="#" style="color: white;">Cambiar contraseña</a></li>
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
						
					<th>Doctor</th>				
					<th>ACCION</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');				     
					 $user=$_SESSION['consultado'];
				     
				     $result=mysqli_query($conexion,'SELECT * FROM horarios');
					 while ($horarios=mysqli_fetch_array($result)){
							 $id=$horarios['id'];						 
							 if ($horarios['paciente']==null){
						 echo "<tr><td id='id:$id' class='cam_editable'>".$horarios['id']."</td>";
						 echo "<td id='horas:$id' class='cam_editable'>".$horarios['horas']."</td>";				     
						 
						 echo "<td id='doctor:$id' class='cam_editable'>".$horarios['doctor']."</td>";	
						 echo"<td id='$id' name='$user' button='true'><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-move'></span> Mover</button></td>";
						 echo"</tr>";
							 }
						 }
				
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
<!--//////////////////////////////////////////////////-->
<!--//////////////////////////////////////////////////-->
 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Cambiar contraseña</h4>
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
<script type="text/javascript">
	function cambiar(){
          $('#modal2').modal('show');

        }        
    </script>
	<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/mainmover.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/messages_es.js" type="text/javascript"></script>
<script src="js/additional-methods.js" type="text/javascript"></script>
<script src="js/script.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>