<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-base-url" content="{{ url('api/v1') }}">
    <meta name="is-auth" content="{{ Auth::check() ? 1 : 0 }}">
    <link rel="icon" type="image/png" href="/favicon_lok.png" />    <title>@yield('title')</title>
    @yield('app')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>
</body>

</html>
