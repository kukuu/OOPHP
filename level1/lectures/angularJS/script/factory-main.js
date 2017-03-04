var myApp = angular.module();
myApp.factory('Data',[function(){
	return ({message:"Thank you"});
}]);


function FirstCtrl($scope,Data){
	$scope.data = Data;

}

function SecondCtrl($scope,Data){
		$scope.data = Data;
}