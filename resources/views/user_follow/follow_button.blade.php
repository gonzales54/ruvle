@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete', 'class'=>'form ml-auto']) !!}
            {!! Form::submit('フォロー解除', ['class' => "btn btn-danger btn-block my-2 ml-auto"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.follow', $user->id], 'class'=>'form ml-auto']) !!}
            {!! Form::submit('フォロー', ['class' => "btn btn-primary btn-block my-2 ml-auto"]) !!}
        {!! Form::close() !!}
    @endif
@endif