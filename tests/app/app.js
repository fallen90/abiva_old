/**
* AbivaEdge Main Module
*
* Description
*/
'use strict';

var app = angular.module('AbivaEdge', [ 
	'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngTouch',
    'AbivaEdge.services',
    'AbivaEdge.controllers',
    'AbivaEdge.filters',
    'AbivaEdge.directives',
	])
.config(function ($routeProvider) {
    $routeProvider
      .when('/:module', {
      	templateUrl: '/tests/app/views/main.html',
        controller: 'TutorialCtrl'
      })
      .when('/:module/tutorials', {
        templateUrl: '/tests/app/views/tutorial.html',
        controller: 'TutorialCtrl'
      })
      .when('/:module/tutorials/:tutorial_index', {
        templateUrl: '/tests/app/views/tutorial.html',
        controller: 'TutorialCtrl'
      })
      .when('/:module/activity', {
        templateUrl: '/tests/app/views/main.html',
        controller: 'ActivityCtrl'
      })
      .when('/:module/activity/:activity_index', {
        templateUrl: '/tests/app/views/main.html',
        controller: 'ActivityCtrl'
      })
      .otherwise({
        redirectTo: '/1/tutorials'
      });
  });


angular.module('AbivaEdge.services',[])
.factory('Activity', function($resource){
	return $resource('../data/data/:module' + '.php');
});


angular.module('AbivaEdge.controllers',[])
  .controller('TutorialCtrl',function($rootScope,$scope,$routeParams,Activity){

    var content_pages = [];

  	var activity = Activity.get({ module: $routeParams.module }, function(){
  		console.log(activity);
  		$rootScope.activity = activity;
  		$scope.activity = activity;

      //get activity tutorials
      angular.forEach(activity.tutorial, function(value, key){
        content_pages[key] = {
          title : value.title,
          content : []
        };

        if(value.content.split('space_out').length > 1){
          angular.forEach(value.content.split('space_out'), function(v,k){
            if(v.length > 5){
              content_pages[key].content[content_pages[key].content.length] = v.replace('space_in', "");
            }
          });
        } else {
          content_pages[key].content = value.content;
        }
      });

      $scope.content_pages = content_pages;
      console.log(content_pages);
    });

    $rootScope.module_number = $routeParams.module;
  	$scope.module_number = $routeParams.module;
    $scope.activeTut = $routeParams.tutorial_index;

})
.controller('ActivityCtrl',function($scope,Activity,$rootScope,$routeParams){
  var activity = Activity.get({ module: $routeParams.module }, function(){
                  console.log(activity);
                  $rootScope.activity = activity;
                  $scope.activity = activity;
              });
});
angular.module('AbivaEdge.filters',[])
.filter('to_trusted', ['$sce', function($sce) {
    return function(text) {
        //text = text.replace(/(?:\\[rn])+/g, "<br>");
        return $sce.trustAsHtml(text);
    };
}]);

angular.module('AbivaEdge.directives',[])
.directive('tabContent', function(){
  // Runs during compile
  return {
    scope: true, // {} = isolate, true = child, false/undefined = no change
    controller: function($scope, $element, $attrs, $transclude) {
      $scope.contents = [];
      $scope.content_sliced = "";
      $scope.activePage = 0;
      $scope.changePage = function(page){
        $scope.content_sliced = $scope.contents[page];
        $scope.activePage = page;
      }
      if(typeof $scope.tab.content == "string"){
        $scope.contents[$scope.contents.length] = $scope.tab.content;
      } else {
       $scope.contents = $scope.tab.content;
      }
      $scope.content_sliced = $scope.contents[0];
    },
    templateUrl:"/tests/app/views/directives/tabContent.html",
    restrict: 'A', // E = Element, A = Attribute, C = Class, M = Comment
  };
});