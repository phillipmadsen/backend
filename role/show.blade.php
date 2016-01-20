@extends('backend/layout/layout')
@section('title')
    View Role
@endsection
@section('meta')

@endsection
@section('per-page-stylesheets')
 {{-- <link rel="stylesheet" href="{!! asset('/assets/css/menu-managment.css') !!}"> --}}
@endsection
@section('header-page-script')

@endsection
 @section('pageheader')
<ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.role.index') !!}"><i class="fa fa-user"></i> Role</a></li>
        <li class="active">Show Role</li>
</ol>
<div class="page-header">
       <h1> Role <small> | Show Role</small> </h1>
</div>
@endsection
@section('page-section')@endsection
@section('content')

    <div class="col-lg-12">
        @include('flash::message')


                        <div class="col-md-11 ">
                            <!-- start: DRAGGABLE HANDLES 3 PANEL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-reorder"></i>
                                 MENU LINKS
                                    <div class="panel-tools">
                                        <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                        <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                                        <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                        <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                                    </div>
                                </div>
                                <div class="panel-body">


                                  <table class="table table-striped">
        <tbody>
        <tr>
            <td><strong>Role Name</strong></td>
            <td>{!! $role->name !!}</td>
        </tr>
        </tbody>
    </table>




<div class="container">
    <div class="pull-left">
        <div class="btn-toolbar">
            <a href="{!! langRoute('admin.role.index') !!}"
               class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>

</div>


                                </div>
                            </div>


                            <!-- end: DRAGGABLE HANDLES 3 PANEL -->
                        </div>
@endsection
@section('per-page-javascripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection
@section('footer-page-script')@endsection
@section('custom-in-script')
    Main.init();

@endsection
