@extends('layouts.base')
@section('content')
 <section class="section">
  <div class="container mt-5">
   <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
     <div class="card card-primary">
      <div class="card-header">
       <h4>Reset Password</h4>
      </div>
      <div class="card-body">
       <p class="text-muted">Enter Your New Password</p>
       <p class="text-muted">
        <x-jet-validation-errors class="mb-4" />
       </p>
       <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="form-group">
         <input type="hidden" name="token" value="{{ $request->route('token') }}">
         <label for="email">Email</label>
         <input id="email" type="email" class="form-control" name="email" value="{{old('email', $request->email)}}" tabindex="1" required autofocus>
        </div>
        <div class="form-group">
         <label for="password">New Password</label>
         <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required>
         <div id="pwindicator" class="pwindicator">
          <div class="bar"></div>
          <div class="label"></div>
         </div>
        </div>
        <div class="form-group">
         <label for="password-confirm">Confirm Password</label>
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" tabindex="2" required>
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Reset Password
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



        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
