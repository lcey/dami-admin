'use strict';

angular.module('myApp.version.version-directive', [])

.directive('appVersion', ['version', function(version) {
  return function(scope, elm, attrs) {
    elm.text(version);
  };
}])


.directive('routerLinkActive', ['version', function(version) {
    return function(scope, elm, attrs) {
        //监听路由事件
        $scope.$on('$routeChangeSuccess')
    };
}]);