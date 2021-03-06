<!-- login -->
@if ( Auth::user() )

    <section>
        <div class="row">

            <div class="col-sm-12">

                <ul class="footer_links">

                    @if ( Auth::user()->can('manage-admin') )
                        <li>
                            <a class="footer_links" href="/admin">
                                {{ trans('core::general.dashboard') }}
                            </a>
                        </li>
                    @endif
                    @if ( Auth::user()->can('manage_support') )
                        <li>
                            <a class="footer_links" href="/agent/dashboard">
                                {{ trans('core::helpdesk.agent_panel') }}
                            </a>
                        </li>
                    @endif
                    <li>
                        <a class="footer_links" href="/helpdesk">
                            {{ trans('core::helpdesk.helpdesk') }}
                        </a>
                    </li>
                    {{--
                            @include('partials.footer_menu', ['items'=> $menu_navLinks->roots()])
                    --}}
                </ul>

            </div>

        </div><!--./row-->
    </section>

@else

    <section>
        <div class="row">

            <div class="col-sm-2">
                <h4>
                    {{ trans('core::button.log_in') }}
                </h4>
            </div>

            <div class="col-sm-10 padding-top-sm">
                <form class="form" role="form" method="POST" action="/auth/login">
                    {!! csrf_field() !!}
                    <fieldset>
                        <input type="email" class="field bottom-email" name="email" tabindex="1" value=""
                               placeholder="{{ trans('core::account.email') }}">
                        <br>
                        <input type="password" class="field bottom-email" name="password" tabindex="2" value=""
                               placeholder="{{ trans('core::auth.password') }}">
                        <button type="submit" class="btn btn-default" tabindex="0">
                            {{ trans('core::button.log_in') }}
                        </button>
                    </fieldset>
                </form>
            </div>

        </div><!--./row-->
    </section>

    @endif
            <!-- login -->
