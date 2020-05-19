<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    </head>
    <body>
        @component('components.header3')
        @endcomponent

        @component('components.footer2')
        @endcomponent
    </body>
</html> 