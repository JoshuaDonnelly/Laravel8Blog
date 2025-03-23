<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NBA Fans') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-900 text-gray-300 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        NBA Fans
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300" href="/">Home</a>
                    <a class="px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300" href="/blog">Blog</a>
                    <a class="px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300" href="/about">About</a>
                    <a class="px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300" href="/contact">Contact</a>
                    @guest
                        <a class="px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="px-4 py-2 rounded hover:bg-black hover:text-white transition duration-300"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
