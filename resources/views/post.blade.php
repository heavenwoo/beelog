@extends('layouts.master')

@section('content')

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container content">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <h2>{{$article['subject']}}</h2>
            <p>{!! nl2br($article['content']) !!}</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>
@stop