@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-gray-800 text-gray-100 p-8 rounded-lg shadow-lg max-w-lg mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-center text-orange-500">Contact Us</h1>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 rounded bg-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 rounded bg-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium mb-2">Message</label>
                <textarea id="message" name="message" rows="5" class="w-full p-3 rounded bg-gray-700 text-gray-100 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-orange-500 text-white px-6 py-3 rounded-lg shadow hover:bg-orange-600 transition duration-300">Send Message</button>
            </div>
        </form>
    </div>
</div>
@endsection
