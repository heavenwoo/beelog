@extends('layouts.master')

@section('content')

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

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="marketing">

    <!-- START THE FEATURETTES -->

    @foreach($articles as $key => $article)
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7{{ ($key % 2 == 0) ? ' col-md-push-5' : '' }}">
            <h3 class="featurette-heading"><a href="{{ url('post', $article->id) }}">{{$article->subject}}</a></h3>
                <span><i class="glyphicon glyphicon-time"></i>{{ $article->created_at->diffForHumans() }}</span>
        @if($article->tags)
            @foreach($article->tags as $tag)
                <span><i class="glyphicon glyphicon-tag"></i>{{ $tag->name }}</span>
            @endforeach
        @endif
            <p class="lead">{!! nl2br($article->intro) !!}</p>
        </div>
        <div class="col-md-5{{ ($key % 2 == 0) ? ' col-md-pull-7' : '' }}">
            {!! HTML::image($article->picture_url, $article->subject, ['class' => 'featurette-image img-responsive img-rounded']) !!}
        </div>
    </div>
    @endforeach

    <hr class="featurette-divider">
@if ($articles->render() != '')
    <div class="pagination-minimal">
    {!! $articles->render() !!}
    </div>
    <hr class="featurette-divider">
@endif
    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@stop