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