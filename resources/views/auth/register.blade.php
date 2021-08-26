@extends('layouts.base')
@section('content')
 <section class="section">
  <div class="container mt-5">
   <div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
     <div class="card card-primary">
      <div class="card-header">
       <h4>Register</h4>
      </div>
      <div class="card-body">
       <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
         <div class="form-group col-12">
          <label for="frist_name">Name</label>
          <input id="frist_name" type="text" class="form-control" name="name" autofocus>
          <span style="color: red;">{{$errors->first('name')}}</span>
         </div>

        </div>
        <div class="form-group">
         <label for="email">Email</label>
         <input id="email" type="email" class="form-control" name="email">
        <span style="color: red;">{{$errors->first('email')}}</span>
        </div>
        <div class="row">
         <div class="form-group col-6">
          <label for="password" class="d-block">Password</label>
          <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
          <span style="color: red;">{{$errors->first('password')}}</span>
          <div id="pwindicator" class="pwindicator">
           <div class="bar"></div>
           <div class="label"></div>
          </div>
         </div>
         <div class="form-group col-6">
          <label for="password2" class="d-block">Password Confirmation</label>
          <input id="password2" type="password" class="form-control" name="password_confirmation">
          <span style="color: red;">{{$errors->first('password_confirmation')}}</span>
         </div>
        </div>

        <div class="form-group">
         <button type="submit" class="btn btn-primary btn-lg btn-block">
          Register
         </button>
        </div>
       </form>
      </div>
      <div class="mb-4 text-center text-muted">
       Already Registered? <a href="{{ route('login') }}">Login</a>
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

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
