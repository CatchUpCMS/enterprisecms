@if (Auth::guest())

    {{--<ul class="nav navbar-nav navbar-right">--}}
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <img src="http://lorempixel.com/30/30/people" class="img-circle">Guest
                Guest <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/auth/login">Log In</a></li>
                <li><a href="/auth/register">Register</a></li>
            </ul>
        </li>
    {{--</ul>--}}



@else

    {{--<ul class="nav navbar-nav navbar-right">
            
                        <li>
                            @if (Auth::user()->avatar != null)
                                <img
                                    src="{{ asset(Auth::user()->avatar) }}"
                                    alt="{{ Auth::user()->email }}"
                                    class="img-circle nav-profile"
                                />
                            @else
                                <img
                                    src="{{ asset('/assets/images/usr.png') }}"
                                    alt="{{ Auth::user()->email }}"
                                    class="img-circle nav-profile"
                                />
                            @endif
                        </li>
            --}}





            <li class="dropdown">

                    <button class="navbar-btn" data-toggle="dropdown">
                        <img src="http://lorempixel.com/30/30/people" class="img-circle">User Name
                    </button>

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="http://lorempixel.com/30/30/people" class="img-circle">User Name
                    {{ Auth::user()->name }} <span class="caret"></span>
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
    {{-- </ul> --}}

@endif
