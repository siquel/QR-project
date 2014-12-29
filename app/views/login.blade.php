@extends('layouts.default')


@section('content')

<div id="header" class="cf">
    <div class="page-full-width">
        <div id="login-intro" class="float-left">
            <h1 class="text-upper">Uskomaton login</h1>
            <h5>Write your credentials below</h5>
        </div>
    </div>
</div>
<div id="container">
    {{ Form::open(array('route' => 'login', 'id' => 'login-form' )) }}
        <fieldset>
            <p>
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', null, array('class' => 'round', 'autofocus', 'required')) }}
            </p>
            <p>
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('class' => 'round', 'required')) }}

            </p>
            <p>
                Lost <a href="#">password?</a>
            </p>
            {{ Form::submit('Login', array('class' => 'button text-upper round dark-gray')) }}
        </fieldset>
    {{ Form::close() }}
</div>


@stop