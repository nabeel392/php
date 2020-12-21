var app = angular.module('myApp', ['ngRoute']);
app.config(function ($routeProvider, $locationProvider) {
    $routeProvider.when('/', {
        templateUrl: 'page.php'
    }).when('/firstpage', {
        templateUrl: 'firstpage.php'
    }).when('/secondpage', {
        templateUrl: 'secondpage.php',
        //controller: 'carsController'
    }).when('/thirdpage', {
        templateUrl: 'thirdpage.php',
       // controller: 'carController'
    });
    $locationProvider.html5Mode(true);
});
var cars = [
    {
        id: 1,
        name: "Ford Mustang",
        slug: "ford-mustang"
    },
    {
        id: 2,
        name: "Chevorlet Corvette",
        slug: "chevrolet-corvette"
    },
    {
        id: 3,
        name: "Tesla Model S",
        slug: "tesla-model-s"
    }
];
app.controller('carsController', function ($scope) {
    $scope.cars = cars;
});
app.controller('carController', function ($scope, $routeParams) {
    $scope.car = cars[$routeParams.id - 1];
});

//# sourceMappingURL=app.js.map
