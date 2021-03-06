<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/profile.css">
    <link rel="stylesheet" type="text/css" href="/css/form.css">
    <title>Edit</title>
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