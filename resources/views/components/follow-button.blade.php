<form method="POST" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white">
        {{auth()->user()->following($user) ? 'Unfollow': 'Follow'}}
    </button>
</form>  