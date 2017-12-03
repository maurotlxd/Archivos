app.controller('estudianteCtrl', ['$scope','$routeParams','$http', function($scope,$routeParams,$http){

  // Para activar el menú
  $scope.active("mestudiante");

  // El codigo enviado como parámetro
  var codigo = $routeParams.codigo;

  // El registro con los datos del empleado
  $scope.estudiantes2 = {};

  // Si es true, se trata de un empleado nuevo
  $scope.creando = (codigo=='nuevo');

  // Acción a ejecutar: NUEVO o EDITAR
  $scope.accion = ($scope.creando?'NUEVO':'EDITAR');

  // Datos del mensaje
  $scope.hayError = false;
  $scope.sinError = false;
  $scope.mensaje = '';

  // Buscar datos del empleado
  if( ! $scope.creando ){
    var ruta = 'php/estudiantes/traer.php?codigo=' + codigo;
    $http.get(ruta).then(function(response){
      if( Object.keys(response.data).length == 0 ){
        window.location = "#!/estudiantes";
        return;
      } else {
        $scope.estudiantes2 = response.data;
      }
    });
  }

  $scope.procesar = function(){

    var ruta = '';
    if( $scope.creando ){
      ruta = 'php/estudiantes/crear.php';
    } else {
      ruta = 'php/estudiantes/actualizar.php';
    }
    
    $http.post(ruta,$scope.estudiantes2).then(function(response){

      $scope.hayError = (response.data.code == -1);
      $scope.sinError = (response.data.code == 1);
      $scope.mensaje  = response.data.mensaje;

      setTimeout(function(){
        $scope.hayError = false;
        $scope.sinError = false;
        if( $scope.creando ){
          $scope.estudiantes2 = {};
        }
        $scope.$apply();
      },3500);

    });

  }
  $scope.eliminar = function(){

    var ruta = 'php/estudiantes/eliminar.php';
    
    $http.post(ruta,{"codigo":$scope.estudiantes2.codigo}).then(function(response){

      $scope.hayError = (response.data.code == -1);
      $scope.sinError = (response.data.code == 1);
      $scope.mensaje  = response.data.mensaje;

      setTimeout(function(){
        $scope.hayError = false;
        $scope.sinError = false;
        $scope.$apply();
        if( response.data.code == 1 ){
          window.location = "#!/estudiantes";
        }
      },3500);

    });

  };


}]);