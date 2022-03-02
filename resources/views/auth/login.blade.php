@extends('layouts.frontend.app')

@section('content')

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

 --}}
 
 

 <div class="container mt-5" >

    <div>
        :status="session('status')"
        :status="session('status')"

    </div>

    <div class="container">
      <div class="container col-lg-6">
        <div class="bg-secondary">
          <ul class="nav nav-tabs card-header-tabs" >
            <li class="nav-item">
              <a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">
                <i class="ci-unlocked me-2 mt-n1">
                </i>Sign in
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false">
                <i class="ci-user me-2 mt-n1"></i>
                Sign up
             </a>
            </li>
          </ul>
        </div>
        <div class=" tab-content py-4">
          <form  method="post" action="{{ route('login') }}" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="email" :value="__('Email')">Adresse email</label>
              <input class="form-control" type="email" name="email" id="si-email" placeholder="Votre email" :value="old('email')" required>
              <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="password" :value="__('Password')">Mot de passe</label>
              <div class="password-toggle">
                <input class="form-control" type="password" type="password"
                name="password"
                required autocomplete="current-password" id="si-password" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>

            <div class="mb-3 d-flex flex-wrap justify-content-between">
              <div class="form-check mb-2">
                <label class="form-check-label" for="si-remember"></label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                <span>{{ __('Se souvenir de moi') }}</span>
              </div>
              @if (Route::has('password.request'))
              <a class="fs-sm" href="{{ route('password.request') }}">J'ai oublié mon mot de passe</a>
               @endif
            </div>
            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Se connecter</button>
          </form>
          <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
            <div class="mb-3">
              <label class="form-label" for="su-name">Full name</label>
              <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
              <div class="invalid-feedback">Please fill in your name.</div>
            </div>
            <div class="mb-3">
              <label for="su-email">Email address</label>
              <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
              <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="su-password">Mot de passe</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="su-password-confirm">Confirmation de mot de passe</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password-confirm" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
          </form>
        </div>
      </div>
    </div>
</div> 


  @endsection
