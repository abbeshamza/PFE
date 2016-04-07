(function(){
    var ListProjectsController = function($scope,$log,ProjectsFactory,$rootScope,$mdDialog,$mdMedia)
    {
        $scope.listProjects=null;
        $scope.newProject=null;
        function all()
        {
            ProjectsFactory.getAll().then(function (response) {
                return  $scope.listProjects = response;
            }, function (fallback) {
                return $q.reject(fallback);
            });
        }
        $scope.addProject=function($event){
            $mdDialog.show({
                templateUrl:'./src/projects/views/newProjectDialog.html',
                clickOutsideToClose:true,
                controller:ListProjectsController,
                controllerAs: 'ctrl',
                targetEvent:$event
            });
        }
        $scope.closeDialog=function (){
            $mdDialog.cancel();
    }
        $scope.save=function (){
            console.log($scope.newProject);

        }
        all();

    };
    ListProjectsController.$inject=['$scope','$log','ProjectsFactory','$rootScope','$mdDialog','$mdMedia'];
    angular.module('App').controller('ListProjectsController',ListProjectsController);
}
());