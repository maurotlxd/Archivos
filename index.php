

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">



</head>
<body class="cuerpo">
<div class="container">
<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 formularioContainer" style="padding:0px;margin: 25px auto 0px auto;"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 quitarPadding">
<h2 style="color: white;text-decoration: none;text-align: center;background-color: #e7091e;opacity: 0;font-weight: bold;border: 4px #e7091e groove;">MDJ SALUD</h2>
  <center><img src="images/333.png" width="200" height="180" style="padding-top: 0px"></center>
</div>

<form method="post" class="fondoForm" id= "iniciar" name="iniciar" onsubmit="iniciarsesion(); return false">
  <legend>pampa</legend>
  <div class="form-group">
  <input type="text" class="form-control" placeholder="usuario" name="usuario" required>
  </div>
  <div class="form-group">
  <input type="password" class="form-control" placeholder="contraseña" name="password" required>
  </div>
  <div class="form-group">
  <input type="submit" value="Ingresar" class="btn btn-verde">  
  </div>
  <center> 
   <button type="button" onclick="ventananuevo();" class="btn fondoBoton btn-lg btn-verde">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Registrarse
    </button>
  </center>
 <div class="alerta"></div>
  
  
 
  
  </form>

  </div>
 



</div>
<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs"></div>



<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
  <p></p>
  <p></p>
  

  

<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Paciente</h4>
            </div>
            <form role="form"  id="frmpaciente" name="frmpaciente" onsubmit="Registrarpaciente(); return false">
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
                  <label>Regimen subsidiario</label>
                  <select name='regimensubsidiario' class='form-control'>
            <option value="IPS">IPS</option>
            <option value="SISBEN">SISBEN</option>            
          </select>
                 </div>                

                <div class="form-group">
                  <label>password</label>
                  <input  name="password" id="p1" type="password" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label>repita password</label>
                  <input  name="password2" id="p2" type="password" class="form-control" required>
                </div>                         
                
                <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
                </button>
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
 <!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
<script src="js/jquery-2.2.3.min.js"></script>
 
  <script src="alertifyjs/alertify.js"></script>


 <script type="text/javascript" src="js/main.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/messages_es.js" type="text/javascript"></script>
<script src="js/additional-methods.js" type="text/javascript"></script>
<script src="js/script.js"></script>

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  
        function ventananuevo(){
          $('#modal').modal('show');

        }
    </script>
</body>
</html>