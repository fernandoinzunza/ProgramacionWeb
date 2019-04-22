
angular.module('rutas', ['ngRoute'])
    .config(function ($routeProvider) {
        $routeProvider
            .when('/inicio', {
                templateUrl: 'inicio.html'
            })
            .when('/usuarios', {
                templateUrl: 'usuarios.html'
            })
            .when('/gestor', {
                templateUrl: 'gestor.html'
            })
            .otherwise('/');
});