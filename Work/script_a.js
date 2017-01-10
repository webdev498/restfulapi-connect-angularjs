angular.module("myApp",[])

.controller('myController', ['$scope','$http', function($scope, $http){

	// $http.defaults.headers.post['Content-Type'] = 'application/json';

	$scope.send = function(){

		var data = {
				variable: $scope.variable,
				value: $scope.value
			};

		$http.post('http://localhost/api/add_data', data)
			.success(function(data, status, headers, config)
			{
				$scope.status = data;
				$scope.variable = "";
				$scope.value = "";
			})
			.error(function(data, status, headers, config)
			{
				$scope.status = data;
				$scope.variable = "";
				$scope.value = "";
			});
	};
}])