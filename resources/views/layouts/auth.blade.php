<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>@yield('title', config('app.name', 'Laravel Tabler'))</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @section('styles')
    <link href="{{ mix('/css/tabler.css') }}" rel="stylesheet">
    @show
    @stack('head')
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        @yield('content')
      </div>
    </div>
  </body>
</html>
