<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Login and Registration Page</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/bootstrap/css/bootstrap.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/font-awesome/css/font-awesome.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/fonts/style.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/css/main.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/css/main-responsive.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/iCheck/skins/all.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') !!}">
		<link rel="stylesheet" href="{!! asset('/admin/assets/css/theme_light.css') !!}" type="text/css" id="skin_color">
		<link rel="stylesheet" href="{!! asset('/admin/assets/css/print.css') !!}" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/font-awesome/css/font-awesome-ie7.min.css') !!}">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example1">
		<div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="logo">Grace<i class="clip-clip"></i>Admin
			</div>


			    @if (count($errors) > 0)
			        <div class="alert alert-danger">
			            <strong>Whoops!</strong> There were some problems with your input.<br><br>
			            <ul>
			                @foreach ($errors->all() as $error)
			                    <li>{{ $error }}</li>
			                @endforeach
			            </ul>
			        </div>
			    @endif

@yield('loginform')
{{-- @yield('forgotform') --}}
{{-- @yield('registerform') --}}
			<!-- start: COPYRIGHT -->
			<div class="copyright">
				2014 &copy; The Grace Company.
			</div>
			<!-- end: COPYRIGHT -->
		</div>
	 @include('backend.auth.scripts')

    <script>
        jQuery(document).ready(function() {
				Main.init();
				Login.init();
		});
        $(function () {

            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    		<!-- start: MAIN JAVASCRIPTS -->

		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{!! asset('/admin/assets/plugins/jquery-validation/dist/jquery.validate.min.js') !!}"></script>
		<script src="{!! asset('/admin/assets/js/login.js') !!}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->



	 </body>
	<!-- end: BODY -->
</html>