<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    @include('partials.css')
    @include('partials.js')
    {{ HTML::style('css/signin.css') }}
    <title>Sign in</title>
    <!--[if lt IE 9]
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]]-->
</head>
<body id="signin">
    <div id="login">
        {{ Form::open(array('route' => 'login')) }}
        <h1>Sign in</h1>
        <div class="ui_form">
            <span>.</span>
            {{ Form::text('username') }}
        </div>
        <div class="ui_form mt">
            <span>w</span>
            {{ Form::password('password') }}
        </div>
        {{ Form::submit('Login') }}
        {{ Form::close() }}
    </div>
</body>
</html>