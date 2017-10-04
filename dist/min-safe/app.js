// 'use strict';

var app = angular.module('starterAngular1', ['ui.router', 'ngStorage', 'ngAnimate']);

app.config(["$stateProvider", "$urlRouterProvider", "$httpProvider", "$locationProvider", function($stateProvider, $urlRouterProvider, $httpProvider, $locationProvider) {
    
    // use in prod if app countain multiple http request
    // $httpProvider.useApplyAsync(true);

    // for production only : disable debug info
    // $compileProvider.debugInfoEnabled(false)

    // remove # prefix in url -> set base href in index.php + redirect in htaccess
    $locationProvider.html5Mode(true).hashPrefix('');
    
    $urlRouterProvider.otherwise('/');
    
    $stateProvider

        .state('home', {
            url: '/',
            title: 'Home',
            templateUrl: 'application/pages/home/view.html',
            controller: 'home_ctrl'
        })
        
        .state('about', {
            url: '/about',
            title: 'About',
            templateUrl: 'application/pages/about/view.html',
            controller: 'about_ctrl'
        })
        // public
        .state('404', {
            url: '/404',
            title: '404',
            templateUrl: 'application/pages/restrict/view.html'
        })
              
}])
.run(["$rootScope", "$state", "$localStorage", "$transitions", function($rootScope, $state, $localStorage, $transitions) {

    $transitions.onSuccess( {}, function($transition) {
        var stateTo = $transition.$to();
        // console.log(stateTo.name);

        // if(stateTo.name === "home"){
        //     $state.go('404');
                
        // }
            
    });

}]);







