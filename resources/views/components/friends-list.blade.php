<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @if (count(auth()->user()->follows)>0)
        @foreach(auth()->user()->follows as $user)
            <li class="mb-4 text-sm">
                <a href="{{ route("profiles.show", $user) }}" class="flex items-center">
                    <img src="{{ $user->avatar }}" alt="" class="w-12 h-12 rounded-full"/>
                    <span class="ml-4">{{ $user->name }}</span>
                </a>
            </li>
        @endforeach
    @else
        <p>You not follow users</p>
    @endif
</ul>
