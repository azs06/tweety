@extends('layouts.app')

@section('content')
<div class="flex justify-between">
    <div class="w-1/8">
    
        @include('_sidebar_links')
    
    </div>
    <div class="flex-1 lg:mx-10" style="max-width: 700px">
        @include('_publish_tweet_panel')
        <div class="border border-gray-300 rounded-lg">
            @foreach($tweets as $tweet)
                @include('_tweet')
            @endforeach
        </div>
    
    </div>
    <div class="w-1/6 bg-blue-100 rounded-lg p-4">
    
    @include('_sidebar_friends')
    
    </div>
</div>
@endsection
