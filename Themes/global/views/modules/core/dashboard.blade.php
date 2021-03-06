@extends($theme_back)

{{-- Web site Title --}}
@section('title')
    {{ trans('core::general.dashboard') }} :: @parent
@stop

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/' . $activeTheme . '/assets/css/admin.css') }}">
@stop

@section('scripts')
@stop

@section('inline-scripts')
@stop


{{-- Content --}}
@section('content')

    <div class="row">
        <h1>
            <p class="pull-right">
                <a href="/" class="btn btn-primary" title="{{ trans('core::cms.site') }}">
                    <i class="fa fa-globe fa-fw"></i>
                    {{ Lang::choice('core::cms.site', 1) }}
                </a>
            </p>
            <i class="fa fa-dashboard fa-lg"></i>
            {{ trans('core::cms.dashboard') }}
            <hr>
        </h1>
    </div>


    <div class="row">
        <div class="col-sm-6">

            <div class="row">
                <div class="col-sm-4">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.customer', 1) }} {{ Lang::choice('core::shop.catalog', 1) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/customer_catalogs') }}">Customer Shop Catalog</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.production', 1) }} {{ Lang::choice('core::shop.catalog', 1) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/production_catalogs') }}">Customer Product Catalog</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.vendor', 1) }} {{ Lang::choice('core::shop.catalog', 1) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/vendor_catalogs') }}">Vendor Catalog</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.customer', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/customers') }}">total_customers</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Customer Items
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/pallets') }}">Customer Items</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Global Items
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/pallets') }}">global Items</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.zone', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/zones') }}">Shop Zones</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.rack', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/racks') }}">Shop Racks</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.pallet', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/pallets') }}">Pallets</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.receivable', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/receiving') }}">Receivables</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.shippable', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/shipping') }}">Shippables</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ trans('core::shop.production') }}&nbsp;{{ Lang::choice('core::shop.item', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/production') }}">Production</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="col-sm-6">

            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::general.alert', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/alerts') }}">total_alerts</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.pick', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/picks') }}">total_picks</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ Lang::choice('core::shop.move', 2) }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/moves') }}">moves</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ trans('core::shop.production') }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{ URL::to('/admin/makes') }}">makes</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>



@stop
