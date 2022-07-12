@if(Request::routeIs('users.favorites'))
    @if (Auth::user()->is_favorite($favorite->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
            {!! Form::submit('', ['class' => "unfavorite"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $favorite->id], 'method' => 'store']) !!}
            {!! Form::submit('', ['class' => "favorite"]) !!}
        {!! Form::close() !!}
    @endif
    
@else
    @if (Auth::user()->is_favorite($post->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $post->id], 'method' => 'delete']) !!}
            {!! Form::submit('', ['class' => "unfavorite"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $post->id]]) !!}
            {!! Form::submit('', ['class' => "favorite"]) !!}
        {!! Form::close() !!}
    @endif
    
@endif