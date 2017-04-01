@if (Auth::guest())
@else
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <img src="http://lorempixel.com/30/30/people" class="img-circle">{{ Auth::user()->user_name }}<span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="/profiles/{{ Auth::user()->id }}">
                {{ Lang::choice('core::account.profile', 1) }}
            </a>
        </li>
        <li class="divider"></li>
        <li><a href="#">Dashboard</a></li>
        {{--@if (Auth::user()->can('manage-admin'))
            @include('partials.nav_menu', ['items'=> $menu_navAdmin->roots()])
            <li class="divider"></li>
        @endif--}}
        <li class="nav-divider"></li>
        <li>
            <a href="/auth/logout">
                {{ trans('core::auth.log_out') }}
            </a>
        </li>
    </ul>
</li>
@endif