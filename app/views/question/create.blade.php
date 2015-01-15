@extends('question._layouts.default')
@section('content')
{{ Form::open(array()) }}
@include('question._partials.form')
{{ Form::close() }}
@stop