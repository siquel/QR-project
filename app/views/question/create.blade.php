@extends('question._layouts.default')
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
@stop