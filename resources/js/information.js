$(function(){

  $('.hamburger-menu').click(function(){
    if($('.navi').hasClass('active')){
      $('.navi').hide('slow');
      $('.navi').removeClass('active');
    }else {
      $('.navi').toggleClass('active');
      $('.navi').show('slow')
    }
 });

  $('header a').click(function(){
    var id = $(this).attr('href');
    var position = $(id).offset().top;
    $('html,body').animate({
      'scrollTop': position
    },600);
  });

});
