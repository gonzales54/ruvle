@extends('layouts.app')

@section('content')
    <section class="wrapper text-center">
        @include('commons.side-menu')
        <div>
            @include('commons.title')
            <ul class="user-list">
                @foreach($users as $user)
                    @if($user->level > 50)
                    <li class="mb-3">
                        <a class="d-flex text-left" href="{{route('users.show', ['user' => $user->id])}}">
                            <p class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{ Gravatar::get($user->email) }}" alt="" width="30px" height="30px">
                            </p>
                            <h3 class="h3 mb-0 py-1">{{ $user->name }}</h3>
                            @include('user_follow.follow_button')
                        </a>
                    </li>
                    @endif
                @endforeach
            </ul>            
        </div>

    </section>
@endsection