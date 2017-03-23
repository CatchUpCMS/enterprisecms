<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content=""/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
            CatchUpCRM :: Login
        @show
    </title>

    <!-- ------------------------------------------ Google Fonts ------------------------------------------ -->
    <!--
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    -->

    <!-- ------------------------------------------ CSS stylesheets ------------------------------------------ -->

    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/font-awesome-4.4.0/css/font-awesome.css') }}">

    <!--
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css') }}">
-->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/illuminate3/css/standard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">

    <!-- ------------------------------------------ app loaded CSS stylesheets ------------------------------------------ -->
    @yield('styles')

            <!-- ------------------------------------------ head loaded js ------------------------------------------ -->
    <script type="text/javascript"
            src="{{ asset('assets/vendors/jquery/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>

</head>

<body>

@include($activeTheme . '::' . '_partials.public_content')


        <!-- ------------------------------------------ js ------------------------------------------ -->

<script type="text/javascript" src="{{ asset('assets/vendors/jquery/jquery-2.1.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-3.3.5-dist/js/bootstrap.min.js') }}"></script>


<!-- ------------------------------------------ app loaded js ------------------------------------------ -->
@yield('scripts')

        <!-- ------------------------------------------ template loaded js ------------------------------------------ -->
<script type="text/javascript">
    @yield('inline-scripts')
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


</body>
</html>
