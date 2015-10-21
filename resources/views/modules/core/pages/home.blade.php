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
    <div class="row" ng-app="ecoSystemApp">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">

                    @can('view_users')
                        <li class="active"><a href="#users" data-toggle="tab">Users</a></li>
                    @endCan

                    @can('view_roles')
                        <li><a href="#roles" data-toggle="tab">Roles</a></li>
                    @endCan

                    @can('view_modules')
                        <li><a href="#modules" data-toggle="tab">Modules</a></li>
                    @endCan

                    @can('view_permissions')
                        <li><a href="#permissions" data-toggle="tab">Permissions</a></li>
                    @endCan

                    <li class="pull-right"><a href="javascript:void(0);" class="text-muted" ><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content" ng-controller="UIGridCtrl">

                    @can('view_users')
                        <div class="tab-pane active" id="users" >
                            <div id="ecoSystemGrid" ui-grid-exporter ui-grid-pagination ui-grid="gridOptions" class="grid"></div>
                        </div>
                    @endCan
                    <!-- /.tab-pane -->

                    @can('view_roles')
                        <div class="tab-pane" id="roles">
                            Roles
                        </div>
                    @endCan
                    <!-- /.tab-pane -->

                    @can('view_modules')
                        <div class="tab-pane" id="modules">
                            Modules
                        </div>
                    @endCan
                    <!-- /.tab-pane -->

                    @can('view_permissions')
                        <div class="tab-pane" id="permissions">
                            Permissions
                        </div>
                    @endCan
                    <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
    <!-- /.row -->
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

        app.controller('UIGridCtrl', ['$scope','$http', function ($scope, $http) {

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


            $http.get('http://ui-grid.info/data/100.json').success(function (data) {

                $scope.gridOptions.data = data;

            });


        }]);

    </script>


@stop