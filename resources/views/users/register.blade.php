<!doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
{{--{!! $user !!}--}}
{{--{{$user}}--}}
<div id="app">
    <register-component></register-component>
</div>
<script type="text/javascript" src="/js/register.js"></script>
</body>
</html>