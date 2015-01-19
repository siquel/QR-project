<div class="form-group">
	{{ Form::label('question', 'Question')}}
	{{ Form::text('question', Input::old('question'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('answer', 'Answer')}}
	{{ Form::text('answer', Input::old('answer'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('points', 'Points')}}
	{{ Form::number('points', '5', array('class' => 'form-control')) }}
</div>

<div class="form-actions">
	{{ Form::submit('Create', array('class' => 'save')) }}
</div>