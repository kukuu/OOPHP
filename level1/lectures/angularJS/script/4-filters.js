var myApp = angular.module('myApp', []); 

myApp.factory('Avengers', function () {
  var Avengers = {};
  Avengers.cast = [
    {
      name: ...,
      character: ...
    },
    ...
  ];
  return Avengers;
});