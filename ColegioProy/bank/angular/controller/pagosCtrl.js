app.controller('pagosCtrl', ['$scope','$http', 
  function($scope,$http){

    $scope.active("mpagos");

  $scope.criterio  = {"codigo":""};
  $scope.pagos = {};

  
    $scope.consultar = function(){
    var ruta = "php/pagos/consultar.php";
    $http.get( ruta, {params:$scope.criterio} )
    .then(function(response){
      $scope.pagos = response.data;
    });    
  }

  $scope.showForm=function(){
    $scope.formVisibility=true;
    console.log($scope.formVisibility);
  }

}]);  



