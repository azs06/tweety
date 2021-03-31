<x-app>
    <header class="mb-6 relative">
        <img class="mb-2" src="/images/bugs-bunny.jpg" alt="">
        <div class="flex justify-between item-center mb-4">

            <div>
                <h2 class="font-bold text-xl">{{$user->name}}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{$user->path('edit')}}" class=" rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a> 
                @endcan
                <x-follow-button :user="$user"></x-follow-button>  

            </div>

            <img src={{ $user->avatar }} class="rounded-full mr-2 absolute" style="bottom: 120px; width: 150px; left: calc(50% - 75px);" alt="">  

        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus corporis obcaecati animi. Rem ipsum, ipsa quos ut illo pariatur accusamus sapiente incidunt illum quisquam vel aliquam facere, quaerat, 
            blanditiis facilis.Rerum quo nam aperiam reprehenderit necessitatibus, culpa cumque, alias quos nesciunt recusandae deleniti unde natus officia tempore dignissimos atque maxime molestiae labore harum 
            dolorem perspiciatis hic aspernatur eligendi. Voluptatibus, accusamus?
        </p>
    </header> 
    @include('_timeline', ['tweets' => $user->tweets]) 
</x-app>
