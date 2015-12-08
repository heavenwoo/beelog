@extends('layouts.master')

@section('carousel')
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @for ($i = 0; $i < 5; $i++)
            <li data-target="#myCarousel" data-slide-to="{{ $i }}"{{ ($i) ? ' class="active"' : '' }}></li>
        @endfor
    </ol>
    <div class="carousel-inner" role="listbox">
        @for ($i = 0; $i < 5; $i++)
            <div class="item{{ ($i == 0) ? ' active' : '' }}">
                {!! HTML::image('http://lorempixel.com/1140/500/?' . rand(1, 9999), '', ['class' => 'img-rounded img-responsive']) !!}
            </div>
        @endfor
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<hr class="featurette-divider">
@stop

@section('content')
<!-- START THE FEATURETTES -->

@foreach($articles as $key => $article)
<div class="row featurette">
    <div class="col-md-4">
        {!! HTML::image($article->picture_url, $article->subject, ['class' => 'featurette-image img-responsive img-rounded']) !!}
    </div>
    <div class="col-md-8">
        <h5><a href="{{ url('post', $article->id) }}">{{$article->subject}}</a></h5>
        <span><i class="glyphicon glyphicon-time"></i>{{ $article->created_at->diffForHumans() }}</span>
    @if($article->tags)
        @foreach($article->tags as $tag)
        <span class="cm-tag"><i class="glyphicon glyphicon-tag"></i><a href="{!! url('tag', $tag->id) !!}">{{ $tag->name }}</a></span>
        @endforeach
    @endif
        <p class="c">{!! nl2br($article->intro) !!}</p>
    </div>
</div>
<hr>
    @endforeach

@if ($articles->render() != '')
<div class="text-center">
{!! $paginate !!}
</div>
@endif
    <!-- /END THE FEATURETTES -->
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