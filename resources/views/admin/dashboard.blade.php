@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6">Admin Dashboard</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-bold mb-2">Total Posts</h3>
            <p class="text-3xl">{{ $totalPosts }}</p>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow">
        <h3 class="text-xl font-bold p-4 border-b">Posts by Category</h3>
        <div class="p-4">
            @foreach($postsByCategory as $category)
                <div class="flex justify-between items-center mb-2 p-2 hover:bg-gray-100 rounded">
                    <span>{{ $category->category }}</span>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded">{{ $category->count }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
