<!DOCTYPE html>
<html lang="hu">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    @yield('styles')


    @yield('scripts')
</head>
<body>
<div class="content">


    @include('frontend::layouts.partials._navbar')

    @include('frontend::layouts.partials._slider')

    <div class="container frontend-content">
        @yield('content')


    @include('frontend::layouts.partials._footer')

    @include('frontend::layouts.partials._uniweb_footer')
    </div>
</div>

@yield('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
