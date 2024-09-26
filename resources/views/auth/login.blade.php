<!-- Vista del Logueo-->
@extends('layouts.auth')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-6 text-center">{{ __('Login') }}</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Correo -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="w-full p-3 border border-gray-300 rounded-lg @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">{{ __('Password') }}</label>
                <input id="password" type="password" class="w-full p-3 border border-gray-300 rounded-lg @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Recuerdame -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="ml-2 block text-sm text-gray-600">{{ __('Remember Me') }}</label>
            </div>

            <!-- Boton de Enviar -->
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-lg font-bold hover:bg-indigo-700">
                    {{ __('Login') }}
                </button>
            </div>

            <!-- Olvide Contraseña -->
            @if (Route::has('password.request'))
                <div class="mt-4 text-center">
                    <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
