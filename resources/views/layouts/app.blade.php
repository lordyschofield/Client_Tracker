<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    
<body class="bg-gray-300">
    <div id="app">
        <nav class="p-6 bg-white flex justify-between" >
            <img src="/img/logo.png" style="max-width:70px" class="">
            @auth
                
            <ul class="flex items-center">
                
                    <div class="flex items-center pl-3">
                        
                          Welcome {{ auth()->user()->name }}
                    </div>      
                    
                <li class="p-3">
                    <a href="">Home</a>
                </li>
                    
                <li class="p-3">
                    <a href="">Leads</a>
                </li>

                <li class="p-3">
                    <a href="">Contacts</a>
                </li>

                <li class="p-3">
                    <a href="">Accounts</a>
                </li>

                <li class="p-3">
                    <a href="">Deals</a>
                </li>

                <li class="p-3">
                    <a href="">Activities</a>
                </li>

            </ul>

            <ul class="flex items-center">

                <li class="p-3"><a href="{{ route('logout') }}">Logout</a></li>

            </ul>
            
            @endauth            
            

            <div class="container"  >
                <a class="navbar-brand" href="{{ url('/home') }}">
                </a>
                        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            
                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
