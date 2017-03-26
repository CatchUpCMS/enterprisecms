<footer class="main-footer">

    <div class="pull-right hidden-xs padding-right-lg">
        <b>
            {{ trans('core::general.version') }}
        </b>
        {{ Config::get('core.version') }}
    </div>

    <strong>
        {{ trans('core::general.copyright') }} &copy;
        2015-2016 {{ Setting::get('brand_title', Config::get('core.brand_title')) }}
    </strong>

    {{ trans('core::general.all_rights_reserved') }}

</footer>
