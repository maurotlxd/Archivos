var app=angular.module('eurekaApp',['ngRoute']);
app.controller('eurekaCtrl',['$scope','$http',function($scope,$http){

$scope.menu='page/menu.php';
$scope.active= function(opcion){
	$scope.mhome= "";
	$scope.mestudiante= "";
	$scope.mpagos= "";
	$scope.mpagosa= "";
	

	$scope[opcion]="active";

}

}]);








