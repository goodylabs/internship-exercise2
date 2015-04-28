(function() {
  var app = angular.module('fuelCalculatorApp', ['ui.router']);
  
  app.config(function($stateProvider, $urlRouterProvider) {
    
    // For any unmatched url, redirect to /home
    $urlRouterProvider.otherwise("/home");
    
    // Now set up the states
    $stateProvider
      .state('home', {
        url: "/home",
        templateUrl: "partials/home.html"
      })
      .state('kilometer', {
        url: "/kilometer",
        templateUrl: "partials/kilometer.html",
      })
      .state('mile', {
        url: "/mile",
        templateUrl: "partials/mile.html",
      });
  });
})();