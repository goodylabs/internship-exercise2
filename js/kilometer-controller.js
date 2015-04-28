(function() {
  var app = angular.module('fuelCalculatorApp');
  
  app.controller('KilometerController', function($scope) {
    $scope.fuel = '';
    $scope.distance = '';
    $scope.result = 0;

    $scope.calculate = function() {
      $scope.resultFuel = ($scope.fuel / $scope.distance)*100;
    };
  });
  
})();
