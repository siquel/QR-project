@extends('question._layouts.default')
@section('head')
<link rel="stylesheet" href="/css/jquery.mobile.css" />
@stop
@section('content')
<div data-role="content">
	<fieldset data-role="controlgroup">
		{{ Form::open(array('route' => array('answer.quiz'), 'method' => 'get')) }}

			<legend>{{ $question['question'] }}</legend>
			
			@foreach ($question->answers as $answer)
				{{ Form::radio('choice', $answer->id, false, array('id' => "ans$answer->id")) }}
				{{ Form::label("ans$answer->id", $answer->answer )}}
			@endforeach
			<input type="hidden" name="event" value="{{{ $question->event_id }}}" />
			<input type="hidden" name="q" value="{{{ $question->id }}}" />
		{{ Form::submit('Submit!', array('class' => 'save')) }}
{{ Form::close() }}
	</fieldset>
</div>   
<script src="/js/jquery.js"></script>
<script src="/js/jquery.mobile.js"></script>
<script src="/js/script.js"></script>

@stop