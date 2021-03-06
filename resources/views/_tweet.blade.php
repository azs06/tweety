<div class="flex p-4 border-b border-gray-300">
                <div class="mr-4 flex-shrink-0">
                    <img src={{$tweet->user->getAvatar()}} class="rounded-full mr-2" alt="">

                </div>
                <div>
                    <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
                    <p class="text-sm">
                        {{ $tweet->body }}
                    </p>
                </div>
            </div>