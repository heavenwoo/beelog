@extends('layouts.master')

@section('content')

<!-- Carousel
================================================== -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://lorempixel.com/1140/500/?{{rand(1, 9999)}}" alt="First slide">
        </div>
        <div class="item">
            <img src="http://lorempixel.com/1140/500/?{{rand(1, 9999)}}" alt="Second slide">
        </div>
        <div class="item">
            <img src="http://lorempixel.com/1140/500/?{{rand(1, 9999)}}" alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- START THE FEATURETTES -->

    @foreach($articles as $key => $article)
    <hr class="featurette-divider">

    <div class="row featurette">
        @if ($key % 2 == 0)
        <div class="col-md-7">
            <h3 class="featurette-heading"><a href="{{ url('post', $article->id) }}">{{$article->subject}}</a></h3>
                <span><i class="glyphicon glyphicon-time"></i>{{ $article->created_at->diffForHumans() }}</span>
        @if($article->tags)
            @foreach($article->tags as $tag)
                <span><i class="glyphicon glyphicon-tag"></i>{{ $tag->name }}</span>
            @endforeach
        @endif
            <p class="lead">{{nl2br($article->intro)}}</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="{{$article->picture_url}}" alt="{{$article->subject}}">
        </div>
        @else
        <div class="col-md-7 col-md-push-5">
            <h3 class="featurette-heading"><a href="{{ url('post', $article->id) }}">{{$article->subject}}</a></h3>
            <p class="lead">{{nl2br($article->intro)}}</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="{{$article->picture_url}}" alt="{{$article->subject}}">
        </div>
        @endif
    </div>
    @endforeach

    <hr class="featurette-divider">
@if ($articles->render() != '')
    <div style="text-align: center">
    {!! $articles->render() !!}
    </div>
    <hr class="featurette-divider">
@endif
    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@stop