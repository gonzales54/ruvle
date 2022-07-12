@if(Route::currentRouteName() === 'ruvle.user')
<header class="header d-flex justify-content-between">
    <p class="menu-img my-auto">
        <img src="{!! asset('image/menu-icon1.png') !!}">
    </p>
@else
<header class="header d-flex justify-content-between fixed-top">
    <p class="menu-img my-auto">
        <img src="{!! asset('image/menu-icon2.png') !!}">
    </p>
@endif
    
    <a class="navbar-brand h1 m-0 p-0" href="/">Ruvle</a> 
    
    <nav class="navbar navbar-expand navbar-light p-0">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="nav-bar">
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle p-0" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">{!! link_to_route('ruvle.user', 'プロフィール') !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('users.index', 'ユーザー一覧')  !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('users.favorites', 'お気に入り一覧', ['id' => Auth::user()->id]) !!}</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>