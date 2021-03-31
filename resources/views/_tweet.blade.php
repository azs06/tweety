<div class="flex p-4 {{$loop->last ? '': 'border-b border-gray-300'}}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img src={{$tweet->user->avatar}} width="50px" height="50px" class="rounded-full mr-2" alt="">                    
        </a>
    </div>
    <div>
        <a href="{{ $tweet->user->path() }}">
            <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        </a>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>