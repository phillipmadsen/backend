<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<!-- start: TOP NAVIGATION CONTAINER -->
	<div class="container">
		<div class="navbar-header">
			<!-- start: RESPONSIVE MENU TOGGLER -->
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="clip-list-2"></span>
			</button>
			<!-- end: RESPONSIVE MENU TOGGLER -->
			<!-- start: LOGO -->
			<a class="navbar-brand" href="{!! url(getLang() . '/admin') !!}">
				GRACE<i class="clip-clip"></i>ADMIN
			</a>
			<!-- end: LOGO -->
		</div>
		<div class="navbar-tools">
			<!-- start: TOP NAVIGATION MENU -->
			<ul class="nav navbar-right">
				<!-- start: TO-DO DROPDOWN -->
				<li class="dropdown">

				</li>
				<!-- end: TO-DO DROPDOWN-->
				<!-- start: NOTIFICATION DROPDOWN -->
				<li class="dropdown notifications-menu">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
							<span class="label label-warning">{{ $formPost->count() }}</span> </a>
						<ul class="dropdown-menu">
							<li class="header">You have {{ $formPost->count() }} notifications</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									@foreach($formPost as $item)
										<li>
											<a href="#">
												<p>{{ $item->subject }}</p>
											</a>
										</li>
									@endforeach
								</ul>
							</li>
							<li class="footer"><a href="{{ url(getLang() . '/admin/form-post') }}">See All Messages</a></li>
						</ul>
					</li>

				<!-- end: NOTIFICATION DROPDOWN -->
				<!-- start: MESSAGE DROPDOWN -->
				<li class="dropdown">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="USA English" src="/flags/{{ LaravelLocalization::getCurrentLocale() }}.png">
							<span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
								<li>
									<a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}">
									{{-- <img alt="ES" src="{!! asset('/backend/img/flags/{{{ $localeCode }}}.png') !!}"> --}}
									 <img alt="" src="/flags/{{$localeCode}}.png">&nbsp; &nbsp;
									{{{ $properties['native'] }}}
									</a>

								</li>
							@endforeach
						</ul>
				</li>
				<!-- end: MESSAGE DROPDOWN -->
				<!-- start: USER DROPDOWN -->
				<li class="dropdown current-user">
					<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
						{{-- <img src="{!! asset('/admin/assets/images/avatar-1-small.jpg') !!}" class="circle-img" alt=""> --}}
						<img src="{{ gravatarUrl(Sentinel::getUser()->email) }}" class="circle-img" alt="User Image"/>
						<span class="hidden-xs username">{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</span>

						<i class="clip-chevron-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="{{ gravatarUrl(Sentinel::getUser()->email) }}" class="user-img" alt="User Image"/>
							<p>
							<p> {{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }} - add profile title
								<small>Member since -- add date --</small>
							</p>
						</li>
						<li class="user-body">
							<div class="col-xs-4 text-center">

							</div>
							<div class="col-xs-4 text-center">

							</div>
							<div class="col-xs-4 text-center">

							</div>
						</li>
						<li> <a href="{{ url(getLang() . '/admin/user/' . Sentinel::getUser()->id) }}"> <i class="clip-user-2"></i> &nbsp;My Profile </a> </li>
						<li> <a href="pages_calendar.html"> <i class="clip-calendar"></i> &nbsp;My Calendar </a> <li> <a href="pages_messages.html"> <i class="clip-bubble-4"></i> &nbsp;My Messages (3) </a> </li>
						<li class="divider"></li>
						{{-- <li> <a href="utility_lock_screen.html"><i class="clip-locked"></i> &nbsp;Lock Screen </a> </li> --}}
						<li> <a href="{{ url('/admin/logout') }}"> <i class="clip-exit"></i> &nbsp;Log Out </a> </li>
					</ul>
				</li>
				<!-- end: USER DROPDOWN -->
			</ul>
			<!-- end: TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->