@if (count($posts) > 0)
    <ul class="post-ul">
        @foreach ($posts as $post)
        <li class="mb-3">
        @if(Route::currentRouteName() === 'ruvle.user')
            <article class="pt-3 pb-2 text-right">
        @else
            <article class="pb-2 text-right">
        @endif
                <div class="user-name text-left">
                    <p class="mr-3">
                        <img class="rounded-circle img-fluid " src="{{ asset('storage/images/'. $user->profile_picture) }}" alt="">
                    </p>
                    <h3 class="py-1">{{ $post->user->name }}</h3>
                </div>
                <p class="content my-2">{!! nl2br(e($post->content)) !!}</p>
                <p class="post-image">
                    <img src="{{ Storage::url($post->picture_url)}}" class="">
                </p>
                <span class="text-muted d-inline-block my-1">{{ $post->created_at->format('Y/m/d') }}に投稿</span>
                <div class="buttons d-flex justify-content-between">
                    @include('user_favorite.favorite_button')
                    @if (Auth::id() == $post->user_id)
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'class' => 'form-delete mt-2']) !!}
                            {!! Form::submit('', ['class' => 'delete mr-2 mt-1']) !!}
                            <span class="">削除する。</span>
                       {!! Form::close() !!}
                    @endif
                </div>
            </article>
        </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
@endif