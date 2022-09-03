<!doctype html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <!-- Favicons -->
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <!-- Libs CSS -->
       
        @yield('title')
    </head>
    <body>
        @include('partials/header')
        @yield('content')
        @include('partials/footer')
        <!-- JAVASCRIPT -->
        <!-- Libs JS -->
    </body>
</html>