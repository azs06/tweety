<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-1/8">
                
                    @include('_sidebar_links')
                
                </div>
                <div class="flex-1 lg:mx-10" style="max-width: 700px">
                   {{ $slot }}
                </div>
                <div class="w-1/6 bg-blue-100 rounded-lg p-4">
                
                @include('_sidebar_friends')
                
                </div>
            </div>
        </main>        
    </section>
</x-master>    