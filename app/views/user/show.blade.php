@extends('user._layouts.profile')

@section('content')
    <div id="profile_main">
    <div id="left">
        <div class="pull-right">
            <a class="button" href="{{ URL::action('user.edit', array('user' => Auth::user()->id )) }}"><span>&#0063;</span>Edit profile</a>
        </div>
        <h2>{{{ $user->username }}}</h2>
        <span class="real-name">{{{ $user->firstname }}} {{{ $user->surname }}}</span>
        <br/>
        <small>Member since XX</small>
        <div></div>
        <h2>Teams:</h2>
        <a href="#">Klux Klux Klan</a>
        <hr>
        <div class="activity">
            <h4>Activity:</h4>ööää
        </div>
    </div>
    <div id="right">
        <div class="panel">
            <div class="panel-heading">Jeejee</div>
                <ul>
                    <li>
                        <span class="light">Member since</span>
                        <strong>XX YY JEEJEE</strong>
                    </li>
                    <li>
                        <span class="light">Mitä vittua tähä</span>
                        <strong>dunno</strong>
                    </li>
                </ul>
        </div>
        <div class="panel">
            <div class="panel-heading">Kalja :D</div>
            <ul>
                <li>
                    <span class="light">On paras</span>
                    <strong>Nopsu :D</strong>
                </li>
                <li>
                    <span class="light">Ja</span>
                    <strong>Viina :D</strong>
                </li>
            </ul>
        </div>
    </div>

@stop