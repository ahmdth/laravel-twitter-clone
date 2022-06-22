@extends('layouts.guest')

@section('content')
    <div class="m-4 py-6">
        <div class="max-w-lg mx-auto bg-gray-100 border rounded-lg p-6 lg:p-8">
            <h3 class="font-bold text-2xl text-center">{{ __('Login') }}</h3>
            <form method="POST" action="{{ route('login') }}" class="prevent-multiple-submit-form space-y-4">
                @csrf
                <x-form.input name="email" type="email" autocomplate="email"/>
                <x-form.input name="password" type="password"/>
                <div class="flex items-center justify-between">
                    <x-form.checkbox name="remember"/>
                    <div>
                        @if (Route::has('password.request'))
                            <a class="text-blue-600 text-sm" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <x-form.submit>Login</x-form.submit>
            </form>
        </div>
    </div>
@endsection
