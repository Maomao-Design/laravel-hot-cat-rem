<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <title>@yield('title') {{ $advertising }} Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    @include('layouts.head')
    @yield('head')
</head>
<body style="">
    <div class="page">
        @include('layouts.loader')
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
    </div>
    <script src="/jcb/js/core.min.js"></script>
    <script src="/jcb/js/script.js"></script>
    @yield('footer')
</body>
</html>