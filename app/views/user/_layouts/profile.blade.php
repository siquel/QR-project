<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    @include('partials.css')
    {{ HTML::style('css/signin.css') }}
    <title>Sign in</title>
    <!--[if lt IE 9]
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]]-->
</head>
<body id="profile">
    @include('partials.header')
    @yield('content')
    @include('partials.js')
</body>
</html>