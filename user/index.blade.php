@extends('backend/layout/layout')
@section('title')
	Users Manager
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

			// publish settings
			$(".publish").bind("click", function (e) {
				var id = $(this).attr('id');
				e.preventDefault();

				$.ajax({
					type: "POST",
					url: "{!! url(getLang() . '/admin/user/" + id + "/toggle-publish/') !!}",
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
	<script type="text/javascript">
		$(document).ready(function () {
			$('#notification').show().delay(4000).fadeOut(700);
		});
	</script>
@endsection
@section('pageheader')
	<ol class="breadcrumb">
		<li><a href="{!! URL::route('admin.dashboard') !!}">Dashboard</a></li>
		<li class="active"><a href="{!! langRoute('admin.user.index') !!}"><i class="fa fa-user"></i> User</a></li>

	</ol>
	<div class="page-header">
		<h1>Users <small>manager</small></h1>
	</div>
@endsection

@section('page-section')@endsection

@section('content')


    <div class="col-lg-11">
        @include('flash::message')
        <br>

        <div class="pull-left">
            <div class="btn-toolbar">
                <a href="{!! langRoute('admin.user.create') !!}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;New User
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        @if($users->count())

            <table class="table table-striped table-bordered table-hover table-full-width">
                <thead>
                <tr>
	                <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                    <th>Last Login</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user )
                <tr>
	                <td>{!! $user->id; !!}</td>
                    <td> {!! link_to_route(getLang(). '.admin.user.show', $user->first_name . " " . $user->last_name, $user->id, array( 'class' => 'btn btn-link btn-xs' )) !!}
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->created_at !!}</td>
                    <td>{!! $user->last_login !!}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                Action
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{!! langRoute('admin.user.show', array($user->id)) !!}">
                                        <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Show User
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! langRoute('admin.user.edit', array($user->id)) !!}">
                                        <span class="glyphicon glyphicon-edit"></span>&nbsp;Edit User
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{!! URL::route('admin.user.delete', array($user->id)) !!}">
                                        <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete User
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        @else
        <div class="alert alert-danger">No results found</div>
        @endif
    </div>
    <div class="pull-left">
        <ul class="pagination">
            {!! $users->render() !!}
        </ul>
    </div>

@stop