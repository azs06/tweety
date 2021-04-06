<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @forelse(auth()->user()->follows as $user)
    <li class="mb-4">
        <a class="flex item-center flex-shrink-0" href="{{ route('profile', $user) }}">
            <img width="60px" height="60px" style="border-radius: 100%; width: 60px; height: 60px;" src="{{$user->avatar}}" class="mr-2" alt="">
            <span class="text-small">{{$user->name}}</span>
        </a>
    </li>
    @empty
        <li>No friends yet!</li>
    @endforelse
</ul>