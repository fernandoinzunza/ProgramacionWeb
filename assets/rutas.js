var modulo = angular.module("rutas", ['ngRoute'])
    .config(function ($routeProvider, $locationProvider) {
        $routeProvider
            .when('/usuarios', {
                templateUrl: 'usuarios.html'
            })
            .when('/gestor', {
                templateUrl: 'gestor.html',
                controller:'myCtrl'
            })
            .when('/articulos', {
                templateUrl: 'articulos.html'
            })
            .otherwise('/');
});
modulo.controller('myCtrl', ['$scope', function($scope) {
    $scope.alerta = function() {
        alert('hola');
    };
}]);