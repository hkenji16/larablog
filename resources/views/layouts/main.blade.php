<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text">Blog</li>
            <li><a href="/">Home</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <?php if (Auth::check()) {
                $user = Auth::user();
                ?>
                <li><a href="/user/{{ $user->name }}">{{ $user->name }}</a></li>
                <li><a href="/logout">Logout</a></li>
            <?php
            } else {
            ?>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="callout large primary">
    <div class="row column text-center">
        <h1>Our Blog</h1>
        <h2 class="subheader">Such a Simple Blog Layout</h2>
    </div>
</div>

<div class="row medium-8 large-7 columns">
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
