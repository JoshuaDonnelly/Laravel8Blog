@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manage Posts</h2>
        <a href="{{ route('admin.posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Post
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-3 px-4 border-b text-left">ID</th>
                    <th class="py-3 px-4 border-b text-left">Title</th>
                    <th class="py-3 px-4 border-b text-left">Category</th>
                    <th class="py-3 px-4 border-b text-left">Created</th>
                    <th class="py-3 px-4 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr class="hover:bg-gray-100">
                    <td class="py-3 px-4 border-b">{{ $post->id }}</td>
                    <td class="py-3 px-4 border-b">{{ $post->title }}</td>
                    <td class="py-3 px-4 border-b">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                            {{ $post->category }}
                        </span>
                    </td>
                    <td class="py-3 px-4 border-b">{{ $post->created_at->format('M d, Y') }}</td>
                    <td class="py-3 px-4 border-b">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-blue-500 hover:text-blue-700">
                                Edit
                            </a>
                            <form action="{{ route('admin.posts.delete', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                            <a href="{{ route('blog.show', $post->id) }}" class="text-green-500 hover:text-green-700" target="_blank">
                                View
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection
