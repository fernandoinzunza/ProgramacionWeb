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
            .when('/gestor/Encabezado',{
                templateUrl: 'primera_seccion.html'
            })
            .when('/gestor/Categorias',{
                templateUrl: 'segunda_seccion.html'
            })
            .when('/gestor/Carrusel',{
                templateUrl: 'tercera_seccion.html'
            })
            .when('/gestor/Footer',{
                templateUrl: 'cuarta_seccion.html'
            })
            .otherwise('/');
});
modulo.controller('myCtrl', ['$scope', function($scope) {
    $scope.alerta = function() {
        alert('hola');
    };
}]);