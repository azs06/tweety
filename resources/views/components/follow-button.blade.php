@if(current_user()->isNot($user))
<form method="POST" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white">
        {{current_user()->following($user) ? 'Unfollow': 'Follow'}}
    </button>
</form>  
@endif