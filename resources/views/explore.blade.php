@extends('layouts.app')
@section('content')
    @foreach($users as $user)
        <a href="{{ route('profiles.show', $user) }}" class="flex items-center mb-4">
            <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded mr-4 flex-shrink-0" width="60" height="60"/>
            <span>{{'@'.$user->username}}</span>
        </a>
    @endforeach
    <p>{{ $users->links() }}</p>
@endsection
