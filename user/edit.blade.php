@extends('backend/layout/layout')
@section('title')
	Edit Account
@endsection
@section('meta')

@endsection
@section('per-page-stylesheets')
	{{--<link rel="stylesheet" href="{!! asset('/assets/css/menu-managment.css') !!}">--}}
@endsection

@section('header-page-script')

	<script type="text/javascript">
		$(document).ready(function () {
			$('#notification').show().delay(4000).fadeOut(700);
		});
	</script>
@endsection

@section('pageheader')
	<ol class="breadcrumb">
		<li><a href="{!! URL::route('admin.dashboard') !!}">Dashboard</a></li>
		<li><a href="{!! url(getLang(). '/admin/user') !!}"><i class="fa fa-user"></i> User</a></li>
		<li class="active">Update User</li>

	</ol>
	<div class="page-header">
		<h1>Edit Account <small> | Update User</small></h1>
	</div>
@endsection

@section('content')

<div class="row">
		<div class="col-sm-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-external-link-square"></i>
					New User
					<div class="panel-tools">
						<a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
						<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
						<a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
						<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
						<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
					</div>
				</div>
				<div class="panel-body">


					@include('common.errors')
					{!! Form::open( array( 'route' => array(getLang(). '.admin.user.update', $user->id), 'method' => 'PATCH')) !!}
					@include('backend.user.fields')
					{!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
					<a href="{!! url(getLang() . '/admin/user') !!}" class="btn btn-default"> &nbsp;Cancel </a>

					{!! Form::close() !!}


				</div>
			</div>

		</div>
	</div>
@endsection

@section('admin-modal-config')@endsection
@section('per-page-javascripts')@endsection
@section('footer-page-script')@endsection
@section('custom-in-script')
	Main.init();
@endsection