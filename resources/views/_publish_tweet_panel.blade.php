<div class="border border-blue-400 rounded-lg p-5 mb-6">

<form method="POST" action="/tweets">
    @csrf
    <textarea autofocus name="body" id="" required class="w-full" placeholder="Whats on your mind?">
    </textarea>

    <hr class="my-4" />

    <footer class="flex justify-between">
        <img src={{auth()->user()->avatar}} width="50px" height="50px" style="width:60px; height:60px; border-radius: 100%;" class="mr-2" alt="">
        <button type="submit" class="bg-blue-500 rounded-md shadow py-2 px-5 text-white hover:bg-blue-600">Tweet</button>
    </footer>
    @error('body')
        <div class="text-red-500">{{$message}}</div>
    @enderror
</form>

</div>