@extends('layouts.main')

@section('title', 'Login')

@section('content')

<head>
    <link rel="stylesheet" href="/css/register.css"></link>   
</head>

<div class="style-container">
    <div class="style-container-card">
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <h1>Entrar</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username">
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required autocomplete="current-password">
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembre de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" style="color: #9640e5">
                        {{ __('Esqueci minha senha') }}
                    </a>
                @endif

                <div class="button-container">
                    <button class="btn">Entrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection