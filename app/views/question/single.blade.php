@extends('question._layouts.default')
@section('head')
<link rel="stylesheet" href="/css/jquery.mobile.css" />
@stop
@section('content')
<div data-role="content">
{{ Form::model($question, array()) }}
	<fieldset data-role="controlgroup">
		<legend>Vertical:</legend>
	    <input name="radio-choice-v-2" id="radio-choice-v-2a" value="on" checked="checked" type="radio">
	    <label for="radio-choice-v-2a">One</label>
	    <input name="radio-choice-v-2" id="radio-choice-v-2b" value="off" type="radio">
	    <label for="radio-choice-v-2b">Two</label>
	    <input name="radio-choice-v-2" id="radio-choice-v-2c" value="other" type="radio">
	    <label for="radio-choice-v-2c">Three</label>   
	</fieldset>              

{{ Form::close() }}
</div>   
<script src="/js/jquery.js"></script>
<script src="/js/jquery.mobile.js"></script>
<script src="/js/script.js"></script>

@stop