@extends("layouts.app")

@section("content")
    <img class="w-full max-h-60 rounded-lg mb-4" src="{{ asset("/images/profile.jpg") }}" alt="">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h5 class="font-bold">{{ $user->name }}</h5>
            <span class="block text-gray-400 text-xs">
            Joined at {{ \Carbon\Carbon::make($user->created_at)->diffForHumans()}}
        </span>
        </div>
        <div class="relative">
            <img src="{{ $user->avatar }}" alt=""
                 class="w-32 h-32 absolute rounded-full max-w-fit -top-24"/>
        </div>
        <div class="flex">
            @can("edit", $user)
            <a class="border border-gray-300 rounded-2xl px-4 py-3 text-sm mr-4"
               href="{{ route("profiles.edit", $user)}}">
                Edit Profile
            </a>
            @else
                <form class="inline" action="{{ route("profiles.follow", $user) }}" method="POST">
                    @csrf
                    <button type="submit" style="background-color: #3b82f6;"
                            class="bg-blue-500 text-white rounded-2xl px-4 py-3 text-sm">
                        {{ auth()->user()->following($user) ? "UnFollow":"Follow"}}
                    </button>
                </form>
            @endif
        </div>
    </div>
    <x-timeline :tweets="$tweets"></x-timeline>
@endsection
