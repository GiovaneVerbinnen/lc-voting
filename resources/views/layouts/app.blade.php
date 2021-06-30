<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-backgorund">
       <header class="flex items center justify-between px-8 py-4">
           <a href="http://" target="_blank" rel="noopener noreferrer"> Logo</a>
           <div class="flex items-center">
            @if (Route::has('login'))
            <div class=" px-6 py-4 ">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{route('logout')}}"
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
               <a href="">
                   <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48a3c07710c08d50?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
               </a>
           </div>
       </header>

       <main class="container mx-auto flex max-w-6xl">
           <div class="w-4/12 mr-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae tenetur quos expedita laboriosam ratione alias illum voluptatibus earum accusamus soluta ea, iure et ad eligendi, quidem explicabo aliquam in minus odit ullam corrupti ex cupiditate? Cum enim porro ratione commodi illum doloribus laboriosam at minima, illo expedita aspernatur itaque consequuntur dolore odio quae eos ab unde a, saepe nulla reprehenderit! Numquam natus est veritatis? Nam dolores incidunt magni labore quo. Magni corrupti rem alias repellat repellendus explicabo, illum laboriosam amet porro quo totam pariatur deleniti voluptatibus iusto autem exercitationem, consequuntur earum? Accusamus, et. Beatae laboriosam dolorum adipisci nemo quisquam molestias.
            </div>
            <div class="w-8/12">
                <nav class="flex items-center justify-between text-xs " >
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10 transition-all">
                        <li><a href="" class="border-b-4 pb-3 border-blue-400">All Ideias (87)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-400 ">Consiering (87)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-400 ">In Progress (87)</a></li>
                    </ul>
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10 transition-all">
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-400 ">Implemented (87)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-400 ">Closed (87)</a></li>

                    </ul>
                </nav>
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
       </main>

    </body>
</html>
