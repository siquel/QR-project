@extends('user._layouts.edit')
@section('content')
	<div class="content">
		<div class="content-header">
			<h1>Profile settings</h1>
		</div>
		<hr>
		{{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}
        @include('user._partials.form')
    	{{ Form::close() }}
	</div>

@stop
