@extends('layouts.guest')

@section('content')
    <div class="flex items-center justify-center bg-gray-100">
        <div class="bg-white p-6 rounded-lg mt-40">
            <div class="font-bold text-2xl text-gray-900 text-center">{{ __('Login') }}</div>

            <div class="w-96">
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    <x-form.input name="email" type="email" autocomplate="email"/>
                    <x-form.input name="password" type="password" autocomplate="current-password"/>
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
                    <x-form.submit >Login</x-form.submit>
                </form>
            </div>
        </div>
    </div>
@endsection
