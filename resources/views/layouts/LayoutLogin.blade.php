<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP LINK STYLESHEET  --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    {{--  CUSTOM LINK STYLESHEET  --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>@yield('page-title')</title>
</head>
<body>
    {{--  main place  --}}
    <main class="main-login-content">
        @yield('content')
    </main>
    {{--  script place  --}}
    @yield('script-tag')
</body>
</html>
