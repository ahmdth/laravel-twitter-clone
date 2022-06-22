@extends('layouts.guest')

@section('content')
    <div class="m-4 py-6">
        <div class="max-w-lg mx-auto bg-gray-100 border rounded-lg p-6 lg:p-8">
            <h3 class="font-bold text-2xl text-center mb-8">{{ __('Reset Password') }}</h3>
            @if (session('status'))
                <div class="bg-green-200 text-green-600 border border-green-500 px-4 py-2 rounded-lg mt-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}" class="prevent-multiple-submit-form space-y-4">
                @csrf
                <x-form.input name="email" type="email" autocomplate="email" value="{{ old('email') }}" autofocus/>
                <x-form.submit>{{ __('Send Password Reset Link') }}</x-form.submit>
            </form>
        </div>
    </div>
@endsection
