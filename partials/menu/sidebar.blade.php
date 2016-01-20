<ul class="main-navigation-menu">
	<li class="{{ setActive('admin') }}"><a href="{{ url(getLang() . '/admin') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a></li>
	<li class="{{ setActive('admin/menu*') }}"><a href="{{ url(getLang() . '/admin/menu') }}"> <i class="fa fa-bars"></i> <span>Menu</span> </a> </li>
	<li class="{{ setActive('admin/news*') }}"><a href="javascript:void(0)"> <i class="fa fa-th"></i> <span>News</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/news') }}"><i class="fa fa-calendar"></i> All News</a> </li>
			<li><a href="{{ url(getLang() . '/admin/news/create') }}"><i class="fa fa-plus-square"></i> Add News</a> </li>
		</ul>
	</li>
	<li class="{{ setActive('admin/page*') }}"><a href="javascript:void(0)"> <i class="fa fa-bookmark"></i> <span>Pages</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/page') }}"><i class="fa fa-folder"></i> All Pages</a> </li>
			<li><a href="{{ url(getLang() . '/admin/page/create') }}"><i class="fa fa-plus-square"></i> Add Page</a> </li>
		</ul>
	</li>
	<li class="{{ setActive(['admin/photo-gallery*', 'admin/video*']) }}"><a href="javascript:void(0)"> <i class="fa fa-picture-o"></i> <span>Galleries</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li> <a href="{{ url(getLang() . '/admin/photo-gallery') }}"><i class="fa fa-camera"></i> Photo Galleries</a> </li>
			<li> <a href="{{ url(getLang() . '/admin/video') }}"><i class="fa fa-play-circle-o"></i> Video Galleries</a> </li>

		</ul>
	</li>
	<li class="{{ setActive('admin/article*') }}"><a href="javascript:void(0)"> <i class="fa fa-book"></i> <span>Articles</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/article') }}"><i class="fa fa-archive"></i> All Articles</a> </li>
			<li> <a href="{{ url(getLang() . '/admin/article/create') }}"><i class="fa fa-plus-square"></i> Add Article</a> </li>
		</ul>
	</li>
	<li class="{{ setActive('admin/slider*') }}"><a href="javascript:void(0)"> <i class="fa fa-tint"></i> <span>Plugins</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/slider') }}"><i class="fa fa-toggle-up"></i> Sliders</a> </li>
		</ul>
	</li>
	<li class="{{ setActive('admin/project*') }}"><a href="javascript:void(0)"> <i class="fa fa-gears"></i> <span>Projects</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/project') }}"><i class="fa fa-gear"></i> All Projects</a> </li>
			<li> <a href="{{ url(getLang() . '/admin/project/create') }}"><i class="fa fa-plus-square"></i> Add Project</a> </li>
		</ul>
	</li>
	<li class="{{ setActive('admin/faq*') }}"><a href="javascript:void(0)"> <i class="fa fa-question"></i> <span>Faqs</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/faq') }}"><i class="fa fa-question-circle"></i> All Faq</a></li>
			<li> <a href="{{ url(getLang() . '/admin/faq/create') }}"><i class="fa fa-plus-square"></i> Add Faq</a> </li>
		</ul>
	</li>
	<li class="{{ setActive(['admin/user*', 'admin/group*']) }}"><a href="javascript:void(0)"> <i class="fa fa-user"></i> <span>Users</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/user') }}"><i class="fa fa-user"></i> All Users</a> </li>
			<li><a href="{{ url(getLang() . '/admin/role') }}"><i class="fa fa-group"></i> Add Role</a> </li>
		</ul>
	</li>
	<li class="{{ setActive(['admin/log*', 'admin/form-post']) }}"><a href="javascript:void(0)"> <i class="fa fa-thumb-tack"></i> <span>Records</span>
		<i class="fa fa-angle-left pull-right"></i> </a>
		<ul class="sub-menu">
			<li><a href="{{ url(getLang() . '/admin/log') }}"><i class="fa fa-save"></i> Log</a></li>
			<li> <a href="{{ url(getLang() . '/admin/form-post') }}"><i class="fa fa-envelope"></i> Form Post</a> </li>
		</ul>
	</li>
	<li class="{{ setActive('admin/settings*') }}">
		<a href="{{ url(getLang() . '/admin/settings') }}"> <i class="fa fa-gear"></i> <span>Settings</span> </a>
	</li>
	<li class="{{ setActive('admin/logout*') }}">
		<a href="{{ url(getLang() . '/admin/logout') }}"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
	</li>
</ul>