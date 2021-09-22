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
            
            @auth
            <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6 bg-gray-500">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <img src="/img/logo.png" class="w-18 h-7 pr-3">
                </div>
                <div class="block lg:hidden">
                  <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                  </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                  <div class="text-sm lg:flex-grow">
                    <a href="{{route('home',$user)}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                      Home
                    </a>
                    <a href="{{route('leads',$user)}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                      Leads
                    </a>
                    <a href="{{route('contacts',$user)}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                      Contacts
                    </a>
                    <a href="{{route('accounts',$user)}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                      Accounts
                    </a>
                    <a href="{{route('deals',$user)}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                      Deals
                    </a>
                    <a href="{{route('activities',$user)}}" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 mr-4">
                      Activities
                    </a>
                  </div>

                  <div>
                    <h1 class="mr-3 text-lg text-gray-300">Welcome , Admin!</h1>

                  </div>

                  <div class="flex flex-wrap justify-center">
                    <div>
                     <a href=""> <img class="rounded-full object-cover h-10 w-30 mr-2"src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg" alt="..." class="rounded-full h-25 w-25 flex items-center justify-center" />
                     </a>
                    </div>
                  </div>
                  <div>
                    <a href="{{ route('logout') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-gray-400 mt-4 lg:mt-0">Logout</a>
                  </div>
                </div>
              </nav>       
            
            
            
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
                    
                </div>
            </div>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
