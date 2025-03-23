@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto relative bg-gray-800">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex text-gray-100 pt-10 relative">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-6">
                    Welcome to the NBA Blog
                </h1>
                <p class="text-xl text-gray-300 pb-6 text-shadow-md">
                    Your daily dose of NBA news, analysis, and updates
                </p>
                <a 
                    href="/blog"
                    class="text-center bg-gray-700 text-gray-100 py-2 px-4 font-bold text-xl uppercase rounded-md">
                    Explore Articles
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 mx-auto py-15 border-b border-gray-700 bg-gray-900">
        <div class="flex items-center justify-center p-4">
            <img src="https://media.cnn.com/api/v1/images/stellar/prod/gettyimages-2192350649.jpg?q=w_1110,c_fill" 
                 alt="Basketball" 
                 class="w-full h-auto max-h-[400px] object-contain rounded-lg shadow-lg">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-100">
                Stay Updated with the Latest NBA News
            </h2>
            
            <p class="py-8 text-gray-400 text-s">
                Dive into the world of basketball with our in-depth analysis, player rankings, and game highlights.
            </p>

            <p class="font-extrabold text-gray-100 text-s pb-9">
                From breaking news to expert opinions, we bring you everything you need to stay informed about the NBA.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-600 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Read More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-gray-900 text-gray-100">
        <h2 class="text-2xl pb-5 text-l"> 
            Explore Our Expertise
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Player Analysis
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Game Highlights
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Team Strategies
        </span>
        <span class="font-extrabold block text-4xl py-1">
            NBA History
        </span>
    </div>

    <div class="text-center py-15 bg-gray-900 text-gray-100">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Latest Articles
        </h2>

        <p class="m-auto w-4/5 text-gray-400">
            Discover the latest stories, insights, and updates from the world of basketball.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto bg-gray-900 text-gray-100">
        <div class="flex bg-gray-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs text-gray-400">
                    Top Players
                </span>

                <h3 class="text-xl font-bold py-10">
                    Check out our Article on the legacy of the late great Kobe Bryant.
                </h3>

                <a 
                    href="/blog/4"
                    class="uppercase bg-transparent border-2 border-gray-400 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://media.licdn.com/dms/image/v2/C5612AQGwqU6E8fmKZw/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1580503590031?e=2147483647&v=beta&t=ttU5WDX-NeSvdiXp0s88JmYO5Y1m2en2SfUOXgIe_D4" alt="Top Players">
        </div>
    </div>

    <div class="text-center py-15 bg-gray-900 text-gray-100">
        <h2 class="text-4xl font-bold py-10">
            About Us
        </h2>

        <p class="m-auto w-4/5 text-gray-400">
            Welcome to the NBA Blog! We are passionate basketball enthusiasts dedicated to bringing you the latest news, in-depth analysis, and engaging content about the NBA. Stay tuned for updates and join the conversation!
        </p>
    </div>
@endsection