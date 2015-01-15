@extends('question._layouts.default')
@section('content')
{{ Form::model($question, array()) }}
@include('question._partials.form')
{{ Form::close() }}
@stop