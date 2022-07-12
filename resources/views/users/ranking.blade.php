@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <section class="wrapper text-center">
            @include('commons.side-menu')
            <div>
                @include('commons.title')
                @if(count($users) > 49)
                    <ul class="ranking1 user-list text-left">
                        @if(count($users) > 50)
                        @for($i = 0; $i < 50; $i++)
                            <li class="mb-3">
                                <a class="d-flex text-left" href="{{route('users.show', ['user' => $users[$i]->id])}}">
                                    <p class="mr-1">{{ $i+1 }}</p>
                                    <p class="mr-3">
                                        <img class="rounded-circle img-fluid" src="{{ Gravatar::get($user->email) }}" alt="" width="30px" height="30px">
                                    </p>
                                    @if($users[$i]->id === Auth::user()->id)
                                        <h3>
                                            <b>
                                                {{ $users[$i]->name}}
                                            </b>
                                        </h3>
                                        @if($users[$i]->id !== Auth::user()->id)
                                        <span class="ml-auto mr-3"><b>level {{$user->level}}</b></span>
                                        @endif
                                    @else
                                        <h3>{{ $users[$i]->name}}</h3>
                                        @if($users[$i]->id !== Auth::user()->id)
                                        <span class="ml-auto mr-3"><b>level {{$user->level}}</b></span>
                                        @endif
                                    @endif
                                    @if (Auth::id() != $users[$i]->id)
                                        @if (Auth::user()->is_following($users[$i]->id))
                                            {!! Form::open(['route' => ['user.unfollow', $users[$i]->id], 'method' => 'delete', 'class'=>'form ml-auto']) !!}
                                                {!! Form::submit('フォロー解除', ['class' => "btn btn-danger btn-block my-2 ml-auto"]) !!}
                                            {!! Form::close() !!}
                                        @else
                                            {!! Form::open(['route' => ['user.follow', $users[$i]->id], 'class'=>'form ml-auto']) !!}
                                                {!! Form::submit('フォロー', ['class' => "btn btn-primary btn-block my-2 ml-auto"]) !!}
                                            {!! Form::close() !!}
                                        @endif
                                    @endif
                                </a>
                            </li>
                        @endfor
                        </ul>
                    <ul class="ranking2 user-list text-left">
                        @for($i = 50; $i < count($users); $i++)
                            <li class="mb-3">
                                <a class="d-flex text-left" href="{{route('users.show', ['user' => $users[$i]->id])}}">
                                    <p class="mr-1">{{ $i+1 }}</p>
                                    <p class="mr-3">
                                        <img class="rounded-circle img-fluid" src="{{ Gravatar::get($user->email) }}" alt="" width="30px" height="30px">
                                    </p>
                                    @if($users[$i]->id === Auth::user()->id)
                                        <h3>
                                            <b>
                                                {{ $users[$i]->name}}
                                            </b>
                                        </h3>
                                        @if($users[$i]->id !== Auth::user()->id)
                                        <span class="ml-auto mr-3"><b>level {{$user->level}}</b></span>
                                        @endif
                                    @else
                                        <h3>{{ $users[$i]->name}}</h3>
                                        @if($users[$i]->id !== Auth::user()->id)
                                        <span class="ml-auto mr-3"><b>level {{$user->level}}</b></span>
                                        @endif
                                    @endif
                                    @if (Auth::id() != $users[$i]->id)
                                        @if (Auth::user()->is_following($users[$i]->id))
                                            {!! Form::open(['route' => ['user.unfollow', $users[$i]->id], 'method' => 'delete', 'class'=>'form ml-auto']) !!}
                                                {!! Form::submit('フォロー解除', ['class' => "btn btn-danger btn-block my-2 ml-auto"]) !!}
                                            {!! Form::close() !!}
                                        @else
                                            {!! Form::open(['route' => ['user.follow', $users[$i]->id], 'class'=>'form ml-auto']) !!}
                                                {!! Form::submit('フォロー', ['class' => "btn btn-primary btn-block my-2 ml-auto"]) !!}
                                            {!! Form::close() !!}
                                        @endif
                                    @endif
                                </a>
                            </li>
                        @endfor
                        @endif
                    </ul>    
                @else
                    <ul class="ranking1 user-list text-left">
                    @for($i = 0; $i < count($users); $i++)
                        <li class="mb-3">
                            <a class="d-flex text-left" href="{{route('users.show', ['user' => $users[$i]->id])}}">
                                <p class="mr-1">{{ $i+1 }}</p>
                                <p class="mr-3">
                                    <img class="rounded-circle img-fluid" src="{{ Gravatar::get($user->email) }}" alt="" width="30px" height="30px">
                                </p>
                                @if($users[$i]->id === Auth::user()->id)
                                    <h3>
                                        <b>
                                            {{ $users[$i]->name}}
                                        </b>
                                    </h3>
                                    @if($users[$i]->id !== Auth::user()->id)
                                        <span class="ml-auto mr-3"><b>level {{$user->level}}</b></span>
                                    @endif
                                @else
                                    <h3>{{ $users[$i]->name}}</h3>
                                    @if($users[$i]->id !== Auth::user()->id)
                                    <span class="ml-auto mr-3"><b>level {{$user->level}}</b></span>
                                    @endif
                                @endif
                                @if (Auth::id() != $users[$i]->id)
                                    @if (Auth::user()->is_following($users[$i]->id))
                                        {!! Form::open(['route' => ['user.unfollow', $users[$i]->id], 'method' => 'delete', 'class'=>'form ml-auto']) !!}
                                            {!! Form::submit('フォロー解除', ['class' => "btn btn-danger btn-block my-2 ml-auto"]) !!}
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['route' => ['user.follow', $users[$i]->id], 'class'=>'form ml-auto']) !!}
                                            {!! Form::submit('フォロー', ['class' => "btn btn-primary btn-block my-2 ml-auto"]) !!}
                                        {!! Form::close() !!}
                                    @endif
                                @endif
                            </a>
                        </li>
                    @endfor
                </ul>
                @endif
            </div>


        </section>
    @endif
@endsection