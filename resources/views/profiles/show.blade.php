<x-app>
    <header class="mb-6 relative">
        <img class="mb-2" src="{{$user->banner}}" alt="">
        <div class="flex justify-between items-baseline mb-4">

            <div style="max-width: 250px">
                <h2 class="font-bold text-xl">{{$user->name}}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{$user->path('edit')}}" class=" rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a> 
                @endcan
                <x-follow-button :user="$user"></x-follow-button>  

            </div>

            <img src={{ $user->avatar }} class="rounded-full mr-2 absolute" style="bottom: 120px; width: 150px; height: 150px; left: calc(50% - 75px);" alt="">  

        </div>
        <p class="text-sm">
            {{$user->description}}
        </p>
    </header> 
    @include('_timeline', [
        'tweets' => $tweets
    ]) 
</x-app>
