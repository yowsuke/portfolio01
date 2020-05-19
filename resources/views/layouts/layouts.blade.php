<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
    </head>
    <body>
        @component('components.header3')
        @endcomponent

        <div class="container">
                @component('components.flash')
                @endcomponent
            @yield('content')
        </div>


        
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html> 