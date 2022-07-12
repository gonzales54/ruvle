@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <section class="wrapper text-center">
            @include('commons.side-menu')
            
            <div>
                @include('commons.title')
                @include('posts.favorites')                
            </div>

        </section>
    @endif
@endsection