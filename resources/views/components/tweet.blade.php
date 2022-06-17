@props(['tweet'])
<div class="flex p-4 border-b ">
    <div class="flex-shrink-0 mr-4">
        <a href="{{ route("profiles.show", $tweet->user) }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="w-12 h-12 rounded-full"/>
        </a>
    </div>
    <div>
        <h5 class="font-bold">
            <a href="{{ route("profiles.show", $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <span
            class="text-xs text-gray-500 mb-4 block">{{ \Carbon\Carbon::make($tweet->created_at)->diffForHumans() }}</span>
        <p>{{ $tweet->body }}</p>
    </div>
</div>
