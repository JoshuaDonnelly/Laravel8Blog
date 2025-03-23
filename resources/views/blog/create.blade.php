@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
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
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input 
                type="text"
                name="title"
                id="title"
                value="{{ old('title') }}"
                class="bg-gray-100 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700">
        </div>

        <div class="mb-6">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
            <select 
                name="category"
                id="category"
                class="bg-gray-100 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700">
                <option value="">Select a category</option>
                @foreach($categories as $key => $value)
                    <option value="{{ $key }}" {{ old('category') == $key ? 'selected' : '' }}>{{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
            <textarea 
                name="content"
                id="content"
                class="bg-gray-100 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 h-60">{{ old('content') }}</textarea>
        </div>

        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection