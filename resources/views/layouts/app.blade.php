<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @section('menubar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="127.0.0.1:8000">Student Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Dashboard <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sd">Student Entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/showsd">Student Detail</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/fee">Fee Pyment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/showfee">Fee Detail</a>
              </li>
          </ul>
        </div>
        
      </nav>
      
    @show
    <main class="py-4">
            @yield('content')
    </main>
    </div>
</body>
</html>
