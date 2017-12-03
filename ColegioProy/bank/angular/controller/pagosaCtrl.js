app.controller('pagosaCtrl', ['$scope','$http', 
  function($scope,$http){

    $scope.active("mpagosa");

  $scope.criterio  = {"codigo":""};
  $scope.pagosa = {};

  
    $scope.consultar = function(){
    var ruta = "php/pagos/consultarAntiguo.php";
    $http.get( ruta, {params:$scope.criterio} )
    .then(function(response){
      $scope.pagosa = response.data;
    });    
  }

  $scope.showForm=function(){
    $scope.formVisibility=true;
    console.log($scope.formVisibility);
  }

}]);  
