@extends('backend.skeleton')

@section('template')

    <!-- Main Header -->
    @include('backend.partials.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('backend.partials.mainSidebarPlain')

    <!-- Content Wrapper. Contains page content -->
    @include('backend.partials.contentWrapper')

    <!-- Control Sidebar -->
    @include('backend.partials.controlSidebar')

@stop