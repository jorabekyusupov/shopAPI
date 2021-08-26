@extends('layouts.base')
@section('content')
 <section class="section">
  <div class="container mt-5">
   <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
     <div class="card card-primary">
      <div class="card-header">
       <h4>Forgot Password</h4>
      </div>
      <div class="card-body">
       <p class="text-muted">We will send a link to reset your password</p>
       @if (session('status'))

        <p style="color: green;">{{ session('status') }}</p>

       @endif
       <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
         <label for="email">Email</label>
         <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Forgot Password
         </button>
        </div>
       </form>
      </div>
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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
