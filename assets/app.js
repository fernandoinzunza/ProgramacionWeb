
angular.module("rutas", ['ngRoute'])
    .config(function ($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'template.html'
            })
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
            $locationProvider.html5Mode(true);
    });