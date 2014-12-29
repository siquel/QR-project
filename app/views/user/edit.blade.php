@extends('layouts.default')

@section('content')
    <h1>Edit {{{ $user->username }}} </h1>
    {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}
        @include('user._partials.form')
    {{ Form::close() }}
@stop
