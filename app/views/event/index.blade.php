@extends('layouts.default')

@section('content')
        @if(count($events))
            @foreach($events as $event)
                <strong>{{{$event->name}}}</strong>
            @endforeach
        @endif
@stop