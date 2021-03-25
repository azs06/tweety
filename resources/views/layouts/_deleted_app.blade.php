<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-8">
            <header class="container mx-auto">
                Tweety
            </header>
        </section>
        <section class="px-8">
            <main class="container mx-auto">
                <div class="flex justify-between">
                    <div class="w-1/8">
                    
                        @include('_sidebar_links')
                    
                    </div>
                    <div class="flex-1 lg:mx-10" style="max-width: 700px">
                        @yield('content')
                    </div>
                    <div class="w-1/6 bg-blue-100 rounded-lg p-4">
                    
                    @include('_sidebar_friends')
                    
                    </div>
                </div>
            </main>        
        </section>

    </div>
</body>
</html>
