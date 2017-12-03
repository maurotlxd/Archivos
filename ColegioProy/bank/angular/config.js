app.config(function($routeProvider){

	$routeProvider
		.when('/',{
			templateUrl: 'page/home.html',
			controller:  'homeCtrl'
		})
		.when('/estudiantes',{
			templateUrl: 'page/estudiantes.html',
			controller:  'estudiantesCtrl'
		})
		
		.when('/estudiante/:codigo',{
			templateUrl: 'page/estudiante.html',
			controller:  'estudianteCtrl'
		})
		.when('/pagosNuevos',{
			templateUrl: 'page/pagosNuevos.html',
			controller:  'pagosCtrl'
		})
		.when('/pagosAntiguos',{
			templateUrl: 'page/pagosAntiguos.html',
			controller:  'pagosaCtrl'
		})
		.otherwise({
			redirectTo: '/'
		});


});