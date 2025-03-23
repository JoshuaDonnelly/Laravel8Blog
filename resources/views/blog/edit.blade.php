@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input 
                type="text"
                name="title"
                id="title"
                value="{{ $post->title }}"
                class="bg-gray-100 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700">
        </div>

        <div class="mb-6">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category (Era):</label>
            <select 
                name="category"
                id="category"
                class="bg-gray-100 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700">
                <option value="">Select a category</option>
                @foreach($categories as $key => $value)
                    <option value="{{ $key }}" {{ $post->category == $key ? 'selected' : '' }}>{{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
            <textarea 
                name="content"
                id="content"
                class="bg-gray-100 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 h-60">{{ $post->content }}</textarea>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Update Post
        </button>
    </form>
</div>
@endsection