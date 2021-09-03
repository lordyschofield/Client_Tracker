@extends('layouts.app')
<title>Client Tracker</title>
@section('content')
<div class="container">
   

<div class="w-full h-screen flex items-center justify-center">
    <form class="w-full md:w-1/3 bg-white rounded-lg" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex font-bold justify-center mt-6">
            <img class="h-20 w-40"
                src="/img/logo.png">
        </div>
        <h2 class="text-3xl text-center text-gray-700 mb-4">Welcome Admin</h2>
        <div class="px-12 pb-10">
            <div class="w-full mb-2">
                <div class="flex items-center">
                    <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                    <input placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror -mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                </div>
            </div>
            <div class="w-full mb-4">
                <div class="flex items-center">
                    <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror -mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                </div>
            </div>
            <button type="submit"
                class="w-full py-2 rounded-full bg-blue-600 text-gray-100  focus:outline-none">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                                        <a class="btn btn-link text-xs text-gray-500 float-right mb-4" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
    </form>
</div>

@endsection
