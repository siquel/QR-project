
<div class="form-group">
	{{ Form::label('question', 'Question')}}
	{{ Form::text('question', Input::old('question'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
		{{ Form::label('answer[]', 'Answer')}}
	<div class="field">
		{{ Form::text('answer[]', Input::old('answer'), array('class' => 'form-control')) }}
		{{ Form::button('+', array('class' => 'btn add-more')) }}
	</div>
</div>

<div class="form-actions">
	{{ Form::submit('Create', array('class' => 'save')) }}
</div>