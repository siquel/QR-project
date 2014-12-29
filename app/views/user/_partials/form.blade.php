{{ Form::label('firstname', 'First name') }}
{{ Form::text('firstname') }}
{{ $errors->first('firstname', '<p class="error">:message</p>') }}

{{ Form::label('surname', 'Surname') }}
{{ Form::text('surname') }}
{{ $errors->first('surname', '<p class="error">:message</p>') }}

{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}
{{ $errors->first('password', '<p class="error">:message</p>') }}


{{ Form::submit('Save') }}