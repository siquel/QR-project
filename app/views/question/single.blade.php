@extends('question._layouts.default')
@section('head')
<link rel="stylesheet" href="/css/jquery.mobile.css" />
@stop
@section('content')
<div data-role="content">
{{ Form::model($question, array()) }}
	<fieldset data-role="controlgroup">
		<legend>{{{ $question->question }}}</legend>
		@foreach ($question->answers as $answer)
		{{ Form::radio('choice', $answer->id, false, array('id' => "ans$answer->id")) }}
		{{ Form::label("ans$answer->id", $answer->answer )}}
		@endforeach
	</fieldset>
{{ Form::close() }}
</div>   
<script src="/js/jquery.js"></script>
<script src="/js/jquery.mobile.js"></script>
<script src="/js/script.js"></script>

@stop