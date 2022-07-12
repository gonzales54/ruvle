@extends('layouts.app')

@section('content')
    <div class="wrapper-login">
        <div class="text-center">
            <h1 style="color:white;" class="h1 text-white">ユーザー登録</h1>
        </div>
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'ユーザーネーム', ['class' => ' text-white']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
    
                <div class="form-group">
                    {!! Form::label('email', 'Eメール', ['class' => ' text-white']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
    
                <div class="form-group">
                    {!! Form::label('password', 'パスワード', ['class' => ' text-white']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
    
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード(確認)', ['class' => ' text-white']) !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
    
                {!! Form::submit('登録', ['class' => 'btn btn-block']) !!}
            {!! Form::close() !!}
            <p class="mt-2 text-white">ユーザーを作成してる場合 <span class="text-danger">{!! link_to_route('login', 'ログイン') !!}</span></p>
        </div>
    </div>
@endsection

