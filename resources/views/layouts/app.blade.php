<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Ruvle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="refresh" content="1555; url=">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
        
        @if(Auth::check())
            @if(Route::currentRouteName() === 'ruvle.user')
                <link rel="stylesheet" href="{{ asset('/css/app-index.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('/css/app1.css') }}">
            @endif
            <link rel="stylesheet" href="{{ asset('/css/post.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        @endif
    </head>

    <body>
        @if(Auth::check())
            @if(Route::currentRouteName() === 'ruvle.user')
                <section class="top">
                    @yield('content')
                </section>
            @else
                <section class="top">
                    @include('commons.navbar-user')
                    @include('commons.error_messages')
                    @yield('content')
                </section>
            @endif
        
        @else
        <section class="login-top">
            @include('commons.navbar')
            @include('commons.error_messages')
            @yield('content')
        </section>
    
        @endif
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="{{ asset('./js/side-menu.js') }}"></script>
        
        @if(Route::currentRouteName() === 'ruvle.user')
            <script src="{{ asset('/js/form.js') }}"></script>
        @endif
    </body>
</html>