var app = angular.module('root', []);
app.controller('formCntrl', function($scope, $http) {
    $scope.firstnameone = '';
    $scope.lastnameone = '';
    $scope.emailone = {
        text: ''
      };
    $scope.submitone = function() {
    	var request = $http.post({
    		method: 'post',
    		url: "config.php",
    		data: {
    		'firstnameone': $scope.firstnameone,
    		'lastnameone' : $scope.lastnameone,
    		'emailone' : $scope.emailone
    		},
    		headers: {'Content-Type': 'application/x-www-form-urlencoded' }
    		});
        };
	});


/**    $scope.postdata = function (firstnameone, lastnameone, emailone) {
var data = {
firstname: firstname,
lastname: lastnameone,
email: emailone
};
//Call the services
$http.post("install.php", JSON.stringify(data)).then(function (response) {
if (response.data)
$scope.msg = "Post Data Submitted Successfully!";
}, function (response) {
$scope.msg = "Service not Exists";
$scope.statusval = response.status;
$scope.statustext = response.statusText;
$scope.headers = response.headers(); 
});
}; */