<div class="border border-blue-400 rounded-lg p-5 mb-6">

<form method="POST" action="/tweets">
    @csrf
    <textarea name="body" id="" class="w-full" placeholder="Whats on your mind?">
    </textarea>

    <hr class="my-4" />

    <footer class="flex justify-between">
        <img src={{auth()->user()->avatar}} width="50px" height="50px" class="rounded-full mr-2" alt="">
        <button type="submit" class="bg-blue-500 rounded-sm shadow py-1 px-2 text-white">Tweet</button>
    </footer>
    @error('body')
        <div class="text-red-500">{{$message}}</div>
    @enderror
</form>

</div>