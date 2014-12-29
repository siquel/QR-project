@extends('layouts.default')

@section('content')
	<h2>Im so leet</h2>
	<p>{{{ $user->firstname }}}</p>
        @foreach($user->events as $event)
            <li>{{{ $event->name }}}</li>
        @endforeach
@stop