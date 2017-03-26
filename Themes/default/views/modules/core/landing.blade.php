@extends($theme_agent)

        <!-- content -->
@section('content')

<div style="padding-top: 5px; padding-left: 5px; padding-bottom: 5px; margin-top:65px; background-color: #C4D8E4;"><h1>Logged in as:</h1></div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{!! Lang::get('core::lang.settings') !!}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/adminpanel/companies/manage')}}"><span class="fa-stack fa-2x">

                 <i class="fa fa-building-o fa-stack-1x"></i>
               </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('core::lang.company') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->
                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/adminpanel/system/manage')}}"><span class="fa-stack fa-2x">

                 <i class="fa fa-laptop fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('core::lang.system') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/mailpanel/mailboxes/manage')}}"><span class="fa-stack fa-2x">

                 <i class="fa fa-at fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('email::lang.mailboxes') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/ticketspanel/tickets/manage')}}"><span class="fa-stack fa-2x">

                 <i class="fa fa-file-text-o fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('tickets::lang.ticket') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/mailpanel/autoresponder')}}"><span class="fa-stack fa-2x">

                 <i class="fa fa-reply-all fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('tickets::lang.auto_response') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/adminpanel/alerts/manage')}}"><span class="fa-stack fa-2x">
                 <i class="fa fa-bell-o fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('core::lang.alert_notices') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/adminpanel/languages')}}"><span class="fa-stack fa-2x">
                 <i class="fa fa-language fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('core::lang.language') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{url('/adminpanel/job-scheduler')}}"><span class="fa-stack fa-2x">

                 <i class="fa fa-hourglass-o fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('core::lang.cron') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- ./box-body -->
    </div><!-- /.box -->


@endsection
