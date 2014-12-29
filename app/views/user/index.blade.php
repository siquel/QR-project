@extends('layouts.default')

@section('content')
            @if(count($users))
	   @foreach($users as $user)
	               <p>{{{ $user->firstname }}}</p>
	   @endforeach
            @endif
@stop