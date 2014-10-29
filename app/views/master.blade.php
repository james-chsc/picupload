<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
</head>
<body>
<nav class="navbar navbar-default">
    <div class="navbar-header">
        {{ HTML::link('/', 'Pictures Uploads', array('class' => 'navbar-brand')) }}
    </div>
    <ul class="nav pull-right">
        @if (Auth::user())
        <li>{{ HTML::link('logout', 'Logout') }}</li>
        @endif
        </ul>
</nav>
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
</html>