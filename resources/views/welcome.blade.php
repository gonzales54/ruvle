@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="user-div" id="user-div">
            @include('commons.navbar-user')
            @include('commons.error_messages')
            <p class="user-photo">
                <img class="rounded-circle img-fluid " src="{{ asset('storage/images/'. $user->profile_picture) }}" alt="">
            </p>
            <div class="user-name-picture">
                <div class="d-flex justify-content-between">
                    <h3 class="user-name">{{ $user->name }}</h3>    
                    <div>
                        <span class="mr-2">レベル{{ $user->level}}</span> 
                        <span>経験値{{ $user->xp}}/100</span>                        
                    </div>
                </div>
                <p class="contents">{!! nl2br(e($user->profile_introduce)) !!}</p>
            </div>
            <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="edit">
                <img src="{{ asset('../write.png') }}" width="15" height="15">
            プロフィール情報編集
            </a>
        </div>
        <section class="wrapper">
            @include('commons.side-menu')
            <div>
                @include('posts.form')
                @include('posts.posts')
            </div>
        </section>
        
        
        <script>
        window.onload = function(){
            document.getElementById('user-div').setAttribute('style', 'background-image: url({{ asset('storage/images/' . $user->background_picture) }})');
        };
        </script>
    @else
        @include('auth.login')
    @endif
@endsection