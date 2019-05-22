var modulo = angular.module("rutas", ['ngRoute'])
    .config(function ($routeProvider, $locationProvider) {
        $routeProvider
            .when('/usuarios', {
                templateUrl: 'usuarios.html'
            })
            .when('/gestor', {
                templateUrl: 'gestor.html'
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
                templateUrl: 'tercera_seccion.php'
            })
            .when('/gestor/Footer',{
                templateUrl: 'cuarta_seccion.html'
            })
            .otherwise('/');
});