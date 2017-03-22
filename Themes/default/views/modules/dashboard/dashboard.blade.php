@extends($theme_back)

{{-- Web site Title --}}
@section('title')
    Dashboard :: @parent
@stop

@section('styles')
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
                <a href="/" class="btn btn-primary" title="Dashboard">
                    <i class="fa fa-globe fa-fw"></i>
                    Language
                </a>
            </p>
            <i class="fa fa-dashboard fa-lg"></i>
            Dashboard
            <hr>
        </h1>
    </div>

    <div class="row">
        <div class="col-sm-6">

            {{--@if (Auth::user()->can('manage_ticket'))--}}

                <h2>
                    <i class="fa fa-ticket fa-lg"></i>
                    Tickets
                    <hr>
                </h2>

                <div class="row">
                    <div class="col-sm-6">

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Tickets
                                </h3>
                            </div>
                            <div class="panel-body">

                                <dl class="dl-horizontal">
                                    <dt>
                                        All Tickets
                                    </dt>
                                    <dd>
                                        <a href="{{ URL::to('/admin/tickets') }}">
                                            {{-- $total_tickets --}}
                                            {{-- Widget::AllTickets() --}}
                                            {{-- plugin_ticketAllActive() --}}
                                        </a>
                                    </dd>
                                </dl>

                                <dl class="dl-horizontal">
                                    <dt>
                                        Active Tickets
                                    </dt>
                                    <dd>
                                        <a href="{{ URL::to('/admin/tickets') }}">
                                            {{-- $total_tickets_active --}}
                                            {{-- plugin_ticketAllClosed() --}}
                                            {{-- Widget::TicketsActive() --}}
                                        </a>
                                    </dd>
                                </dl>

                                <dl class="dl-horizontal">
                                    <dt>
                                        Closed
                                    </dt>
                                    <dd>
                                        <a href="{{ URL::to('/admin/tickets') }}">
                                            {{-- $total_tickets_closed --}}
                                            {{-- plugin_ticketAllClosed() --}}
                                            {{--{!! Widget::TicketsClosed() !!}--}}
                                        </a>
                                    </dd>
                                </dl>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>

            {{--@endif--}}

        </div>
        <div class="col-sm-6">

        </div>
    </div>



@stop
