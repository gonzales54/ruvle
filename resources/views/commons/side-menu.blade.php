<aside class="aside">
    <div class="aside-wrapper">
        <p class="close-btn">
            <img src="{!! asset('image/close.png') !!}">
        </p>
        <div class="user">
            <p class="user-img">
                <img class="rounded-circle img-fluid" src="{{ asset('storage/images/'. $user->profile_picture) }}" alt="">
            </p>
            <h3 class="py-2">{{ $user->name }}</h3>
        </div>
        <ul class="items">
            <li>
                <a href="{{ route('ruvle.user')}}" class="d-flex">
                    <p class="menu">ホーム</p>
                </a>
            </li>
            
            <li>
                <a href="{{ route('users.show', ['user' => $user->id]) }}" class="d-flex">
                    <p class="menu">投稿一覧</p>
                    <span class="badge badge-secondary">{{ count($user->posts) }}</span>
                    
                </a>
            </li>
            
            <li>
                <a href="{{ route('users.followings', ['id' => $user->id]) }}" class="d-flex">
                    <p class="menu">フォロー</p>
                    <span class="badge badge-secondary">{{ count($user->followings) }}</span>
                    
                </a>
            </li>
            
            <li>
                <a href="{{ route('users.followers', ['id' => $user->id]) }}" class="d-flex">
                    <p class="menu">フォロワー</p>
                    <span class="badge badge-secondary">{{ count($user->followers) }}</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="d-flex">
                    <p class="menu">いいねした投稿</p>
                    <span class="badge badge-secondary">{{ count($user->favorites) }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('users.ranking', ['id' => $user->id]) }}" class="d-flex">
                    <p class="menu">ランキング</p>
                </a>
            </li>
        </ul>
    </div>
</aside>