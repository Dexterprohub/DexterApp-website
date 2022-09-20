<html>
    <head>
       <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/Dexter-logo__small.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    </head>
    <body>
        
        @yield('content')

        @include('layouts._partials._footer')
    </body>
</html>