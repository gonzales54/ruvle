$(function(){
	$('.result').html('ファイルが選択されていません。')
	$('.tab_btn').click(function() {
		var index = $('.navtab .tab_btn').index(this);
		$('.navtab .tab_btn, .navtab .tab_item').removeClass('active');
		$(this).addClass('active');
		$('.navtab .tab_item').eq(index).addClass('active');
	});	
	
	$('#fileImage').change(function(){
		const filename = $('#fileImage').prop('files')[0].name;
		$('#result').html(filename);
	})
})


