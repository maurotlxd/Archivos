<?php
// Tema de seguridad
session_start();
unset($_SESSION["usuario"]);
?>
<!DOCTYPE html>
<html ng-app = "loginApp" ng-controller = "loginCtrl" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/diseño.css">

	<!-- Angular -->
	<script src="angular/lib/angular.min.js" type="text/javascript"></script>

	<!-- Modulo -->
	<script src="angular/app.js" type="text/javascript"></script>


    <title>AlmasDelSaber-Login</title>
</head>
<body>
   
<h1>ALMAS DEL SABER</h1>
    <h2>Ingresa tu cuenta</h2>
    <form  name="form1" ng-submit=" ingresar() ">
     
    	<table  align="center">
      
       
    		<tr>
            
    			<td><h5>Usuario:</h5></td>
    			<td>
                <div class="form-group">
                <input type="text" name="usuario"  class="form-control" ng-model="datos.usuario" placeholder="Usuario" required="required"/></td>
                </div>
    		</tr>
            
            
    		<tr>

    			<td><h5>Clave:</h5></td>
    			<td>
                <div class="form-group">
                <input type="password" name="clave"    class="form-control" ng-model="datos.clave" placeholder="Contraseña" required="required" /></td>
                </div>
    		</tr>

    		<tr>
    			<td colspan="2">
                 
                <button  class="btn btn-succes" type="submit" ng-disabled="form1.$invalid || procesando">
    					    <h5 style="color: black;">Ingresar </h5>
    			</button>
             
                </td>
    		</tr>
    	</table>
    </form>
    <div style="color: white; margin: 10px; padding: 10px;" 
    	 ng-show="hayError">
    	<div class="alert alert-danger">
  <a href="#" class="alert-link">{{mensaje}}</a>

</div>
    </div>

</body>
</html>
