@extends('backend/layout/layout')
@section('title')
    replace this text
@endsection
@section('meta')
    <meta name="_token" content="{!! csrf_token() !!}"/>
@endsection
@section('per-page-stylesheets')
 <link rel="stylesheet" href="{!! asset('/assets/css/menu-managment.css') !!}">
@endsection

@section('header-page-script')
 <script type="text/javascript">
        $(document).ready(function () {

            $('#notification').show().delay(4000).fadeOut(700);

            // publish settings
            $(".publish").bind("click", function (e) {
                var id = $(this).attr('id');
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{!! url(getLang() . '/admin/menu/" + id + "/toggle-publish/') !!}",
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    success: function (response) {
                        if (response['result'] == 'success') {
                            var imagePath = (response['changed'] == 1) ? "{!! url('/') !!}/assets/images/publish_16x16.png" : "{!!url('/')!!}/assets/images/not_publish_16x16.png";
                            $("#publish-image-" + id).attr('src', imagePath);
                        }
                    },
                    error: function () {
                        alert("error");
                    }
                });
            });
        });
</script>
@endsection

@section('pageheader')
<ol class="breadcrumb">
       <li><a href="{!! URL::route('admin.dashboard') !!}">Dashboard</a></li>
       <li class="active">Menu</li>
</ol>
<div class="page-header">
    <h1>Nestable Menu <small>manager</small></h1>
</div>
@endsection

@section('page-section')@endsection


@section('content')


    <div class="col-lg-12">
        @include('flash::message')
        <div class="pull-right">
            <div id="msg"></div>
        </div>
        <br> <a href="{!! langRoute('admin.menu.create') !!}" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus"></span>&nbsp;New Menu Item </a> <br>
        <hr>


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
                                        <div class="dd" id="nestable">
                                        {!! $menus !!}
                                        </div>
                                        @if($menus === null)
                                        <div class="alert alert-danger">No results found</div>
                                        @endif
                                        </div>
                                </div>
                            </div>
                                 <textarea id="nestable-output"></textarea>

                    <div id="nestable-menu">
                                <button type="button" data-action="expand-all" class="btn btn-blue">
                                    Expand All
                                </button>
                                <button type="button" data-action="collapse-all" class="btn btn-bricky">
                                    Collapse All
                                </button>
                            </div>
                            <!-- end: DRAGGABLE HANDLES 3 PANEL -->
                        </div>

@endsection


{{-- url: "{!! url(getLang() . '/admin/menu/" + id + "/toggle-publish/') !!}", --}}
{{-- url: "{!! url(getLang() . '/admin/menu/save') !!}", --}}

@section('per-page-javascripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="{!! asset('/admin/assets/plugins/nestable/jquery.nestable.js') !!}"></script>
        <script src="{!! asset('/admin/assets/js/ui-nestable.js') !!}"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

<script type="text/javascript">
    $(document).ready(function () {
        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
            output = list.data('output');
            if (window.JSON) {
                var jsonData = window.JSON.stringify(list.nestable('serialize'));
               // console.log(window.JSON.stringify(list.nestable('serialize')));
                $.ajax({
                    type: "POST",
                    {{-- url: "{!! URL::route('admin.menu.save') !!}", --}}
                     url: "{!! url(getLang() . '/admin/menu/save') !!}",
                    data: {'json': jsonData},
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    success: function (response) {
                        // $("#msg").append('<div class="alert alert-success msg-save">Saved!</div>');
                        $("#msg").append('<div class="msg-save" style="float:right; color:red;">Saving!</div>');
                        $('.msg-save').delay(1000).fadeOut(500);
                    },
                    error: function () {
                        alert("error");
                    }
                });
            } else {
                alert('error');
            }
        };
        $('#nestable').nestable({
            group: 2
        }).on('change', updateOutput);
    });
</script>
@endsection

@section('footer-page-script')@endsection

@section('custom-in-script')
    Main.init();
        UINestable.init();
@endsection
