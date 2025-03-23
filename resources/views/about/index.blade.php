@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-8 bg-gray-800 text-gray-100 rounded-lg shadow-lg">
    <h1 class="text-5xl font-extrabold mb-12 text-center text-orange-500">About NBA Blog</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
            <img src="https://cdn.nba.com/logos/nba/nba-logoman-75-word_white.svg" alt="NBA Logo" class="w-full rounded-lg shadow-md">
        </div>
        <div class="flex flex-col justify-center space-y-8">
            <p class="text-lg leading-relaxed">
                Welcome to NBA Blog, your go-to source for the latest news, insights, and stories from the world of basketball. 
                Our mission is to bring fans closer to the game they love by providing engaging content about players, teams, 
                and unforgettable moments in NBA history.
            </p>
            <p class="text-lg leading-relaxed">
                Whether you're a die-hard fan or just getting into basketball, NBA Blog offers something for everyone. 
                From in-depth player profiles to game analysis and trade rumors, we cover it all with passion and accuracy.
            </p>
            <p class="text-lg leading-relaxed">
                Thank you for visiting NBA Blog. Stay tuned for more updates, and feel free to reach out to us with your feedback or suggestions! 
                If you'd like to get in touch, please <a href="{{ route('contact.index') }}" class="text-orange-500 hover:underline">contact us</a>.
            </p>
        </div>
    </div>
</div>
@endsection
