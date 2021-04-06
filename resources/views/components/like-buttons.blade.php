<footer>
    <form action="/tweets/{{$tweet->id}}/like" method="POST">
        @csrf
        <button type="submit">Like</button> {{ $tweet->likes ?: 0 }}
    </form>

    <form action="/tweets/{{$tweet->id}}/like" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Dislike</button> {{ $tweet->dislikes ?: 0 }}
    </form>
</footer>