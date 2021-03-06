<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="flex item-center">
            <img src="https://i.pravatar.cc/50?u={{$user->email}}" class="rounded-full mr-2" alt="">
            <span class="text-small">{{$user->name}}</span>
        </div>
    </li>
    @endforeach
</ul>