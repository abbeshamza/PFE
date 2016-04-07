var App=angular.module('App',['ngRoute','restangular','ngMaterial','ngMdIcons','ngMessages'])
	.run(function(){
		console.log("app is running")
	});
App.config(function($routeProvider,RestangularProvider,$mdIconProvider,$mdThemingProvider)
{
	console.log('A gets initialized its Restangular configuration');
    RestangularProvider.setBaseUrl('http://127.0.0.1:8000/rest/');


	$mdThemingProvider.theme('default')
		.primaryPalette('blue')
		.accentPalette('red');
	$mdIconProvider.icon('menu','assets/img/menu.svg',24);
	$mdIconProvider.icon('add','assets/img/ic_add_24px.svg',24);




	RestangularProvider.addResponseInterceptor(function(data, operation, what, url, response, deferred) {
		var extractedData;
		if (operation === "getList") {
			//console.log(data.data);
			extractedData = data.data;
		} else {
			extractedData = data;
		}
		return extractedData;
	});


	$routeProvider
	.when('/home',{
		controller : 'MainController',
		templateUrl: 'src/home/views/home.html'
	})
	.when('/projects/:id',{
		controller : 'ProjectController',
		templateUrl: 'src/projects/views/setting.html'
	})
	.when('/projects',{
		controller : 'ListProjectsController',
		templateUrl: 'src/projects/views/home.html'
	})
	.otherwise({redirectTo :'/'});


    
	 

});






