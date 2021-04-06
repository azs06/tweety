<div class="border border-gray-300 mb-5 rounded-lg">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No tweets yet.</p>    
    @endforelse
</div>
<div class="flex justify-center items-center mb-5">
    {{$tweets->links()}}
</div>