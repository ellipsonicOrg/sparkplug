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
                        <li class="active"><a href="#tab_1" data-toggle="tab">Users</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Roles</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Modules</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Permissions</a></li>
                        <li class="pull-right"><a href="javascript:void(0);" class="text-muted" ><i class="fa fa-gear"></i></a></li>
                    </ul>
                    <div class="tab-content" ng-controller="UIGridCtrl">
                        <div class="tab-pane active" id="tab_1" >
                            <div id="ecoSystemGrid" ui-grid-exporter ui-grid-pagination ui-grid="gridOptions" class="grid"></div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            The European languages are members of the same family. Their separate existence is a myth.
                            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                            in their grammar, their pronunciation and their most common words. Everyone realizes why a
                            new common language would be desirable: one could refuse to pay expensive translators. To
                            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                            words. If several languages coalesce, the grammar of the resulting language is more simple
                            and regular than that of the individual languages.
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
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