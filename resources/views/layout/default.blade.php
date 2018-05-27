<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Sample') - Laravel 新手教程 </title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layout._header')
<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layout._footer')
    </div>
</div>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>