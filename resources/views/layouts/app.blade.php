<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
<title>@yield('title') {{ Voyager::setting('title') }}</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="Keywords" content="{{ Voyager::setting('keywords') }}@yield('keywords')" />
<meta name="Description" content="{{ Voyager::setting('description') }}@yield('description')" />
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
<script src="{{ asset('jcb/js/app.js?V2017-1') }}"></script>

@yield('footer')
</body>
</html>