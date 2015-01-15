<div class="form-group">
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', null, array('disabled', 'class' => 'form-control'))}}
</div>

<div class="form-group">
	{{ Form::label('firstname', 'First name') }}
	{{ Form::text('firstname', Input::old('firstname'),  array('class' => 'form-control')) }}
	{{ $errors->first('firstname', '<p class="error">:message</p>') }}
</div>

<div class="form-group">
	{{ Form::label('surname', 'Surname') }}
	{{ Form::text('surname', Input::old('surname'),  array('class' => 'form-control')) }}
	{{ $errors->first('surname', '<p class="error">:message</p>') }}
</div>

<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('class' => 'form-control')) }}
	{{ $errors->first('password', '<p class="error">:message</p>') }}
</div>

<div class="form-actions">
	{{ Form::submit('Save changes', array('class' => 'save')) }}
</div>