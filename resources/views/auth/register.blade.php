@extends('layouts.main')

@section('title', 'Registrar-se')

@section('content')

<head>
    <link rel="stylesheet" href="/css/register.css"></link>   
</head>

        <div class="style-container">
            <div class="style-container-card">  
                <h1>Registrar-se</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name" value="{{ __('Name') }}" >Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" :value="old('name')" required autofocus autocomplete="name">
                    </div>

                    <div class="form-group">
                        <label for="email" value="{{ __('Email') }}" >Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username">
                    </div>

                    <div class="form-group">
                        <label for="password" value="{{ __('Password') }}" >Senha:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}" >Confirme a senha:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Senha" required autocomplete="new-password">
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" style="color: #9640e5">
                            {{ __('Já possui uma conta?') }}
                        </a>

                        <div class="button-container">
                            <button class="btn">Registrar-se</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection