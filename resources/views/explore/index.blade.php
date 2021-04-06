<x-app>
    <article>
        <header class="mb-10">
            <h3 class="font-bold">Explore</h3>
        </header>
        <section>
            @foreach ($users as $user)
                <a href="{{$user->path()}}" class="flex mb-5 items-center hover:text-blue-500">
                    <figure>
                        <img style="width: 60px; height: 60px; border-radius: 100%;" src="{{$user->avatar}}" alt="">
                    </figure>
                    <section class="pl-2">
                        <p class="text-bold"><span>@</span>{{$user->username}}</p>
                    </section>
                </a>
            @endforeach
            {{$users->links()}}
        </section>
    </article>
</x-app>    