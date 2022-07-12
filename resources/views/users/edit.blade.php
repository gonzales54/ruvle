@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <section class="wrapper text-center ">
            @include('commons.side-menu')
            <div>
                <h2 class="h2 mb-3">プロフィールの編集</h2>
                {!! Form::open(['route' => ['user.update', $user->id], 'files' => true, 'class' => 'edit-list text-left']) !!}
                    <div class="mb-3 edit-item">
                        <span>ユーザー名</span>
                        <input type="text" class="w-100 form-control" name="profile_name">
                    </div>
                    <div class="mb-3 edit-item">
                        <span>自己紹介</span>
                        {!! Form::textarea('content', null, ['class' => 'textarea form-control', 'rows' => '6', 'name' => 'profile_introduce']) !!}
                </div>
                    <div class="mb-4 edit-img">
                        <div>
                            <span class="d-block mb-2">プロフィール画像</span>
                            <label class="d-inline-block mb-0">
                                <input id="profile_image" class="" type="file" name="profile_image" onChange="previewImage(this)">ファイル選択
                            </label>
                        </div>
                        <p class="p_image"><img id="p_image" class="img-fluid" src="{{ asset('storage/images/' . $user->profile_picture) }}"></p>
                    </div>
                    <div class="mb-4 edit-img">
                        <div>
                            <span class="d-block mb-2">背景画像</span>
                            <label class="d-inline-block mb-0">
                                <input id="background_image" class="" type="file" name="background_image" onChange="previewImage(this)">ファイル選択
                            </label>                        
                        </div>
                        <p class="b_image"><img id="b_image" width="90px" src="{{ asset('storage/images/' . $user->background_picture) }}"></p> 
                </div>
                    <div class="d-flex">
                        {!! Form::submit('ユーザー情報変更', ['class' => "btn btn-danger btn-block m-1"]) !!}
                        
                        {!! Form::button('戻る', ['class' => "btn btn-primary btn-block m-1", 'onClick'=>'history.back()']) !!}
                    </div>
                {!! Form::close() !!}                
            </div>
            

        </section>
    <script>
        function previewImage(obj){
            if(obj.id === 'profile_image'){
              　let fileReader = new FileReader();
                fileReader.onload = (function() {
                    document.getElementById('p_image').src = fileReader.result;
                });
                fileReader.readAsDataURL(obj.files[0]);                
            }else{
              　let fileReader = new FileReader();
                fileReader.onload = (function() {
                    document.getElementById('b_image').src = fileReader.result;
                });
                fileReader.readAsDataURL(obj.files[0]);      
            }

        }
    </script>
    @else
        @include('auth.login')
    @endif
@endsection