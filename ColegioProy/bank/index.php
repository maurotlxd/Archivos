<?php
session_start();

if( !isset($_SESSION["usuario"]) ){
    echo "Acceso denegado.";
    die();
}
?>
<!DOCTYPE html>
<html ng-app="eurekaApp" ng-controller="eurekaCtrl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>AlmasDelSaber</title>

        <!-- Incluir Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <!-- Estilo personalizado -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Incluir AngularJS -->
        <script src="angular/lib/angular.min.js"></script>
        <script src="angular/lib/angular-route.min.js"></script>

        <script src="angular/app.js"></script>
        <script src="angular/config.js"></script>

        <!-- Controladores de páginas -->
        <script src="angular/controller/clientesCtrl.js"></script>
        
        <script src="angular/controller/empleadoCtrl.js"></script>
        <script src="angular/controller/homeCtrl.js"></script>
        <script src="angular/controller/estudiantesCtrl.js"></script>
        <script src="angular/controller/estudianteCtrl.js"></script>
         <script src="angular/controller/pagosCtrl.js"></script>
         <script src="angular/controller/pagosaCtrl.js"></script>
         


    </head>    
    <body>

        <div ng-include="menu"></div>

        <div class="row">
            <div class="col-sm-6">
                
            </div>
           
        </div>
        
        <div class="container">
            
            <div ng-view></div>

        </div>


    </body>
</html>
