@extends('layouts.base')
@section('content')
 <section class="section">
  <div class="container mt-5">
   <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
     <div class="card card-primary">
      <div class="card-header">
       <h4>Login</h4>
      </div>
      <div class="card-body">
       <form method="POST" wire:submit.prevent="{{ route('login') }}" class="needs-validation" novalidate="">
        @csrf
        <div class="form-group">
         <label for="email">Email</label>
         <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
         <div class="invalid-feedback">
          Please fill in your email
         </div>
        </div>
        <div class="form-group">
         <div class="d-block">
          <label for="password" class="control-label">Password</label>
          <div class="float-right">
           <a href="{{ route('password.request') }}" class="text-small">
            Forgot Password?
           </a>
          </div>
         </div>
         <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
         <div class="invalid-feedback">
          please fill in your password
         </div>
        </div>
        <div class="form-group">
         <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
          <label class="custom-control-label" for="remember-me">Remember Me</label>
         </div>
        </div>
        <div class="form-group">
         <button  class="btn btn-primary btn-lg btn-block" tabindex="4">
          Login
         </button>
        </div>
       </form>
       <div class="mt-4 mb-3 text-center">
        <div class="text-job text-muted">Login With Social</div>
       </div>
       <div class="row sm-gutters">
        <div class="col-6">
         <a class="btn btn-block btn-social btn-facebook">
          <span class="fab fa-facebook"></span> Facebook
         </a>
        </div>
        <div class="col-6">
         <a class="btn btn-block btn-social btn-twitter">
          <span class="fab fa-twitter"></span> Twitter
         </a>
        </div>
       </div>
      </div>
     </div>
     <div class="mt-5 text-center text-muted">
      Don't have an account? <a href="{{ route('register')}}">Create One</a>
     </div>
    </div>
   </div>
  </div>
 </section>
@endsection




{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
