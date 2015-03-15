@extends('event._layouts.event')
@section('content')
{{ Form::model($event, array('route' => array('event.update', $event->id), 'method' => 'PUT')) }}
{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}
{{ Form::label('description') }}
{{ Form::text('description') }}
{{ Form::label('start', 'Start time') }}
{{ Form::text('start') }}
{{ Form::submit('Save!')}}
{{ Form::close() }}
@stop