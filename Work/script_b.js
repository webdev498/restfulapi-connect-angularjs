angular.module("myApp",[])

.controller('myController', ['$scope','$http', function($scope,$http){

		$http.get('http://localhost/api/get_data').
    		success(function(data) {
        		$scope.rows = data;
    	});
	}
])