@extends('layouts.frontend.app')

@section('content')




<x-guest-layout>
  {{--   <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>








<div class="container">
    <div class="container col-lg-6">
      <div class="py-4">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

          
          
        <form  method="POST" action="{{ route('register') }}" class="needs-validation form-group" autocomplete="off" >
            @csrf
          <div class="mb-3">
            <label class="form-label" for="name">Nom</label>
            <input class="form-control" name="name" :value="old('name')" 
                 type="text" id="su-name" placeholder="Votre nom" required>
            <div class="invalid-feedback">Entre votre nom s'il vous plait!.</div>
          </div>
          <div class="mb-3">
            <label for="email">Email </label>
            <input class="form-control" type="email" name="email" id="email" :value="old('email')" 
                placeholder="Votre email" required>
             <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>
          <div class="mb-3">
            <label for="email">Téléphone </label>
            <input class="form-control" type="text" name="telephone" id="telephone"  
                placeholder="Numéro de téléphone" required>
             <div class="invalid-feedback">Entrez votre numéro de téléphone.</div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="su-password">Mot de passe</label>
            <div class="password-toggle">
              <input class="form-control" 
                    type="password" 
                    name="password"
                    required autocomplete="new-password" id="su-password" required>
              <label class="password-toggle-btn" aria-label="Show/hide password">
                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="su-password-confirm">Confirmation de mot de passe</label>
            <div class="password-toggle">
              <input class="form-control" type="password" id="su-password-confirm" name="password_confirmation" required>
              <label class="password-toggle-btn" aria-label="Show/hide password">
                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Enregister</button>
        </form>
      </div>
    </div>
  </div>


@endsection