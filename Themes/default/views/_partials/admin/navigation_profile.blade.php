<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <img src="http://lorempixel.com/30/30/people" class="img-circle">{{ Auth::user()->user_name }}<span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a href="/profiles/{{ Auth::user()->id }}">
                {{ Lang::choice('kotoba::account.profile', 1) }}
            </a>
        </li>
        <li class="divider"></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="nav-divider"></li>
        <li><a href="#">Logout</a></li>
        @if (Auth::user()->can('manage_admin'))
            @include('partials.nav_menu', ['items'=> $menu_navAdmin->roots()])
            <li class="divider"></li>
        @endif
        <li>
            <a href="/auth/logout">
                {{ trans('kotoba::auth.log_out') }}
            </a>
        </li>
    </ul>
</li>

