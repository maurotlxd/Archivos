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
	<title>Pacientes</title>
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
    <div class="panel-heading">LISTA DE PACIENTES</div>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					
					<th>DNI</th>	
					<th>NOMBRE</th>	
					<th>APELLIDO</th>	
					<th>SANGRE</th>	
					<th>DIRECCION</th>	
					<th>CORREO</th>	
					<th>TELEFONO</th>	
					<th>FECHA DE NACIMIENTO</th>	
					<th>SEXO</th>	
					
					<th>ACCIONES</th>				
				</tr>
			</thead>
			<tbody>
				<?php
				     require('php/conexion.php');
				     $result=mysqli_query($conexion,'SELECT idUsuario FROM usuarios where tipo="usuario"');				    
				     while ($usuarios=mysqli_fetch_array($result)){
						 $id=$usuarios['idUsuario'];
					 //////////////////////////////////////
					 $result2=mysqli_query($conexion,"SELECT * FROM datosusuario where dni='$id'");
					 $dato=mysqli_fetch_array($result2);
					 //////////////////////////////////////
					 echo "<tr><td id='id:$id' class='cam_editable'>".$usuarios['idUsuario']."</td>";
					 
				     echo "<td id='nombre:$id' class='cam_editable' contenteditable='true'>".$dato['nombre']."</td>";
					 echo "<td id='apellido:$id' class='cam_editable' contenteditable='true'>".$dato['apellido']."</td>";
					 //////////////////////////////////////
					 echo "<td id='sangre:$id' class='cam_editable' contenteditable='true'>".$dato['sangre']."</td>";
					 echo "<td id='direccion:$id' class='cam_editable' contenteditable='true'>".$dato['direccion']."</td>";
					 echo "<td id='correo:$id' class='cam_editable' contenteditable='true'>".$dato['correo']."</td>";
					 echo "<td id='telefono:$id' class='cam_editable' contenteditable='true'>".$dato['telefono']."</td>";
					 echo "<td id='fecha:$id' class='cam_editable' contenteditable='true'>".$dato['fecha']."</td>";
					 echo "<td id='sexo:$id' class='cam_editable' contenteditable='true'>".$dato['sexo']."</td>";
					 
					 ///////////////////////////////////////	 
				     echo"<td><button type='button' id='$id' button='true' class='btn btn-Rojo'><span class='glyphicon glyphicon-minus'></span> Eliminar</button></td>";
					 echo"</tr>";
					 }				
				?>
			</tbody>	
					
		</table>
	</div>
	</div>
	<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	<button type="button" onclick="ventananuevo();" class="btn btn-Azul btn-lg" >
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
    </button>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	</div>
  <br>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Paciente</h4>
            </div>
            <form role="form"  id= "frmpaciente" name="frmpaciente" onsubmit="Registrarpaciente(); return false">
              <div class="col-lg-12">               
                
                 <div class="form-group">
                  <label>Dni</label>
                  <input  name="dni" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Nombre</label>
                  <input  name="nombre" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Apellido</label>
                  <input  name="apellido" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label>Sangre</label>
                  <select name='sangre' class='form-control'>
					  <option value="A+">A+</option>
					  <option value="A-">A-</option>
					  <option value="AB+">AB+</option>
					  <option value="B-">B-</option>
					  <option value="B+">B+</option>
					  <option value="O+">O+</option>
					  <option value="AB-">AB-</option>
					  <option value="O-">O-</option>
				  </select>
                </div>
                
                <div class="form-group">
                  <label>Direccion</label>
                  <input  name="direccion"  class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>Correo</label>
                  <input  name="correo" type="email"  class="form-control" required>
                </div>
                
                 <div class="form-group">
                  <label>Telefono</label>
                  <input  name="telefono" type="number"  class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Fecha de nacimiento</label>
                  <input  name="fecha" type="date"  class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>Sexo</label>
                  <select name='sexo' class='form-control'>
					  <option value="Femenino">Femenino</option>
					  <option value="Masculino">Masculino</option>					  
				  </select>
                 </div>
                                 

                <div class="form-group">
                  <label>password</label>
                  <input  name="password" id="p1" class="form-control" type="password"required>
                </div>
                
                <div class="form-group">
                  <label>repita password</label>
                  <input  name="password2" id="p2" class="form-control" type="password" required>
                </div>                         
                
                <button type="submit" class="btn btn-Azul btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
                </button>
              </div>
            </form>
            <div class="modal-footer">
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


<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript" src="js/mainpaciente.js"></script>


<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/messages_es.js" type="text/javascript"></script>
<script src="js/additional-methods.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	
        function ventananuevo(){
          $('#modal').modal('show');

        }
	function cambiar(){
          $('#modal2').modal('show');

        }
    </script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
</body>