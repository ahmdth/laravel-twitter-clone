<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
    <x-tweet :tweet="$tweet"></x-tweet>
    @empty
    <p class="p-4">No tweets for you!</p>
    @endforelse
</div>
