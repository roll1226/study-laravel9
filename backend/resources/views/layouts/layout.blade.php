<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" context="{{ csrf_token() }}">

        <title>投稿サービス - @yield('title')</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    </head>
    <body id="app" class="antialiased">
        <header-component :is-login={{ json_encode(auth()->check()) }} :csrf="{{ json_encode(csrf_token()) }}" :user-id="{{ auth()->check() ? auth()->user()->id : '' }}"></header-component>

        <main>
            @yield('content')
        </main>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
