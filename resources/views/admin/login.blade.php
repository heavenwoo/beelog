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

    <title>Beelog built with Laravel 5 and Flat UI</title>

</head>
<body>
<div class="container">

    <div class="login">
        <div class="login-screen">
            <div class="login-icon">
                <img src="dist/img/icons/png/Retina-Ready.png" alt="Welcome to Mail App" />
                <h4>Welcome to <small>Beelog</small></h4>
            </div>

            <div class="login-form">
                <div class="form-group">
                    <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" />
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>

                <a class="btn btn-primary btn-lg btn-block" href="#">Log in</a>
                <a class="login-link" href="#">Lost your password?</a>
            </div>
        </div>
    </div>

</div><!-- /.container -->
<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
{!! HTML::script('dist/js/vendor/jquery.min.js') !!}
        <!-- Include all compiled plugins (below), or include individual files as needed -->
{!! HTML::script('dist/js/vendor/video.js') !!}
{!! HTML::script('dist/js/flat-ui.min.js') !!}
{!! HTML::script('dist/js/beelog.js') !!}
</body>
</html>