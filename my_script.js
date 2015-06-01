	    
	var app = angular.module('myApp', []);
	 app.controller('customersCtrl', function($scope, $http) {
	    $(document).ready(function(){
	    callSetTimeout();    
	});

	function callSetTimeout(){
	    setTimeout(function(){
	        update();
	        callSetTimeout();
	    },200);
	}

	 function update(){
	    $http.get("db.php")
	          	.success(function (response) {$scope.names = response.records;});
	                  }
	 });
