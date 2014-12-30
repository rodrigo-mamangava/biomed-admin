
/**
 * configuracoes
 * */
var myNameSpace = angular.module('myApp', []);
var backendUrl = 'http://127.0.0.1/biomed-admin/model/';


myNameSpace.controller(
		"produtoController", 
		function produtoController($scope, $http) {

		var page = backendUrl+"listaProdutos.php";
	
		$http.get(page).success(function(response) {
			$scope.produtos = response;	
		});
		
		

});


myNameSpace.controller(
		"menuController", 
		function menuController($scope, $http) {

		var page = backendUrl+"listExamesMenu.php";
	
		$http.get(page).success(function(response) {
			$scope.menu = response;	
		});

});

