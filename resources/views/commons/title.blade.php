@if(Route::currentRouteName() === 'users.show')
<h1 class="mb-4 h1 title">投稿一覧</h1>

@elseif(Route::currentRouteName() === 'users.favorites')
<h1 class="mb-4 h1 title">いいねした投稿</h1>

@elseif(Route::currentRouteName() === 'users.followings')
<h1 class="mb-4 h1 title">フォロー中</h1>

@elseif(Route::currentRouteName() === 'users.followers')
<h1 class="mb-4 h1 title">フォロワー</h1>

@elseif(Route::currentRouteName() === 'users.ranking')
<h1 class="mb-4 h1 title">ランキング</h1>

@elseif(Route::currentRouteName() === 'users.index')
<h1 class="mb-4 h1 title">ユーザー検索</h1>
@endif