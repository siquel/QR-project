@extends('question._layouts.default')
@section('content')
<div id="colTwo">
	@include('question._partials.searchbar')
	@section('events')
	@stop
<div class="content">
	{{ Form::open(array()) }}
	@include('question._partials.form')
	{{ Form::close() }}
</div>
</div>
@stop