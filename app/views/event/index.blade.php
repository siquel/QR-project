@extends('layouts.default')

@section('content')
        @if(count($events))
            @foreach($events as $event)
                <p><strong>{{{$event->name}}}</strong> By {{{ $event->user->username }}}</p>
                @foreach($event->questions as $q)
                    <li>{{{ $q->question }}}</li>
                @endforeach
            @endforeach
        @endif
@stop