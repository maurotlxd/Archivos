app.controller('estudiantesCtrl', ['$scope','$http', 
  function($scope,$http){

  	$scope.active("mestudiante");

  $scope.criterio  = {"codigo":""};
  $scope.estudiantes = {};

  
    $scope.consultar = function(){
    var ruta = "php/estudiantes/consultar.php";
    $http.get( ruta, {params:$scope.criterio} )
    .then(function(response){
      $scope.estudiantes = response.data;
    });    
  }

  $scope.showForm=function(){
    $scope.formVisibility=true;
    console.log($scope.formVisibility);
  }

}]);  

