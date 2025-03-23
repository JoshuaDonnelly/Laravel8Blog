<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .admin-sidebar {
            min-height: calc(100vh - 64px);
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-gray-900 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">NBA Blog Admin</h1>
            <div class="flex items-center">
                @auth
                <span class="mr-4">{{ Auth::user()->name }}</span>
                <a href="{{ url('/') }}" class="mr-4 text-gray-300 hover:text-white">Main Site</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-300 hover:text-white">Logout</button>
                </form>
                @endauth
            </div>
        </div>
    </header>

    <div class="container mx-auto flex">
        <aside class="w-64 bg-gray-800 text-white admin-sidebar p-4">
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-700">Dashboard</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.posts') }}" class="block p-2 rounded hover:bg-gray-700">Manage Posts</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.posts.create') }}" class="block p-2 rounded hover:bg-gray-700">Create Post</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-6">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
