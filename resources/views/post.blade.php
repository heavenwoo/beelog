@extends('layouts.master')

@section('content')

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="content">
    <!-- Three columns of text below the carousel -->
    <div>
        <h4>{{ $article->subject }}</h4>
        <p>{!! nl2br($article->content) !!}</p>
    </div><!-- /.col-lg-4 -->
</div>
@stop

@section('sidebar')
    <div>
        <div class="tile">
            <img src="dist/img/icons/svg/compas.svg" alt="Compas" class="tile-image big-illustration">
            <h3 class="tile-title">Web Oriented</h3>
            <p>100% convertable to HTML/CSS layout.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat">Get Pro</a>
        </div>
    </div>
    <div>
        <div class="tile">
            <img src="dist/img/icons/svg/compas.svg" alt="Compas" class="tile-image big-illustration">
            <h3 class="tile-title">Web Oriented</h3>
            <p>100% convertable to HTML/CSS layout.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat">Get Pro</a>
        </div>
    </div>
    <div>
        <div class="tile">
            <img src="dist/img/icons/svg/compas.svg" alt="Compas" class="tile-image big-illustration">
            <h3 class="tile-title">Web Oriented</h3>
            <p>100% convertable to HTML/CSS layout.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat">Get Pro</a>
        </div>
    </div>
    <div style="overflow:hidden;">
        <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                    <div id="datetimepicker12"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker12').datetimepicker({
                    inline: true,
                    sideBySide: true
                });
            });
        </script>
    </div>
@stop