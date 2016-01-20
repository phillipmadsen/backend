@extends('backend/layout/layout')

@section('pageheader')
	<ol class="breadcrumb">
		<li><a href="{!! URL::route('admin.dashboard') !!}">Dashboard</a></li>
		<li><a href="{!! langRoute('admin.user.index') !!}"><i class="fa fa-user"></i> Users</a></li>
		<li class="active">Delete User</li>
	</ol>
	<div class="page-header">
		<h1>Users <small>manager</small></h1>
	</div>
@endsection

@section('content')
<div class="col-lg-10">
    {!! Form::open( array(  'route' => array(getLang(). '.admin.user.destroy', $user->id ) ) ) !!}
    {!! Form::hidden( '_method', 'DELETE' ) !!}
    <div class="alert alert-warning">
        <div class="pull-left"><b> Be Careful!</b> Are you sure you want to delete <b>{!! $user->username !!} </b> ?
        </div>
        <div class="pull-right">
            {!! Form::submit( 'Yes', array( 'class' => 'btn btn-danger' ) ) !!}
            {!! link_to( URL::previous(), 'No', array( 'class' => 'btn btn-primary' ) ) !!}
        </div>
        <div class="clearfix"></div>
    </div>
    {!! Form::close() !!}
</div>
@stop