@extends("layouts.app")

@section("content")
    <form method="POST" action="{{ route('profiles.update', $user) }}" class="space-y-6 mb-8" enctype="multipart/form-data">
        @if(Session::has('status'))
            <p class="text-green-500">{{ Session::get('status')}}</p>
        @endif
        @method('PATCH')
        @csrf
            <x-form.input name="name" value="{{ $user->name }}"/>
            <x-form.input name="username" value="{{ $user->username }}"/>
            <x-form.input name="email" type="email" value="{{ $user->email }}"/>
            <x-form.file name="avatar" />
            <x-form.input name="password" type="password" autocomplate="new-password"/>
            <x-form.input name="password_confirmation" type="password"/>
            <x-form.submit>Update</x-form.submit>
    </form>
    <x-timeline :tweets="$tweets"></x-timeline>
@endsection
