@extends('backend.templates.noFooterNoSidebarSearch')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_header }}
            <small>{{ $page_description }}</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Users</span>
                        <span class="info-box-number">{{ $total_users }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-circle-thin"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Roles</span>
                        <span class="info-box-number">{{ $total_roles }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-android-checkbox-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Permissions</span>
                        <span class="info-box-number">{{ $total_permissions }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-android-options"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Mappings</span>
                        <span class="info-box-number">{{ $total_mappings }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row" ng-app="ecoSystemApp">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div ng-controller="MainCtrl">
                    <div id="ecoSystemGrid" ui-grid-exporter ui-grid-pagination ui-grid="gridOptions" class="grid"></div>
                </div>
            </div>
        </div>



    </section>
    <!-- /.content -->

@stop

@section('extra_scripts')
<script>

    /*
     * Module: ecoSystemApp
     * Description: Angular JS Module to list all user, roles ecosystem for superadmin
     * Developer: Shankar
     * Version: 0.0.1
     * Dated: 16-Oct-2015
     *
     * Dependencies
     * -----------------------------------------------------
     * UI Grid:  http://ui-grid.info/
     */


    var app = angular.module('ecoSystemApp', ['ngTouch', 'ui.grid','ui.grid.pagination', 'ui.grid.autoResize', 'ui.grid.exporter', 'ui.grid.selection']);

    app.config(['$interpolateProvider', function ( $interpolateProvider) {

        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');

    }]);

    app.controller('MainCtrl', ['$scope','$http', function ($scope, $http) {

        $scope.gridOptions = {
            enableFiltering: false,
            exporterMenuCsv: false,
            enableGridMenu: true,
            enableHorizontalScrollbar: 0,
            enableVerticalScrollbar: 2,
            paginationPageSizes: [25, 50, 75],
            paginationPageSize: 25,
            columnDefs: [
                { name: 'name' },
                { name: 'gender' },
                { name: 'company' }
            ]
        };

        $scope.highlightFilteredHeader = function( row, rowRenderIndex, col, colRenderIndex ) {
            if( col.filters[0].term ){
                return 'header-filtered';
            } else {
                return '';
            }
        };

        $http.get('/getUserRoleData')
        .success(function (data) {
            $scope.gridOptions.data = data;
        });

        /*

         $http.get('http://ui-grid.info/data/100.json')
         .success(function (data) {
         $scope.gridOptions.data = data;
         });

         */


    }]);

</script>


@stop