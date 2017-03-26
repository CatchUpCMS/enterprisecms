@section('Tools')
	class="active"
@stop

@section('tools-bar')
	active
@stop

@section('kb')
	class="active"
@stop


@section('sidebar')


<li class="header">
	{{ trans('core::helpdesk.knowledge_base') }}
</li>

<li class="treeview @yield('category')">
	<a href="#">
		<i class="fa fa-list-ul"></i>
		<span>
			{{ trans('core::helpdesk.category') }}
		</span>
		<i class="fa fa-angle-left pull-right"></i>
	</a>
	<ul class="treeview-menu">
		<li @yield('add-category')>
			<a href="{{url('agent/category/create') }}">
				<i class="fa fa-circle-o"></i>
				{{ trans('core::helpdesk.addcategory') }}
			</a>
		</li>
		 <li @yield('all-category')>
		 	<a href="{{url('agent/category') }}">
		 		<i class="fa fa-circle-o"></i>
		 		{{ trans('core::helpdesk.allcategory') }}
		 	</a>
		 </li>
	 </ul>
</li>

<li class="treeview @yield('article')">
	<a href="#">
		<i class="fa fa-edit"></i>
		<span>
			{{ trans('core::helpdesk.article') }}
		</span>
		<i class="fa fa-angle-left pull-right"></i>
	</a>
	<ul class="treeview-menu">
		<li @yield('add-article')>
			<a href="{{url('agent/article/create') }}">
				<i class="fa fa-circle-o"></i>
				{{ trans('core::helpdesk.addarticle') }}
			</a>
		</li>
		 <li @yield('all-article')>
			 <a href="{{url('agent/article') }}">
				 <i class="fa fa-circle-o"></i>
				 {{ trans('core::helpdesk.allarticle') }}
			 </a>
		 </li>
	 </ul>
</li>

<li class="treeview @yield('pages')">
	<a href="#">
		<i class="fa fa-file-text"></i>
		<span>
			{{ trans('core::helpdesk.pages') }}
		</span>
		<i class="fa fa-angle-left pull-right"></i>
	</a>
	<ul class="treeview-menu">
		<li @yield('add-pages')>
			<a href="{{url('agent/page/create') }}">
				<i class="fa fa-circle-o"></i>
				{{ trans('core::helpdesk.addpages') }}
			</a>
		</li>
		<li @yield('all-pages')>
			<a href="{{url('agent/page') }}">
				<i class="fa fa-circle-o"></i>
				{{ trans('core::helpdesk.allpages') }}
			</a>
		</li>
	 </ul>
</li>

<li class="treeview @yield('commnets')">
	<a href="{{url('agent/comment') }}">
		<i class="fa fa-comments-o"></i>
		<span>
			{{ trans('core::helpdesk.comments') }}
		</span>
	</a>
</li>

<li class="treeview @yield('settings')">
	<a href="{{url('agent/kb/settings') }}">
		<i class="fa fa-wrench"></i>
		<span>
			{{ trans('core::helpdesk.settings') }}
		</span>
	</a>
</li>


@stop
