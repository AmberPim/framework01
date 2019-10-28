<!doctype html>

<head>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/home">FRM09</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/home">Home</a></li>
            <li><a href="/photos">Photos</a></li>
        </ul>


        <div class="btn-group dropdown" style="float:right; margin-right:4%;">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/dashboard">Dashboard</a><br>
                <a class="dropdown-item" href="{{ url('/logout') }}"> Logout </a><br>
            </div>
        </div>


    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>

</footer>

</body>

</html>