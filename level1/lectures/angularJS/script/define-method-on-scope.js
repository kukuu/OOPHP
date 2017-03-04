var myApp = angular.module();
myApp.factory('Data',[function(){
	return ({message:"Thank you"});
}]);


function FirstCtrl($scope,Data){
	$scope.data = Data;

}

/*function SecondCtrl($scope, Data) {
  $scope.data = Data;

  $scope.reversedMessage = function() {
    return $scope.data.message.split("").reverse().join("");
  };
}*/

function SecondCtrl($scope,Data){
		$scope.data = Data;
		//This removes the scope dependency inside the method which is cleaner and allows for easier testing.
		$scope.reverseMessage(function(message){
			return message.split("").reverse().join("");
		})
}