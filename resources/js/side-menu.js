$(function(){
    $('.close-btn').click(function(){
        $('.aside').removeClass('active');
    });        

    $('.menu-img').click(function(){
        $('.aside').addClass('active');
    });
}); 