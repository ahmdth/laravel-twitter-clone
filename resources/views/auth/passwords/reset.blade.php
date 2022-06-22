@extends('layouts.guest')

@section('content')
    <div class="m-4 py-6">
        <div class="max-w-lg mx-auto bg-gray-100 border rounded-lg p-6 lg:p-8 md:p-6">
            <h3 class="font-bold text-2xl text-center">{{ __('Reset Password') }}</h3>
            <form method="POST" action="{{ route('password.update') }}"
                  class="prevent-multiple-submit-form w-full space-y-4">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <x-form.input name="email" type="email" value="{{ $email ?? old('email') }}"/>
                <x-form.input name="password" type="password" autocomplate="new-password"/>
                <x-form.input name="password_confirmation" type="password"/>
                <x-form.submit>{{ __('Reset Password') }}</x-form.submit>
            </form>
        </div>
    </div>
@endsection
