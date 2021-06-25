<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel ecommerce</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-200">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#">Logo</a>
            <div class="flex items-center">
                
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </a>
            </div>
        </header>
        <div class="container mx-auto">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold space-x-10 mx-auto">
                    <li><a href="/" class="">Home</a></li>
                    <li><a href="/shop" class="">Shop</a></li>
                    <li><a href="/categories" class="">Categories</a></li>
                    <li><a href="/contact" class="">Contact</a></li>
                    <li><a href="/about" class="">About</a></li>
                </ul>
            </nav>
        </div>

        <div class="flex justify-center items-center mt-4">
            
                <input type="text" class="border-2 border-gray-300 bg-white mt-4 w-1/2 h-10 rounded-lg text-sm focus:outline-none" placeholder="Search anything...">
                <div class="absolute top-4 right-3"> 
                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i> 
                </div>
        
        </div>

        <main class="container mx-auto" style="max-width: 1000px">
                {{ $slot }}
        </main>
    </body>
</html>
