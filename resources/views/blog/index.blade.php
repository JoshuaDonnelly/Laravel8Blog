@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 bg-gray-900 p-6 rounded-lg">
    <h1 class="text-4xl font-bold mb-6 text-center text-white">NBA Blog</h1>
    
    <div class="mb-8 flex flex-wrap justify-center gap-4">
        <a href="{{ route('blog.index') }}" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-full">All</a>
        <a href="{{ route('blog.index', ['category' => '1980s-1990s']) }}" class="bg-orange-600 hover:bg-orange-500 text-white px-4 py-2 rounded-full">1980s-1990s</a>
        <a href="{{ route('blog.index', ['category' => '2000s-2010s']) }}" class="bg-blue-600 hover:bg-blue-500 text-white px-4 py-2 rounded-full">2000s-2010s</a>
        <a href="{{ route('blog.index', ['category' => '2010s-2020s']) }}" class="bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded-full">2010s-2020s</a>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div class="bg-gray-800 text-white p-6 rounded shadow-md group transform transition-transform duration-300 hover:scale-105 hover:-translate-y-2">
                <div class="overflow-hidden rounded mb-4">
                    <img src="{{ asset($post->image_path) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover transform transition-transform duration-300 group-hover:scale-105">
                </div>
                
                <div class="mb-3">
                    @if($post->category == '1980s-1990s')
                        <span class="inline-block bg-orange-600 text-white text-xs px-3 py-1 rounded-full">{{ $post->category }}</span>
                    @elseif($post->category == '2000s-2010s')
                        <span class="inline-block bg-blue-600 text-white text-xs px-3 py-1 rounded-full">{{ $post->category }}</span>
                    @elseif($post->category == '2010s-2020s')
                        <span class="inline-block bg-green-600 text-white text-xs px-3 py-1 rounded-full">{{ $post->category }}</span>
                    @else
                        <span class="inline-block bg-gray-600 text-white text-xs px-3 py-1 rounded-full">{{ $post->category }}</span>
                    @endif
                </div>
                
                <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
                <p class="text-gray-400">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('blog.show', $post->id) }}" class="text-orange-500 hover:underline mt-4 block">Read More</a>
            </div>
        @endforeach
    </div>
</div>
@endsection