<x-app>
    <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="flex items-baseline mb-4 input-block">
            <label class="w-20" for="">Username</label>
            <input name="username" class="form-input border-2 w-full p-1 ml-2 @error('username') is-invalid @enderror" value="{{$user->username}}" type="text">
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="flex items-baseline mb-4 input-block">
            <label class="w-20"  for="">Name</label>
            <input name="name" class="border-2 w-full p-1 ml-2 @error('name') is-invalid @enderror" value="{{$user->name}}" type="text">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="flex items-baseline mb-4 input-block">
            <label class="w-20" for="">Avatar</label>
            <input type="file" class="border-2 w-full p-1 ml-2 @error('avatar') is-invalid @enderror" name="avatar" id="">
            <div style="margin-top: auto">
                <img style="width: auto; height: 40px;" src="{{$user->avatar}}" alt="">
            </div>
            @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
        </div>
        <div class="flex items-baseline mb-4 input-block">
            <label class="w-20"  for="">Email</label>
            <input name="email" class="border-2 w-full p-1 ml-2 @error('email') is-invalid @enderror"  value="{{$user->email}}" type="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="flex items-baseline mb-4 input-block">
            <label class="w-20"  for="">Password</label>
            <input name="password" class="border-2 w-full p-1 ml-2 @error('password') is-invalid @enderror" required type="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="flex items-baseline mb-4 input-block">
            <label class="w-20"  for="">Confirm Password</label>
            <input name="password_confirmation" class="border-2 w-full p-1 ml-2 @error('password_confirmation') is-invalid @enderror" required type="password">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="text-right">
            <button class="bg-blue-500 px-4 py-2 text-center text-white" type="submit">submit</button>
        </div>

    </form>
</x-app>    