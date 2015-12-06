@extends('layouts.master')

@section('content')

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
                <p class="lead">{!! nl2br($article->intro) !!}</p>
            </div>
            <div class="col-md-5{{ ($key % 2 == 0) ? ' col-md-pull-7' : '' }}">
                {!! HTML::image($article->picture_url, $article->subject, ['class' => 'featurette-image img-responsive img-rounded']) !!}
            </div>
        </div>
    @endforeach

    <hr class="featurette-divider">
    @if ($articles->render() != '')
        <div class="text-center">
            {!! $paginate !!}
        </div>
        <hr class="featurette-divider">
    @endif
    <!-- /END THE FEATURETTES -->
</div>
@stop