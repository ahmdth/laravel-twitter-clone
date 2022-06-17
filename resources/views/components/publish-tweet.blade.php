<div class="border border-blue-400 rounded-lg p-6 mb-8">
    <form action="{{ route('tweets.store') }}" method="post">
        @csrf
        <textarea name="body"
                  class="w-full mb-2 h-32 p-4 border-b focus:outline-none"
                  placeholder="What's app doc?"
                  required
        ></textarea>
        @error("body")
        <div class="text-sm text-red-500 mb-2">{{ $message }}</div>
        @enderror
        <div class="flex justify-between items-center">
            <a href="{{ route("profiles.show", auth()->user()->username ) }}">
                <img src="{{ auth()->user()->avatar }}" alt="" class="w-12 h-12 rounded-full"/>
            </a>
            <button
                class="text-white bg-blue-500 shadow rounded-2xl px-4 py-3">
                Tweet-a-roo!
            </button>
        </div>
    </form>
</div>
