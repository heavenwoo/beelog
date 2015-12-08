<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    {!! HTML::style('dist/img/favicon.ico', ['rel' => 'shortcut icon']) !!}
    <!-- Loading Bootstrap -->
    {!! HTML::style('dist/css/vendor/bootstrap/css/bootstrap.min.css') !!}

    <!-- Loading Flat UI -->
    {!! HTML::style('dist/css/flat-ui.min.css') !!}
    {!! HTML::style('dist/css/beelog.css') !!}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
@yield('link')
</head>
<body>
@include('layouts.navbar')
<div class="container">
    @yield('carousel')
    <div class="row">
        <div class="col-md-9">
            @yield('content')
        </div>
        <div class="col-md-3">
            @yield('sidebar')
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="panel-footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Proceed in: {{ round((microtime(true) - LARAVEL_START)*1000, 2) }}ms</p>
    </footer>
</div><!-- /.container -->
<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
{!! HTML::script('dist/js/vendor/jquery.min.js') !!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! HTML::script('dist/js/vendor/video.js') !!}
{!! HTML::script('dist/js/flat-ui.min.js') !!}
{!! HTML::script('dist/js/beelog.js') !!}
@yield('script')
</body>
</html>