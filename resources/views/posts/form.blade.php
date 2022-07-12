{!! Form::open(['class'=>'form mb-3', 'route' => 'posts.store', 'files' => true]) !!}
<div class="navtab">
	<div class="tab_btns">
		<p class="tab_btn active">投稿入力</p>
		<p class="tab_btn">写真選択</p>
	</div>
	<div class="tab_items">
		<div class="tab_item active">
			{!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
		</div>
		<div class="tab_item">
            <label class="mb-3">
                写真を選択する
                {{Form::file('image', ['class'=>'custom-file-input','id'=>'fileImage'])}}
            </label>
            <p id="result" class="result"></p>
        </div>
	{!! Form::submit('投稿', ['class' => 'btn btn-block']) !!}
	</div>
</div>
{!! Form::close() !!}
