@extends('layouts.app')

@section('content')
    <div class="wrapper-login">
        <div class="text-center">
            <h1 class="h1 text-white">ログイン</h1>
        </div>

        <div class="col-sm-6 offset-sm-3">

        {!! Form::open(['route' => 'login.post']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Eメール', ['class' => ' text-white']) !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'パスワード', ['class' => ' text-white']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('ログイン', ['class' => 'btn btn-block']) !!}
        {!! Form::close() !!}

        <p class="mt-2 text-white">ユーザー登録を行ってない場合 <span class="text-danger">{!! link_to_route('signup.get', 'ユーザーを作成') !!}</span></p>
    </div>
@endsection