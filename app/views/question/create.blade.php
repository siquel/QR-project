@extends('question._layouts.default')
@section('head')
	<link rel="stylesheet" type="text/css" href="/css/nav_list.css">
	<link rel="stylesheet" type="text/css" href="/css/dropkick.css">
@stop
@section('content')
	{{ Form::open(array('route' => 'question.store')) }}
<div id="colTwo">
	@include('question._partials.searchbar')
	@section('events')
	@stop
<div class="content">
	@include('question._partials.form')
</div>
</div>
	{{ Form::close() }}

<script src="/js/jquery.js"></script>
<script src="/js/dropkick.js"></script>
<script src="/js/script.js"></script>
@stop