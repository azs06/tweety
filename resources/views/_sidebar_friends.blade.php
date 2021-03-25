<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
    <li class="mb-4">
        <a class="flex item-center" href="{{ route('profile', $user) }}">
            <img src="https://i.pravatar.cc/50?u={{$user->email}}" class="rounded-full mr-2" alt="">
            <span class="text-small">{{$user->name}}</span>
        </a>
    </li>
    @endforeach
</ul>