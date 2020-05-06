<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @component('components.header2')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>
        @component('components.footer2')
        @endcomponent
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html> 