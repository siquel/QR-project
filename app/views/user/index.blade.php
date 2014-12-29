@extends('layouts.default')

@section('content')
	@foreach($users as $user)
		<p>{{{ $user->email }}}</p>
	@endforeach
@stop