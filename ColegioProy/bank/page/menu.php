
<?php
session_start();

if( !isset($_SESSION["usuario"]) ){
    echo "Acceso denegado.";
    die();
}
?>
<nav  style="height: 60px;"    class="navbar navbar-default navbar-fixed-top">

  <div class="container-fluid">
  
             
            
     
    <div style="height: 10px;"  class="navbar-header">
      <a class="navbar-brand" href="#!/"></a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">

        <li ng-class="mhome">
          <a href="#!/">
            <i class="fa fa-home"></i>
            Inicio
          </a>
        </li>
        
        <li   ng-class="mestudiante">
          <a href="#!/estudiantes">
            <i class="fa fa-users" aria-hidden="true"></i>
            Estudiantes
          </a>
        </li>
        <li ng-class="mpagos">
          <a href="#!/pagosNuevos">
            <i class="fa fa-users" aria-hidden="true"></i>
            EstudiantesNuevos
          </a>
        </li>
        <li  ng-class="mpagosa">
          <a href="#!/pagosAntiguos">
            <i class="fa fa-users" aria-hidden="true"></i>
            ReportePagos
          </a>
        </li>

        <li style="margin-left: 880px;" class="nav navbar-nav navbar-right">
          <a href="" style="font-weight: bold;margin-top: -65px;">Cerrar Sesión<br><?php echo $_SESSION["usuario"]; ?></a>

            <i  aria-hidden="true"></i>
           
          </a>
        </li>
        
       

      </ul>
    </div><!--/.nav-collapse -->

  </div>

</nav>