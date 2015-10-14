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

        <!-- AREA CHART -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Area Chart</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="areaChart" style="height:250px"></canvas>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <!-- /.content -->

@stop

@section('extra_scripts')
    <script type='text/javascript' src="custom/graphs.js"></script>
@stop