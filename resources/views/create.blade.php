@extends('layouts.master')

@section('content')
    <div class="content">
        {!! Form::open(['url'=>'post/store']) !!}
        <div class="form-group">
            {!! Form::label('subject','标题:') !!}
            {!! Form::text('subject',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','正文:') !!}
            {!! Form::textarea('content',null,['class'=>'form-control']) !!}
        </div>
        <div class="tagsinput-primary">
            {!! Form::text('tags',"School, Teacher, Colleague", ['class'=>'tagsinput', 'data-role' => 'tagsinput']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('发表文章',['class'=>'btn btn-block btn-lg btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop