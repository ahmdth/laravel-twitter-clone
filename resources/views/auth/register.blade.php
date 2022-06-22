@extends('layouts.guest')

@section('content')
    <div class="m-4 py-6">
        <div class="max-w-lg mx-auto bg-gray-100 border rounded-lg p-6 lg:p-8 md:p-6">
            <h3 class="font-bold text-2xl text-center">{{ __('Register') }}</h3>
            <form method="POST" action="{{ route('register') }}"
                  class="prevent-multiple-submit-form w-full space-y-4"
                  enctype="multipart/form-data">
                @csrf
                <x-form.input name="name"/>
                <x-form.input name="username"/>
                <x-form.input name="email" type="email"/>
                <x-form.input name="password" type="password" autocomplate="new-password"/>
                <x-form.input name="password_confirmation" type="password"/>
                <x-form.submit>Register</x-form.submit>
            </form>
        </div>
    </div>
@endsection
