(function(){
    var MainController = function($scope,$log,ProjectsFactory,$rootScope,$mdSidenav,$mdToast)
    {


        $rootScope.selectedProject=null ;
        searchProject :string = '';
        tabIndex:number=1;


        function all()
        {
            ProjectsFactory.getAll().then(function (response) {
                return  $rootScope.projects = response;
            }, function (fallback) {
                return $q.reject(fallback);
            });
        }

        $scope.openLeftMenu = function() {
            $mdSidenav('left').toggle();

        };

        $scope.selectProject = function(obj) {
            $rootScope.selectedProject=obj;
            openToast(obj.nameProject+" was selected");

        };
        function openToast(msg)
        {
          $mdToast.show(
              $mdToast.simple()
                  .textContent(msg)
                  .position('top right')
                  .hideDelay(3000)
          );
        }



        all();


    };
    MainController.$inject=['$scope','$log','ProjectsFactory','$rootScope','$mdSidenav','$mdToast'];
    angular.module('App').controller('MainController',MainController);
}
());