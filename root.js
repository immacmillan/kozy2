var app = angular.module('root', []);

app.controller('formCntrl', ["$scope", "$http", function($scope, $http) {
    $scope.master = {
      firstName: 'First Name',
      lastName: 'Last Name',
      email: 'Email'
    };
    $scope.submitone = function() {
      var Indata = {params:user.firstName, params}
         $http({
         url: "time.php",
         method: "POST",
         params: Indata
         })
        $http.post("customers_mysql.php", )
          .then(function (response) {$scope.names = response.data.records;});
            $scope.user = angular.copy($scope.master);
            alert("The get function worked")
    };

  };


}]);
