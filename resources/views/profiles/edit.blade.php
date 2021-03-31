<x-app>
    <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div>
            <label for="">Username</label>
            <input name="username" class="form-input @error('username') is-invalid @enderror" value="{{$user->username}}" type="text">
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label for="">Name</label>
            <input name="name" @error('name') is-invalid @enderror value="{{$user->name}}" type="text">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="">Avatar</label>
            <input type="file" @error('avatar') is-invalid @enderror name="avatar" id="">
            @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
        </div>
        <div>
            <label for="">Email</label>
            <input name="email" @error('email') is-invalid @enderror  value="{{$user->email}}" type="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="">Password</label>
            <input name="password" @error('password') is-invalid @enderror required type="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="">Confirm Password</label>
            <input name="password_confirmation" @error('password_confirmation') is-invalid @enderror required type="password">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit">submit</button>
    </form>
</x-app>    