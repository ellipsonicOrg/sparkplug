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

        <div ng-app="dataSetApp" ng-controller="ngListUsersCtrl">
            <!-- Main content -->

                <div class="box"><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered table-hover" st-table="rowCollection">
                            <tr class="">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                            <tr ng-repeat="row in rowCollection | filter:search">
                                <td>[[ row.id ]]</td>
                                <td>[[ row.name ]]</td>
                                <td>[[ row.email ]]</td>
                                <td>[[ row.created_at ]]</td>
                                <td>[[ row.updated_at ]]</td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->


        </div>

    </section>
    <!-- /.content -->

@stop

