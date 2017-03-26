<nav class="navbar navbar-default">
<div class="col-sm-4 col-sm-offset-4">

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav nav-remove-style">

	<li @yield('home')><a href="{{ url('helpdesk') }}">{!! trans('core::helpdesk.helpdesk') !!}</a></li>

	<li @yield('submit')><a href="{{ url('helpdesk/tickets/create') }}">{!! trans('core::helpdesk.submit_a_ticket') !!}</a></li>

	<li @yield('myticket')><a href="{{ url('helpdesk/tickets') }}">{!! trans('core::helpdesk.my_tickets') !!}</a></li>

	<li @yield('knowledgebase')><a href="{{ url('helpdesk/knowledgebase') }}">{!! trans('core::helpdesk.knowledge_base') !!}</a></li>

</ul>

</div><!-- /.navbar-collapse -->
</nav>
