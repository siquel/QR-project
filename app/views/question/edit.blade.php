@extends('question._layouts.default')
@section('content')
<div class="content">
	{{ Form::model($question, array('route' => array('question.update', $question->id), 'method' => 'PUT')) }}
	<div class="form-group">
		{{ Form::label('question', 'Question')}}
		{{ Form::text('question', Input::old('question'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('answer[]', 'Answer') }}

		@if (count($question->answers) == 0)
			<div class="form-group">
			<div class="field">
				{{ Form::text('answer[]', Input::old('answer'), array('class' => 'form-control')) }}
				{{ Form::button('+', array('class' => 'btn add-more')) }}
				{{ Form::hidden('answer_id[]', 0) }}
			</div>
		</div>
		@else
		<?php $i = 0; ?>
		@foreach($question->answers as $answer)
			<div class="field">
				@if ($i == count($question->answers) - 1) 
					{{ Form::text('answer[]', $answer->answer, array('class' => 'form-control')) }}
					{{ Form::button('+', array('class' => 'btn add-more')) }}
				@else
					{{ Form::text('answer[]', $answer->answer, array('class' => 'form-control')) }}
					{{ Form::button('-', array('class' => 'btn remove-this btn-danger')) }}
				@endif
				{{ Form::hidden('answer_id[]', $answer->id) }}
			</div>
			<?php $i++ ?>
		@endforeach
		@endif
	</div>
	<div class="form-actions">
	{{ Form::submit('Save changes', array('class' => 'save')) }}
	</div>
	{{ Form::close() }}
</div>
	<script src="/js/jquery.js"></script>
	<script src="/js/script.js"></script>
@stop