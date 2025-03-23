@extends('layouts.app')

@section('content')
<div class="blog-post-container">
    <span class="blog-post-category">{{ $post->category }}</span>
    <h1 class="blog-post-title">{{ $post->title }}</h1>
    
    <div class="blog-post-meta">
        Posted on {{ date('jS M Y', strtotime($post->updated_at)) }}
        @if($post->user)
            by {{ $post->user->name }}
        @endif
    </div>
    
    @if($post->image_path)
        <img src="{{ $post->image_path }}" alt="{{ $post->title }}" class="blog-post-image">
    @endif
    
    <div class="blog-post-content">
        {!! nl2br(e($post->content)) !!}
    </div>
    
    <a href="/blog" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to Blog</a>
</div>
@endsection