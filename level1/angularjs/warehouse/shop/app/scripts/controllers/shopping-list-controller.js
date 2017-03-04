/*
---
name: ShoppingListController
Using IIFE- IIFE (immediately-invoked function expression): Takes the following setup:

(function (window, document, undefined) {
  // 
})(window, document);
...
undefined is immutable, it can be-reassigned.
*/
(function(global, doc, undefined){

	'use strict';

	var ShoppingListController = function(ShoppingBagFactory) {

		// methods
		this.removeItem = ShoppingBagFactory.removeItem;

		// models 
		this.items = ShoppingBagFactory.getItems();

	};

	angular.module('myApp').controller('ShoppingListController', ['ShoppingBagFactory', ShoppingListController]);

})(window, document);

