@extends('layouts.guest')

@section('content')
<div class="flex items-center justify-center bg-gray-100">
    <div class="bg-white p-6 rounded-lg mt-16">
        <div class="font-bold text-2xl text-gray-900 text-center">{{ __('Register') }}</div>
        <div class="w-96">
            <form method="POST" action="{{ route('register') }}" class="prevent-multiple-submit-form space-y-4" enctype="multipart/form-data">
                @csrf
                <x-form.input name="name"/>
                <x-form.input name="username"/>
                <x-form.input name="email" type="email"/>
{{--                <x-form.file name="avatar"/>--}}
                <x-form.input name="password" type="password" autocomplate="new-password"/>
                <x-form.input name="password_confirmation" type="password"/>
                <x-form.submit>Register</x-form.submit>
            </form>
        </div>
    </div>
</div>
@endsection
