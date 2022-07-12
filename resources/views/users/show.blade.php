@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <section class="wrapper text-center mt-3">
            @include('commons.side-menu')
            
            <div>
                @include('commons.title')
                @include('posts.posts')                
            </div>
        </section>

    @endif
    
@endsection