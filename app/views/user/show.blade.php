@extends('user._layouts.profile')

@section('content')
    <div class="content">
        <div class="left">
            <div class="content-header">
                <div class="pull-right">
                    <a class="button" href="{{ URL::action('user.edit', array('user' => Auth::user()->id )) }}"><span>&#0063;</span>Edit profile</a>
                </div>
                <h3>{{{ $user->username }}}</h3>
                <span class="real-name">{{{ $user->firstname }}} {{{ $user->surname }}}</span>
                <br/>
                <small>Member since XX</small>
                <div></div>
                <h4>Teams:</h4>
                <a href="#">Klux Klux Klan</a>
                <hr>
            </div>
            <div class="activity">
                <h4>Activity:</h4>ööää
            </div>
        </div>
        <div class="right">
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