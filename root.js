var app = angular.module('root', []);
app.controller('formCntrl', function($scope) {
    $scope.firstnameone = '';
    $scope.lastnameone = '';
    $scope.email = {
        text: ''
      };
    $scope.submitone = function() {
		alert('Thanks for submitting')
        };
    });