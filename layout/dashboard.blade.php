@extends('backend/layout/layout')

@section('header-title-small')
	Version 2.0
@endsection



@section('content')


<section class="content">
	<div class="row">
		<div class="col-sm-4">
			<div class="core-box">
				<div class="heading">
					<i class="clip-user-4 circle-icon circle-green"></i>
					<h2>Manage Users</h2>
				</div>
				<div class="content">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
				</div>
				<a class="view-more" href="#">
					View More <i class="clip-arrow-right-2"></i>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="core-box">
				<div class="heading">
					<i class="clip-clip circle-icon circle-teal"></i>
					<h2>Manage Orders</h2>
				</div>
				<div class="content">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
				</div>
				<a class="view-more" href="#">
					View More <i class="clip-arrow-right-2"></i>
				</a>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="core-box">
				<div class="heading">
					<i class="clip-database circle-icon circle-bricky"></i>
					<h2>Manage Data</h2>
				</div>
				<div class="content">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
				</div>
				<a class="view-more" href="#">
					View More <i class="clip-arrow-right-2"></i>
				</a>
			</div>
		</div>
	</div>
    @include('flash::message')
</section>
@endsection

@section('custom-in-script')
	Main.init();
	Index.init();
@endsection