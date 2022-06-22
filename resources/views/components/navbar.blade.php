<nav class="container mx-auto py-4 px-2">
    <div class="flex justify-between items-center">
        <a class="font-bold" href="{{ url('/') }}">
            <img class="w-10 h-10" src="{{ asset("images/twitter.svg") }}" alt="{{ config('app.name', 'Laravel') }}">
        </a>
        <ul class="flex space-x-6">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif
            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="relative" x-data="{ open: false}" @click.outside="open=false" @keydown.esc="open=false">
                <button @click="open=!open"> {{ Auth::user()->name }} </button>
                <div x-show="open" style="display: none;width: 196px" class="absolute right-2.5 p-2 bg-white shadow mt-2 rounded-md text-sm">
                    <a class="w-full block px-4 py-2 rounded-md hover:bg-blue-500 hover:text-white"
                        href="{{ route('profiles.show', Auth::user()) }}">Profile
                    </a>
                    <a class="w-full block px-4 py-2 rounded-md hover:bg-blue-500 hover:text-white"
                        href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
