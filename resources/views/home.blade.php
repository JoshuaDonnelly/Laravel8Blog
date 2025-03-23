@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
        
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('status') }}
            </div>
        @endif

        <div class="bg-gray-100 p-6 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h2>
            <p class="mb-4">You are logged in to the NBA Blog.</p>
            
            @if (Auth::user()->is_admin)
                <div class="mt-6">
                    <h3 class="text-lg font-bold mb-3">Admin Options</h3>
                    <a href="{{ route('admin.dashboard') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Go to Admin Dashboard
                    </a>
                </div>
            @endif
            
            <div class="mt-6">
                <h3 class="text-lg font-bold mb-3">Quick Links</h3>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ url('/') }}" class="inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Home Page
                    </a>
                    <a href="{{ route('blog.index') }}" class="inline-block bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                        Blog
                    </a>
                    <a href="{{ route('contact.index') }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Contact
                    </a>
                    <a href="{{ route('about') }}" class="inline-block bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
                        About
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
