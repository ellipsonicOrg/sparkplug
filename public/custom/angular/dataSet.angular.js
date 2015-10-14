/*
* Module: dataSetApp
* Description: Angular JS Module to list all question papers created by user
* Developer: Shankar
* Version: 0.0.1
* Dated: 23-Aug-2015
*
* Dependencies
* -----------------------------------------------------
* Smart Table:  https://github.com/lorenzofox3/Smart-Table
*/
    app = angular.module('dataSetApp', ['smart-table']);

    app.config(['$interpolateProvider', function ( $interpolateProvider) {

        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');

    }]);

    app.controller('ngListUsersCtrl', ['$http','$scope', function ($http, $scope) {
        $scope.rowCollection = [];
        $http.get('/users/getSavedUsers').success(function (data) {
            $scope.rowCollection = data;
        });
    }]);

