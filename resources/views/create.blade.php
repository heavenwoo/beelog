@extends('layouts.master')

@section('link')
    {!! HTML::style('dist/css/select2.css') !!}
@stop

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
        <div class="form-group">
            {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control multiselect multiselect-default mrs mbm', 'multiple'=>'multiple', 'data-toggle' => 'select']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('发表文章',['class'=>'btn btn-block btn-lg btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop

@section('script')
    {!! HTML::script('dist/js/select2.full.min.js') !!}
    <script type="text/javascript">
        $("select").select2({dropdownCssClass: 'dropdown-inverse'});
    </script>
@stop